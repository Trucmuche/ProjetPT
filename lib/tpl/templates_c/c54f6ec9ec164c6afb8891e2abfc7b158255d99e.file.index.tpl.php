<?php /* Smarty version Smarty-3.1.1, created on 2014-10-21 11:32:40
         compiled from "modules\Essai\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2281954461c162f6c63-10006758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c54f6ec9ec164c6afb8891e2abfc7b158255d99e' => 
    array (
      0 => 'modules\\Essai\\tpl\\index.tpl',
      1 => 1413883958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2281954461c162f6c63-10006758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54461c1637f80',
  'variables' => 
  array (
    'variable' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54461c1637f80')) {function content_54461c1637f80($_smarty_tpl) {?><html>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['variable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<p><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 </p>
		<?php } ?>
</html><?php }} ?>