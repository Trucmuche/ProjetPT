<?php /* Smarty version Smarty-3.1.1, created on 2014-12-20 17:15:26
         compiled from "modules\Programmes\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16102547f5f16b3b582-16135588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edfe52a7871e2d50f8f3ef84faa14efe1b73eabd' => 
    array (
      0 => 'modules\\Programmes\\tpl\\detail.tpl',
      1 => 1419092108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16102547f5f16b3b582-16135588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_547f5f1713220',
  'variables' => 
  array (
    'reference' => 0,
    'detail' => 0,
    'd' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f5f1713220')) {function content_547f5f1713220($_smarty_tpl) {?>
<div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['l']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
		<img src="images/Image Programmes/<?php echo $_smarty_tpl->tpl_vars['d']->value->ImageProgramme;?>
" />
	<?php } ?>
	<a href="?module=Programmes&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&ref=<?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
" class='btn btn-danger'>Supprimer</a>
	<a href="?module=Programmes&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&ref=<?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
" class='btn btn-default'>Modifier</a>
</div><?php }} ?>