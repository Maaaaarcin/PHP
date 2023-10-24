<?php
/* Smarty version 4.3.0, created on 2023-09-29 11:47:29
  from 'F:\wamp64\www\staem\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6516b951212614_55012020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b06f06c71fb0fe197650f1cf19d816bcb15baad' => 
    array (
      0 => 'F:\\wamp64\\www\\staem\\app\\views\\login.tpl',
      1 => 1695575301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516b951212614_55012020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8659879866516b95120e532_05442393', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_8659879866516b95120e532_05442393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8659879866516b95120e532_05442393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article id="main">
	<!-- Three -->
	<section class="wrapper style3 container special">
		<header class="major">
			<h2><strong>Login</strong></h2>
		</header>
		<div class="row">
				<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"login"),$_smarty_tpl ) );?>
" method="post">
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
<?php
}
}
/* {/block 'content'} */
}
