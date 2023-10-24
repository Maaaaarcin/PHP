{extends file="main.tpl"}

{block name=content}
	<article id="main">
	<!-- Three -->
	<section class="wrapper style3 container special">
		<header class="major">
			<h2><strong>Register</strong></h2>
		</header>
		<div class="row">
				<form action="{rel_url action="register"}" method="post">
				<div class="row gtr-50">
					<div class="col-6 col-12-mobile">
						<input type="text" name="name" placeholder="Name" />
					</div>
					<div class="col-6 col-12-mobile">
						<input type="text" name="surname" placeholder="Surname" />
					</div>
					<div class="col-6 col-12-mobile">
						<input type="text" name="login" placeholder="Login" />
					</div>
					<div class="col-6 col-12-mobile">
						<input type="password" name="pass" placeholder="Password" />
					</div>
					<div class="col-12">
						<input type="email" name="email" placeholder="Email" />
					</div>
					<div class="col-12">
						<ul class="buttons">
							<li><input type="submit" class="special" value="Register" /></li>
						</ul>
					</div>
				</div>
			</form>
		</div>
	</section>
</article>
{/block}
