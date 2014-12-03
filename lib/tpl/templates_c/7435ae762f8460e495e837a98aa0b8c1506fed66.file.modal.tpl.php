<?php /* Smarty version Smarty-3.1.1, created on 2014-12-03 18:44:51
         compiled from "templates\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28773546b12d39cc993-81966470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7435ae762f8460e495e837a98aa0b8c1506fed66' => 
    array (
      0 => 'templates\\modal.tpl',
      1 => 1417628191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28773546b12d39cc993-81966470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_546b12d3a8369',
  'variables' => 
  array (
    'titre' => 0,
    'bloc_contenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b12d3a8369')) {function content_546b12d3a8369($_smarty_tpl) {?><!-- boite de dialogue -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h4>
      </div>
      <div class="modal-body">
        <?php echo $_smarty_tpl->tpl_vars['bloc_contenu']->value;?>

      </div>
<?php }} ?>