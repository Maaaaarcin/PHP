<?php
/* Smarty version 4.3.0, created on 2023-10-28 19:30:52
  from 'D:\xampp\htdocs\Projekty\ProjektPHPMarcinDrapa\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_653d454ce47f08_70588928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0414bc857fed2b7b281e37c8fed3fb3bb36ad05f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Projekty\\ProjektPHPMarcinDrapa\\app\\views\\templates\\main.tpl',
      1 => 1698112270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653d454ce47f08_70588928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
		<link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/css/main.css"),$_smarty_tpl ) );?>
" />
		<noscript><link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/css/noscript.css"),$_smarty_tpl ) );?>
" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>''),$_smarty_tpl ) );?>
">STæM <span>by Marcin</span></a></h1>
					<nav id="nav">
						<ul>
							<?php if ((empty($_smarty_tpl->tpl_vars['user']->value->login))) {?><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"register"),$_smarty_tpl ) );?>
" class="button primary">Sign Up</a></li>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"login"),$_smarty_tpl ) );?>
" class="button primary">Sign In</a></li>
							<?php } else { ?><li><a style="pointer-events: none; border: none;" class="button primary">Points: <b><?php echo $_smarty_tpl->tpl_vars['points']->value;?>
</b></a></li>
							<?php if ($_smarty_tpl->tpl_vars['user']->value->role == "Admin") {?><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"admin"),$_smarty_tpl ) );?>
" class="button primary">Admin</a></li><?php }?>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="button primary">Logout</a></li><?php }?>
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
								<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>''),$_smarty_tpl ) );?>
" class="button fit scrolly">Let's buy some games!</a></li>
							</ul>
						</footer>

					</div>

				</section>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_586558513653d454ce442f6_57885009', 'content');
?>



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
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/searchName.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/jquery.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/jquery.dropotron.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/jquery.scrolly.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/jquery.scrollex.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/browser.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/breakpoints.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/util.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/main.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>

</body>
</html>

</body>

</html><?php }
/* {block 'content'} */
class Block_586558513653d454ce442f6_57885009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_586558513653d454ce442f6_57885009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
