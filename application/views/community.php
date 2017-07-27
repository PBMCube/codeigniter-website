<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/community.php
 *
 * Describe the CodeIgniter community
 *
 */
?>
<div class="container">
    <div class="row">

		<div class="col-md-12 col-sm-12 text-center title">
			<span class="glyphicon glyphicon-user big-glyph"></span>
			CodeIgniter is a community-developed open source project,<br>with several venues for the community members to gather and exchange ideas.
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="alert alert-info" role="alert">
				Security issues should be reported with an email to our
				<a href="mailto:security@codeigniter.com">security team</a>, rather
				than being brought up on the forum or raised as a Github issue, thanks!
			</div>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>Forum</h3>

					<p>
						Our forum has been setup using MyBB, with five main categories:
					<ul>
						<li>General (News &amp; Discussion, Lounge, Events, and Regional User Groups)</li>
						<li>Using CodeIgniter (Choosing CodeIgniter, Installation &amp; Setup, 
							Model-View-Controller, Libraries &amp; Helpers, Best Practices, and General Help)</li>
						<li>CodeIgniter 4 (development, feature requests, support, discussion)</li>
						<li>Development (CodeIgniter 3.x, CodeIgniter 2.x, Issues, and NetBeand Plugin)</li>
						<li>External Resources (Addons, Jobs, Learn More, and Spotlight)</li>
					</ul>
					</p>
					<p><strong>The forum is where you can ask for help or discuss issues you are having with the framework.</strong></p>
					<p>
						The previous CodeIgniter forums are archived on EllisLab's server. 
						EllisLab has provided the archived posts to us, and they are being transferred to the new forum, so all the content is together.
					</p>
					<a class="btn btn-primary btn-block" href="{mybb_forum_url}"><span class="glyphicon glyphicon-share"></span> Visit the forum</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3>Slack.</h3>

					<p>
						CodeIgniter has a Slack channel, where you can engage 
						with other members of the community.</p>
					<a class="btn btn-info btn-block" href="https://codeigniterchat.slack.com" target="_blank" rel="noopener noreferrer">
						<span class="glyphicon glyphicon-share"></span> Visit Slack</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3>Github</h3>

					<p>
						The development action takes place on Github. See the contribute page for more details.
					</p>
					<p><strong>The Github repository is where you can file bug reports (Github issues),
							or where you can submit pull requests for enhancements to or fixes for the framework.
							Github is *not* for support or help, use the forum instead.</strong></p>
					<p>Github issues are also used for tracking planned and approved enhancements,
						often tied into specific releases.</p>
					<br/>
					<a class="btn btn-info btn-block" href="https://github.com/bcit-ci/CodeIgniter/"><span class="glyphicon glyphicon-share"></span> Visit Github</a>
				</div>
			</div>
		</div>

    </div>
</div>
