<?php /* Smarty version Smarty-3.1.1, created on 2014-11-22 01:13:50
         compiled from "modules\CRUD\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13660546b12d3416182-39564114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f043512596bdb0c8761ebf79aa6ead9810cc610' => 
    array (
      0 => 'modules\\CRUD\\tpl\\detail.tpl',
      1 => 1416614549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13660546b12d3416182-39564114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_546b12d372e48',
  'variables' => 
  array (
    'reference' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b12d372e48')) {function content_546b12d372e48($_smarty_tpl) {?>
<div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Afficher les détails de l'enregistrement...</p>
	<a href="#" class='btn btn-danger'>Supprimer</a>
	<a href="#" class='btn btn-default'>Modifier</a>
</div><?php }} ?>