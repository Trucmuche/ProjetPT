<?php /* Smarty version Smarty-3.1.1, created on 2014-12-06 18:43:20
         compiled from "modules\Programmes\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16102547f5f16b3b582-16135588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edfe52a7871e2d50f8f3ef84faa14efe1b73eabd' => 
    array (
      0 => 'modules\\Programmes\\tpl\\detail.tpl',
      1 => 1417866761,
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
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f5f1713220')) {function content_547f5f1713220($_smarty_tpl) {?>
<div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p class="description">
		<?php echo $_smarty_tpl->tpl_vars['detail']->value->Description;?>
		
	</p>
	<p>
		<?php if (($_smarty_tpl->tpl_vars['detail']->value->Pegi==0)){?>
			Déja diffusé
		<?php }else{ ?>
			Inedit
		<?php }?>
	</p>
	
	<a href="?module=Programmes&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&ref=<?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
" class='btn btn-danger'>Supprimer</a>
	<a href="?module=Programmes&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&ref=<?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
" class='btn btn-default'>Modifier</a>
</div><?php }} ?>