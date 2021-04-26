<?php
/* Smarty version 3.1.30, created on 2021-04-26 16:06:12
  from "C:\xampp\htdocs\loan-calc\app\views\TableView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6086c8d4193e10_77954239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a87c8d9d66da1739d75b69e180c66e46edef5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loan-calc\\app\\views\\TableView.tpl',
      1 => 1619445970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6086c8d4193e10_77954239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4075148896086c8d4193352_82312967', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_4075148896086c8d4193352_82312967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
<span style="float:right;">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-button pure-button-primary">wyloguj: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showCalc"  class="pure-button pure-button-primary">kalkulator</a>
	</span>
</div>

<fieldset>
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
    <tr>
        <th> Kwota </th>
        <th> Oprocentwoanie </th>
        <th> Lata </th>
        <th> Rata </th>
        <th> Data i Czas </th>
    </tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
        <tr><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["amount"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["interest"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["years"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["result"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['r']->value["date"];?>
 </td></tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</tbody>
</table>
</fieldset>

<?php
}
}
/* {/block 'content'} */
}
