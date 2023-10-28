<?php
/* Smarty version 4.3.0, created on 2023-10-28 19:42:37
  from 'D:\xampp\htdocs\Projekty\ProjektPHPMarcinDrapa\app\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_653d480d03a578_72280350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bef9ec791582198345afecb0ae85f5b5303b1f47' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Projekty\\ProjektPHPMarcinDrapa\\app\\views\\register.tpl',
      1 => 1698112270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653d480d03a578_72280350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2085757970653d480d037f43_71546295', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2085757970653d480d037f43_71546295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2085757970653d480d037f43_71546295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article id="main">
	<!-- Three -->
	<section class="wrapper style3 container special">
		<header class="major">
			<h2><strong>Register</strong></h2>
		</header>
		<div class="row">
				<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"register"),$_smarty_tpl ) );?>
" method="post">
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
<?php
}
}
/* {/block 'content'} */
}
