<?php /* Smarty version Smarty-3.1.1, created on 2014-12-03 08:44:10
         compiled from "modules\GestionProgramme\tpl\supprimer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15451547ebf4af3a562-85225546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8cffd2f0f2ca15f6fc6b7cfdf397a7a078fdc37' => 
    array (
      0 => 'modules\\GestionProgramme\\tpl\\supprimer.tpl',
      1 => 1413158696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15451547ebf4af3a562-85225546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_547ebf4b153c4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ebf4b153c4')) {function content_547ebf4b153c4($_smarty_tpl) {?>
<div class="alert alert-warning"><h2>Suppression de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Suppression à exécuter dans le module...</p>
	<p>Normalement on n'atterrit pas sur cette page, une redirection doit être faite</p>
	<p>Sauf si on désire proposer une confirmation à cet endroit (en plus ou en remplacement de la boite de dialogue)</p>
	
	<p class='text-right'>
		<a href="#" class='btn btn-danger'>Supprimer</a>
		<a href="#" class='btn btn-default'>Annuler</a>
	</p>	
</div><?php }} ?>