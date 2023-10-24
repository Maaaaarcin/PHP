{extends file="main.tpl"}

{block name=content}
	<article id="main">
	<!-- Three -->
	<section class="wrapper style3 container special">
		<header class="major">
			<h2><strong>add new game</strong></h2>
		</header>
		<div class="row">
				<form action="{rel_url action="gameAdd"}" method="post">
				<div class="row gtr-50">
					<div class="col-6 col-12-mobile">
						<input type="text" name="title" placeholder="Title" />
					</div>
					<div class="col-6 col-12-mobile">
						<input type="number" name="price" min="1" placeholder="Price" />
					</div>
					<div class="col-12 col-12-mobile">
						<label  id="gameAdd" for="file">Add image</label>
						<input style="display: none" type="file" id="file" accept="image/*" name="picture" placeholder="Picture" />
					</div>
					<div class="col-12">
						<ul class="buttons">
							<li><input type="submit" class="special" value="Add" /></li>
						</ul>
					</div>
				</div>
			</form>
		</div>
	</section>
</article>
{/block}
