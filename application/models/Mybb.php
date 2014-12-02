<?php

/**
 * Class Mybb
 *
 * Implements helper functions for grabbing information from
 * the MyBB install.
 *
 * Can be configured by modifying application/config/mybb.php
 */
class Mybb extends CI_Model {

    /**
     * Are we running in mock mode? 
     * If so, fake database results.
     * @var boolean
     */
    protected $mock = false;

    //--------------------------------------------------------------------

    /**
     * Constructor.
     * Establish database connection, if appropriate.
     */
    public function __construct()
    {
	parent::__construct();

	// If not running in production, nothing further to do
	$this->mock = ENVIRONMENT != 'production';
	if ($this->mock)
	    return;

	$this->load->database('mybb');
    }

    //--------------------------------------------------------------------

    /**
     * Retrieves the latest X posts. The posts must be in the forum specified in
     * $config['forum_id'], have a replyto=0, username in the $config['news_usernames'] array,
     * and visible=1.
     *
     * @param int $limit Number of the posts to retrieve
     * @param str $order Direction to order results by. Either 'asc' or 'desc'
     * @return null
     */
    public function getRecentNews($limit = 5, $order = 'desc')
    {
	// If not running in production, return the mock data
	if ($this->mock)
	    return $this->config->item('bogus_news');

	$where = array(
	    'replyto' => 0,
	    'visible' => 1,
	    'fid' => $this->config->item('news_forum_id')
	);

	$query = $this->db->select('subject, username, dateline, tid')
		->where_in('username', $this->config->item('news_usernames'))
		->where($where)
		->limit($limit, 0)
		->order_by('dateline', $order)
		->get('mybb_posts');

	return (!$query->num_rows()) ? null : $query->result_array();
    }

    //--------------------------------------------------------------------

    /**
     * Grabs the most recently active threads from the forums.
     *
     * @param int $limit
     * @param string $order
     * @return null
     */
    public function getRecentPosts($limit = 5, $order = 'desc')
    {
	// If not running in production, return the mock data
	if ($this->mock)
	    return $this->config->item('bogus_posts');

	$where = array(
	    'visible' => 1,
	    'deletetime' => 0
	);

	$query = $this->db->select('tid, subject, username, lastpost, lastposter')
		->where($where)
		->limit($limit, 0)
		->order_by('lastpost', $order)
		->get('mybb_threads');

	return (!$query->num_rows()) ? null : $query->result_array();
    }

    //--------------------------------------------------------------------
}
