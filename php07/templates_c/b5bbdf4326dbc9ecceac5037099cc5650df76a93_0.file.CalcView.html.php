<?php
/* Smarty version 4.3.1, created on 2023-07-03 23:29:38
  from 'C:\xampp\htdocs\php07\app\views\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a33dc22b5b64_71102468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5bbdf4326dbc9ecceac5037099cc5650df76a93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php07\\app\\views\\CalcView.html',
      1 => 1688398962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.html' => 1,
    'file:wynik.html' => 1,
  ),
),false)) {
function content_64a33dc22b5b64_71102468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62393205664a33dc22a4323_77289306', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_62393205664a33dc22a4323_77289306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_62393205664a33dc22a4323_77289306',
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
								<li><a href="#kalkulator">Kalkulator</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
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
								<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute#kalkulator">
									<div class="fields">
										<div class="field">
											<input type="text" name="paliwo" autocomplete="off" placeholder="Podaj spalone paliwo w litrach:" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->paliwo;?>
"/>
										</div>
										<div class="field">
											<input type="text" name="cena" autocomplete="off" placeholder="Cena litra paliwa:" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena;?>
"/>
										</div>
										<div class="field">
											<input type="text" name="kilometry" autocomplete="off" placeholder="Podaj ilość przejechanych kilometrów:" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kilometry;?>
"/>
										</div>
										<div class="field">
											<input type="submit" value="Oblicz" class="primary" />
										</div>
									</div>
								</form>
								<div>
								<?php $_smarty_tpl->_subTemplateRender('file:messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

								<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
									<h4>Wynik</h4>
									<p class="res">
									Średnie spalanie na 100km:
									<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
l
									</p>
									
									<p class="res">
									Cena za paliwo:
									<?php echo $_smarty_tpl->tpl_vars['res']->value->koszt;?>
zł
									</p>
								<?php }?>

								<?php $_smarty_tpl->_subTemplateRender('file:wynik.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
								</div>
							</article>
					</div>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			

<?php
}
}
/* {/block 'content'} */
}
