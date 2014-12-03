<?php /* Smarty version Smarty-3.1.1, created on 2014-12-03 09:54:39
         compiled from "modules\GestionProgramme\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32618547ebf3a813d78-73278228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6278e0402ec5ff3b1ab016dee0da9c2e2f292ba8' => 
    array (
      0 => 'modules\\GestionProgramme\\tpl\\detail.tpl',
      1 => 1417596837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32618547ebf3a813d78-73278228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_547ebf3a98177',
  'variables' => 
  array (
    'reference' => 0,
    'donnees' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ebf3a98177')) {function content_547ebf3a98177($_smarty_tpl) {?>
<div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Afficher les détails de l'enregistrement...</p>
	<a href="?module=GestionProgramme&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
" class='btn btn-danger'>Supprimer</a>
	<a href="?module=GestionProgramme&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
" class='btn btn-default'>Modifier</a>
</div><?php }} ?>