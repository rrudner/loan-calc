<?php
/* Smarty version 3.1.30, created on 2021-04-12 20:14:07
  from "C:\xampp\htdocs\loan-calc\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60748defb3db54_22724204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58644aeacd7e17f358b13694ba1d210060ed2188' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loan-calc\\app\\views\\templates\\main.tpl',
      1 => 1618251246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60748defb3db54_22724204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "brak tytułu" : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
</head>

<body style="background-color:#d2dbfc;">
	<div style="text-align:center;">
	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174224502760748defb3d2f0_91316792', 'content');
?>

	</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_174224502760748defb3d2f0_91316792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
