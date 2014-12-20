<?php /* Smarty version Smarty-3.1.1, created on 2014-12-20 18:09:52
         compiled from "modules\index\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:934543cf926d351c3-92147569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '170d1c2e2555d27575aa068243c2c37ab99f299b' => 
    array (
      0 => 'modules\\index\\tpl\\index.tpl',
      1 => 1419095389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '934543cf926d351c3-92147569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cf926f2923',
  'variables' => 
  array (
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cf926f2923')) {function content_543cf926f2923($_smarty_tpl) {?><script>
$(function(){
	
$("a[href='?module=Redirect']").click(function(){
$('h2').prepend("<p id='load' style=';height:40pt;border:3px gray solid;border-radius:10px;text-align:center'>Patientez quelques secondes</p>");
	})	
	
})
</script>

<h2>Inscris toi !</h2>
<p class="text-center">
		<a href='?module=Inscription&action=index' 
		data-toggle="modal" 
		data-target="#inclusionModal"
		class='btn btn-success glyphicon glyphicon-plus'> Je m'inscris !</a>
	</p>

<h2>Mon avis sur ...</h2>
<p class="text-center">
<?php echo $_smarty_tpl->tpl_vars['index']->value;?>

</p><?php }} ?>