<?php
/* Smarty version 4.3.1, created on 2023-07-03 17:17:36
  from 'E:\dev\xampp\htdocs\paw\php07\app\views\LoginView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a2e690edc1a6_00285234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e406c81019ecf9dbddf62cdcfc8b3780f14fa42c' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php07\\app\\views\\LoginView.html',
      1 => 1688397034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.html' => 1,
  ),
),false)) {
function content_64a2e690edc1a6_00285234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107922943264a2e690ecde11_38566113', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_107922943264a2e690ecde11_38566113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_107922943264a2e690ecde11_38566113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper -->
	<div id="wrapper">
<!-- Contact -->
		<h2 class="major">Logowanie</h2>
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">
			<div class="fields">
				<div class="field">
					<input type="text" name="login" autocomplete="off" placeholder="Login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
				</div>
				<div class="field">
					<input type="password" name="pass" autocomplete="off" placeholder="Hasło"/>
				</div>
				<div class="field">
					<input type="submit" value="Zaloguj" class="primary" />
				</div>
			</div>
		</form>
		<div>
			<?php $_smarty_tpl->_subTemplateRender('file:messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>

<?php
}
}
/* {/block 'content'} */
}
