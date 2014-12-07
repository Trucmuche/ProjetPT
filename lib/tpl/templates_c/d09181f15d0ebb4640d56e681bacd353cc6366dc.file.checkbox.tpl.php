<?php /* Smarty version Smarty-3.1.1, created on 2014-12-06 18:43:24
         compiled from "templates\champs\checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27940543cfaa2694aa3-53477125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd09181f15d0ebb4640d56e681bacd353cc6366dc' => 
    array (
      0 => 'templates\\champs\\checkbox.tpl',
      1 => 1417866761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27940543cfaa2694aa3-53477125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cfaa27214c',
  'variables' => 
  array (
    'f_error' => 0,
    'f_required' => 0,
    'f_id' => 0,
    'f_label' => 0,
    'f_name' => 0,
    'f_checked' => 0,
    'f_value' => 0,
    'f_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cfaa27214c')) {function content_543cfaa27214c($_smarty_tpl) {?><div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'>
<label class='col-sm-2 control-label <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' for='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_label']->value;?>
</label>
<div class='col-sm-6'>
<input type='checkbox' name='<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
' class='' <?php echo $_smarty_tpl->tpl_vars['f_checked']->value;?>
 value='<?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
'>
</div>
<?php if ($_smarty_tpl->tpl_vars['f_msg']->value){?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f_msg']->value;?>
</span><?php }?>
</div><?php }} ?>