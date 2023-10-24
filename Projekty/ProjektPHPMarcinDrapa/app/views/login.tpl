{extends file="main.tpl"}

{block name=content}
	<article id="main">
	<!-- Three -->
	<section class="wrapper style3 container special">
		<header class="major">
			<h2><strong>Login</strong></h2>
		</header>
		<div class="row">
				<form action="{rel_url action="login"}" method="post">
				<div class="row gtr-50">
					<div class="col-6 col-12-mobile">
						<input type="text" name="login" placeholder="Login" />
					</div>
					<div class="col-6 col-12-mobile">
						<input type="password" name="pass" placeholder="Password" />
					</div>
					<div class="col-12">
						<ul class="buttons">
							<li><input type="submit" class="special" value="Login" /></li>
						</ul>
					</div>
				</div>
			</form>
		</div>
	</section>
</article>
{/block}
