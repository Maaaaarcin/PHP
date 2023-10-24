<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pl">
	<head>
		<title>STæM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{rel_url action="assets/css/main.css"}" />
		<noscript><link rel="stylesheet" href="{rel_url action="assets/css/noscript.css"}" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="{rel_url action=""}">STæM <span>by Marcin</span></a></h1>
					<nav id="nav">
						<ul>
							{if (empty($user->login))}<li><a href="{rel_url action="register"}" class="button primary">Sign Up</a></li>
							<li><a href="{rel_url action="login"}" class="button primary">Sign In</a></li>
							{else}<li><a style="pointer-events: none; border: none;" class="button primary">Points: <b>{$points}</b></a></li>
							{if $user->role == "Admin"}<li><a href="{rel_url action="admin"}" class="button primary">Admin</a></li>{/if}
							<li><a href="{rel_url action="logout"}" class="button primary">Logout</a></li>{/if}
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>STæM</h2>
						</header>
						<p>This is <b>STæM</b>, the best
						<br />
						game selling platform
						<br />
						by <b>Marcin Drapa</b>.</p>
						<footer>
							<ul class="buttons stacked">
								<li><a href="{rel_url action=""}" class="button fit scrolly">Let's buy some games!</a></li>
							</ul>
						</footer>

					</div>

				</section>

{block name=content} {/block}

{* {block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block} *}

			<!-- Footer -->
			<footer id="footer">

			<ul class="icons">
				<li><a href="https://github.com/Maaaaarcin" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
			</ul>

			<ul class="copyright">
				<li>&copy; STæM</li><li>Design: Marcin Drapa</li>
			</ul>

		</footer>

</div>

<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="{rel_url action="assets/js/searchName.js"}"></script>
	<script src="{rel_url action="assets/js/jquery.min.js"}"></script>
	<script src="{rel_url action="assets/js/jquery.dropotron.min.js"}"></script>
	<script src="{rel_url action="assets/js/jquery.scrolly.min.js"}"></script>
	<script src="{rel_url action="assets/js/jquery.scrollex.min.js"}"></script>
	<script src="{rel_url action="assets/js/browser.min.js"}"></script>
	<script src="{rel_url action="assets/js/breakpoints.min.js"}"></script>
	<script src="{rel_url action="assets/js/util.js"}"></script>
	<script src="{rel_url action="assets/js/main.js"}"></script>

</body>
</html>

</body>

</html>