<?php
/* Smarty version 3.1.30, created on 2021-03-30 01:18:50
  from "C:\xampp\htdocs\loan-calc\app\views\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6062605a8f3f29_64338699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca65bf122d677f1781972fe4ff74f28608269f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loan-calc\\app\\views\\templates\\main.html',
      1 => 1617059894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6062605a8f3f29_64338699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? 'Opis domyślny' : $tmp);?>
">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css"
		integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
</head>

<body>

	<div class="header">
		<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Nagłówek" : $tmp);?>
</h1>
		<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Prosty kalkulator" : $tmp);?>
</h1>
			<p>
				<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

			</p>
	</div>

	<div class="content">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15076377556062605a8f19e9_65605385', 'content');
?>

	</div><!-- content -->

	<div class="footer">
		<p>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19136743716062605a8f3623_84885647', 'footer');
?>

		</p>
		<p>
			Stopka
		</p>
	</div>

</body>

</html><?php }
/* {block 'content'} */
class Block_15076377556062605a8f19e9_65605385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_19136743716062605a8f3623_84885647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
