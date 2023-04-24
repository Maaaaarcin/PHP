<?php
/* Smarty version 4.3.1, created on 2023-04-24 03:24:14
  from 'C:\xampp\htdocs\zadankotrzy\app\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6445da3e4f22d5_27673737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9371c99747d0773272b93ad1929d71a7e30fa6c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadankotrzy\\app\\index.html',
      1 => 1682299452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6445da3e4f22d5_27673737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4908388046445da3e4e52c1_34224440', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10223337226445da3e4e5db4_03675793', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_4908388046445da3e4e52c1_34224440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4908388046445da3e4e52c1_34224440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_10223337226445da3e4e5db4_03675793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10223337226445da3e4e5db4_03675793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Kalkulator</h1>
								<p>A fully responsive site template designed by <a href="https://html5up.net">HTML5 UP</a> and released<br />
								for free under the <a href="https://html5up.net/license">Creative Commons</a> license.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">Home</a></li>
								<li><a href="#kalkulator">Kalkulator</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								
							</article>
						<!-- Contact -->
							<article id="kalkulator">
								<h2 class="major">Kalkulator</h2>
								<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php#kalkulator">
									<div class="fields">
										<div class="field">
						
											<input type="text" name="paliwo" autocomplete="off" placeholder="Podaj spalone paliwo w litrach:" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['paliwo'];?>
"/>
										</div>
										<div class="field">
	
											<input type="text" name="cena" autocomplete="off" placeholder="Cena litra paliwa:" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['cena'];?>
"/>
							
										</div>
										<div class="field">
										
											<input type="text" name="kilometry" autocomplete="off" placeholder="Podaj ilość przejechanych kilometrów:" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kilometry'];?>
"/>
										
										</div>
										<div class="field">
											<input type="submit" value="Oblicz" class="primary" />
										</div>
									</div>
								</form>

																<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
									<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
										<h2>Wystąpiły błędy: </h2>
										<div>
										<ol>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
										<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ol>
										</div>
									<?php }?>
								<?php }?>

								<?php if (((isset($_smarty_tpl->tpl_vars['result']->value)))) {?>
                   					<h2>Wynik:</h2>
                   					<div>
                   					<p>Srednie zuzycie paliwa:<?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 </p>
                   					<p>koszt trasy wynosi <?php echo $_smarty_tpl->tpl_vars['koszt']->value;?>
 </p>
                   					
                   					</div>
               					<?php }?>
							</article>
					</div>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
