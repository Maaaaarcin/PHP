<?php
/* Smarty version 4.3.0, created on 2023-09-29 11:47:23
  from 'F:\wamp64\www\staem\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6516b94b230a61_43774298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f28b7d8a235f705a984b623c892c97fc9e7ec9e2' => 
    array (
      0 => 'F:\\wamp64\\www\\staem\\app\\views\\index.tpl',
      1 => 1695986706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516b94b230a61_43774298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9360198716516b94b08f899_83076985', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_9360198716516b94b08f899_83076985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9360198716516b94b08f899_83076985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
						<div class="col-6 col-12-narrower">
							<section>
									<a href="#" id="picture"><img style="width: inherit; height: inherit; object-fit: fill;" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('src'=>"images/".((string)$_smarty_tpl->tpl_vars['g']->value["picture"])),$_smarty_tpl ) );?>
" alt="" /></a>
								<header>
									<h3><?php echo $_smarty_tpl->tpl_vars['g']->value["title"];?>
</h3>
								</header>
								<p><?php echo $_smarty_tpl->tpl_vars['g']->value["price"];?>
 points</p>
								<?php if ($_smarty_tpl->tpl_vars['user']->value->id > 0) {?><p><a id="gameAdd" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"buy",'id'=>$_smarty_tpl->tpl_vars['g']->value["game_id"]),$_smarty_tpl ) );?>
">Kup</a></p><?php }?>
							</section>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<div class="row" id="pages">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['numer']->value, 'n');
$_smarty_tpl->tpl_vars['n']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->do_else = false;
?>
				<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"index",'id'=>$_smarty_tpl->tpl_vars['n']->value),$_smarty_tpl ) );?>
" method="post">
					<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" />
				</form>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</section>
	</article>
<?php
}
}
/* {/block "content"} */
}
