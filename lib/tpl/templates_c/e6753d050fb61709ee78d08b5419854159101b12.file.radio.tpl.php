<?php /* Smarty version Smarty-3.1.1, created on 2014-12-06 13:28:41
         compiled from "templates\champs\radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8333543cfaa27cd2e6-38472026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6753d050fb61709ee78d08b5419854159101b12' => 
    array (
      0 => 'templates\\champs\\radio.tpl',
      1 => 1417866761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8333543cfaa27cd2e6-38472026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cfaa294c04',
  'variables' => 
  array (
    'f_error' => 0,
    'f_required' => 0,
    'f_id' => 0,
    'f_label' => 0,
    'f_options' => 0,
    'k' => 0,
    'f_value' => 0,
    'v' => 0,
    'f_name' => 0,
    'f_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cfaa294c04')) {function content_543cfaa294c04($_smarty_tpl) {?><div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'>
<label class='col-sm-2 control-label <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' for='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_label']->value;?>
</label>
<div class='col-sm-6'>
	<div class='btn-group' data-toggle='buttons'>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<label class='btn btn-default  <?php if (($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['f_value']->value||$_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['f_value']->value)){?> active<?php }?>'>
			<input type='radio' name='<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' <?php if (($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['f_value']->value||$_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['f_value']->value)){?> checked='checked'<?php }?>>
			<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

		</label>
	<?php } ?>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['f_msg']->value){?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f_msg']->value;?>
</span><?php }?>
</div><?php }} ?>