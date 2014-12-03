<?php /* Smarty version Smarty-3.1.1, created on 2014-12-03 13:22:08
         compiled from "modules\GestionProgramme\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32618547ebf3a813d78-73278228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6278e0402ec5ff3b1ab016dee0da9c2e2f292ba8' => 
    array (
      0 => 'modules\\GestionProgramme\\tpl\\detail.tpl',
      1 => 1417609319,
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
    'detail' => 0,
    'genre' => 0,
    'type' => 0,
    'donnees' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ebf3a98177')) {function content_547ebf3a98177($_smarty_tpl) {?>
<div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>
	<?php  $_smarty_tpl->tpl_vars['donnees'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['donnees']->_loop = false;
 $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['donnees']->key => $_smarty_tpl->tpl_vars['donnees']->value){
$_smarty_tpl->tpl_vars['donnees']->_loop = true;
 $_smarty_tpl->tpl_vars['ligne']->value = $_smarty_tpl->tpl_vars['donnees']->key;
?>
	<?php echo $_smarty_tpl->tpl_vars['reference']->value;?>

	<?php } ?>
		bonjour
	</p>
	<!-- <table class='table table-striped'>
		<thead>
			<th>Nom du Programme</th><th>Description</th><th>Pegi</th><th>Inedit</th><th>Saison</th><th>Episode</th><th>Durée</th><th>Moyenne attribué</th><th>Genre</th><th>Type</th>
		</thead>
		<tbody>
			<tr class='table-striped'>
				<td><?php echo $_smarty_tpl->tpl_vars['detail']->value['Nom_Programme'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['detail']->value['Description'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['detail']->value['Pegi'];?>
</td>
				<?php if (($_smarty_tpl->tpl_vars['detail']->value['Inedit']==1)){?>
						<td>Oui</td>
				<?php }else{ ?>
						<td>Non</td>
				<?php }?>
				<td><?php echo $_smarty_tpl->tpl_vars['detail']->value['Saison'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['detail']->value['Episode'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['detail']->value['Duree'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['detail']->value['Moyenne'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['genre']->value['Nom_Genre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['type']->value['Nom_Type'];?>
</td>
			</tr>
		</tbody>
	</table> -->
	
	
	<a href="?module=GestionProgramme&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
" class='btn btn-danger'>Supprimer</a>
	<a href="?module=GestionProgramme&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
" class='btn btn-default'>Modifier</a>
</div><?php }} ?>