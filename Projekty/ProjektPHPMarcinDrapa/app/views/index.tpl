{extends file="main.tpl"}

{block name="content"}
<!-- Main -->
	<article id="main">
		<!-- Three -->
		<section class="wrapper style3 container special">
			<header class="major">
				<h2>Check out this <strong>cool games</strong></h2>
				<div class="filters">
					<input type="text" class="searchName" placeholder="Nazwa"/>
				</div>
			</header>
			<div class="games">
				<div class="row">
					{foreach $games as $g}
						<div class="col-6 col-12-narrower">
							<section>
									<a href="#" id="picture"><img style="width: inherit; height: inherit; object-fit: fill;" src="{rel_url src="images/{$g["picture"]}"}" alt="" /></a>
								<header>
									<h3>{$g["title"]}</h3>
								</header>
								<p>{$g["price"]} points</p>
								{if $user->id>0}<p><a id="gameAdd" href="{rel_url action="buy" id=$g["game_id"]}">Kup</a></p>{/if}
							</section>
						</div>
					{/foreach}
				</div>
			</div>
			<div class="row" id="pages">
			{foreach $numer as $n}
				<form action="{rel_url action="index" id=$n}" method="post">
					<input type="submit" value="{$n}" />
				</form>
			{/foreach}
			</div>
		</section>
	</article>
{/block}