<?php
/* Smarty version 4.3.0, created on 2023-10-29 03:25:21
  from 'D:\xampp\htdocs\Projekty\ProjektPHPMarcinDrapa\app\views\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_653dc29151eab4_65829364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13bf951af059dc3319081aebd7279f8c10f7ed2c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Projekty\\ProjektPHPMarcinDrapa\\app\\views\\admin.tpl',
      1 => 1698546320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653dc29151eab4_65829364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177153307653dc291513833_03891539', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_177153307653dc291513833_03891539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_177153307653dc291513833_03891539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article id="main">
	<!-- Three -->
	<section class="wrapper style3 container special">
		<header class="major">
			<h2><strong>add new game</strong></h2>
		</header>
		<div class="row">
				<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"gameAdd"),$_smarty_tpl ) );?>
" method="post">
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
		<table>
			<thead>
				<tr><strong>
					<th>Name</th>
					<th>Surname</th>
					<th>Email</th>
					<th>Login</th>
					<th>Points</th>
				</strong></tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['surname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['login'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['points'];?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	</section>
</article>
<?php
}
}
/* {/block 'content'} */
}
