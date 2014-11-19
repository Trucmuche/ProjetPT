<?php /* Smarty version Smarty-3.1.1, created on 2014-10-14 12:27:46
         compiled from "templates\champs\textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:578543cfaa29e8463-75378413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62dc14307ce1c54f40b9b5b327036f49e193735f' => 
    array (
      0 => 'templates\\champs\\textarea.tpl',
      1 => 1413158696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '578543cfaa29e8463-75378413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'f_error' => 0,
    'f_required' => 0,
    'f_id' => 0,
    'f_label' => 0,
    'f_name' => 0,
    'f_value' => 0,
    'f_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cfaa2aab99',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cfaa2aab99')) {function content_543cfaa2aab99($_smarty_tpl) {?><div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'>
	<label class='col-sm-2 control-label <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' for='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_label']->value;?>
</label>
	<div class='col-sm-6'>
		<?php if ($_smarty_tpl->tpl_vars['f_error']->value){?>
		<div class='input-group'>
		<?php }?>
		<textarea name='<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
' class='form-control <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
</textarea>
		<?php if ($_smarty_tpl->tpl_vars['f_error']->value){?>
			<span class='input-group-addon'><span class='glyphicon glyphicon-exclamation-sign'></span></span>		
		</div>
		<?php }?>		
		
	</div>
	<?php if ($_smarty_tpl->tpl_vars['f_msg']->value){?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f_msg']->value;?>
</span><?php }?>
</div><?php }} ?>