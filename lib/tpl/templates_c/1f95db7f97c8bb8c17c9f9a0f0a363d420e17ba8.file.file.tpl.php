<?php /* Smarty version Smarty-3.1.1, created on 2014-12-03 18:38:59
         compiled from "templates\champs\file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14224543cfaa2cde215-91553422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f95db7f97c8bb8c17c9f9a0f0a363d420e17ba8' => 
    array (
      0 => 'templates\\champs\\file.tpl',
      1 => 1417628191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14224543cfaa2cde215-91553422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cfaa2d861c',
  'variables' => 
  array (
    'f_error' => 0,
    'f_required' => 0,
    'f_id' => 0,
    'f_label' => 0,
    'f_name' => 0,
    'f_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cfaa2d861c')) {function content_543cfaa2d861c($_smarty_tpl) {?><div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'>
<label class='col-sm-2 control-label <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' for='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_label']->value;?>
</label>
<div class='col-sm-6'>
<input type='file' name='<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
' class='form-control'>
</div>
<?php if ($_smarty_tpl->tpl_vars['f_msg']->value){?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f_msg']->value;?>
</span><?php }?>
</div><?php }} ?>