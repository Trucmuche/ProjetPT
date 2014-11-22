<?php /* Smarty version Smarty-3.1.1, created on 2014-11-22 01:20:51
         compiled from "modules\GestionProgramme\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26762546fd6e39a87e4-72800943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6278e0402ec5ff3b1ab016dee0da9c2e2f292ba8' => 
    array (
      0 => 'modules\\GestionProgramme\\tpl\\detail.tpl',
      1 => 1416614549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26762546fd6e39a87e4-72800943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_546fd6e3a2d50',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546fd6e3a2d50')) {function content_546fd6e3a2d50($_smarty_tpl) {?>
<div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Afficher les détails de l'enregistrement...</p>
	<a href="#" class='btn btn-danger'>Supprimer</a>
	<a href="#" class='btn btn-default'>Modifier</a>
</div><?php }} ?>