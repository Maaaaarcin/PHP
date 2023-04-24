<?php
/* Smarty version 4.3.1, created on 2023-04-23 20:02:00
  from 'C:\xampp\htdocs\michu\app\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644572980b7273_21302304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1a275e7344582bdde171d72e9e2c24cea3f2f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\michu\\app\\index.html',
      1 => 1681778811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644572980b7273_21302304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271550892644572980a8f96_35408828', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_926583130644572980a9c85_54563172', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_271550892644572980a8f96_35408828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_271550892644572980a8f96_35408828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_926583130644572980a9c85_54563172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_926583130644572980a9c85_54563172',
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
						
											<input type="text" name="kwota" autocomplete="off" placeholder="Kwota kredytu:" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
"/>
										</div>
										<div class="field">
	
											<input type="text" name="oprocentowanie" autocomplete="off" placeholder="Oprocentowanie kredytu (w %):" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocentowanie'];?>
"/>
							
										</div>
										<div class="field">
										
											<input type="text" name="czas" autocomplete="off" placeholder="Okres kredytowania (w miesiącach):" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['czas'];?>
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

								<?php if (((isset($_smarty_tpl->tpl_vars['rata']->value)))) {?>
                   					<h2>Wynik:</h2>
                   					<div>
                   					<p>Miesięczna rata: <?php echo $_smarty_tpl->tpl_vars['rata']->value;?>
 PLN</p>
                   					<p>Całkowity koszt kredytu: <?php echo $_smarty_tpl->tpl_vars['calkowita_platnosc']->value;?>
 PLN</p>
                   					<p>Koszt odsetek: <?php echo $_smarty_tpl->tpl_vars['odsetki']->value;?>
 PLN</p>
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
