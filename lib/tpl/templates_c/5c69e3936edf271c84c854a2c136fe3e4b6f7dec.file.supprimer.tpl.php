<?php /* Smarty version Smarty-3.1.1, created on 2014-12-03 17:25:27
         compiled from "modules\Programmes\tpl\supprimer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10676547f361922ed50-37087250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c69e3936edf271c84c854a2c136fe3e4b6f7dec' => 
    array (
      0 => 'modules\\Programmes\\tpl\\supprimer.tpl',
      1 => 1417623895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10676547f361922ed50-37087250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_547f36193bd4b',
  'variables' => 
  array (
    'ref' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f36193bd4b')) {function content_547f36193bd4b($_smarty_tpl) {?>
<div class="alert alert-warning"><h2>Suppression de <?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Suppression effectué</p>
	<p>Veuillez attendre la redirection</p>
	<p>Ou alors, cliquez sur le lien ci-dessous</p>
	
	<p class='text-right'>
		<a href="?module=Programmes" class='btn btn-danger'>Supprimer</a>
	</p>	
</div><?php }} ?>