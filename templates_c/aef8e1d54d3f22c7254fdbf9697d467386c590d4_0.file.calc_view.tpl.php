<?php
/* Smarty version 3.1.39, created on 2021-03-15 19:57:15
  from 'C:\xampp\htdocs\szablon\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604fae0bb9a962_34587849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef8e1d54d3f22c7254fdbf9697d467386c590d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szablon\\app\\calc_view.tpl',
      1 => 1615834484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604fae0bb9a962_34587849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42325766604fae0bb81df4_34480213', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_42325766604fae0bb81df4_34480213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_42325766604fae0bb81df4_34480213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<h2 class="content-head is-center">Kalkulator Kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1-2">

        <form action="http://localhost/szablon/app/calc.php" method="post">
            <label for="id_amount"> Kwota Pozyczki: </label>
            <input id="id_amount" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
" >
            <label for="years"> Lata: </label><input id="years" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
" >
            <label for="interest"> Oprocentowanie: </label><input id="interest" type="text" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['interest'];?>
" >
            <input type="submit" value="Oblicz" />
        </form>
        </div>

<div class="l-box-lrg pure-u-1-2">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
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
	<?php }
}?>



        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
