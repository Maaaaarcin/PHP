<?php
/* Smarty version 4.3.1, created on 2023-07-03 23:29:38
  from 'C:\xampp\htdocs\php07\app\views\wynik.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a33dc2489f96_91839830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51a1d7728a5bc089697109d9ebb7990c372a53eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php07\\app\\views\\wynik.html',
      1 => 1688398761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a33dc2489f96_91839830 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="tab_people" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Paliwo</th>
            <th>Cena</th>
            <th>Kilometry</th>
            <th>Result</th>
            <th>Koszt</th>
            <?php if (inRole('admin')) {?>
                <th>Opcje</th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["paliwo"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["cena"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["kilometry"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["result"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["koszt"];?>
</td><?php if (inRole('admin')) {?><td><a id="recordDelete" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
wynikDelete&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">Usuń</a></td><?php }?></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
 </table><?php }
}
