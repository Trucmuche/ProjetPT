<?php /* Smarty version Smarty-3.1.1, created on 2014-12-10 17:05:55
         compiled from "modules\DownloadFile\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5555547f18b0648955-23493513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18a553953763594afae11820fbabda9ffec3f3bd' => 
    array (
      0 => 'modules\\DownloadFile\\tpl\\index.tpl',
      1 => 1418227032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5555547f18b0648955-23493513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_547f18b07fa34',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f18b07fa34')) {function content_547f18b07fa34($_smarty_tpl) {?><p>
Utilisation des headers php pour générer du contenu autre que HTML vers le navigateur
</p>
<code>
<pre>
		header("Content-type: text/plain; charset=utf8");
		header('Content-Disposition: attachment; filename="exemple.txt"');
		echo "du texte";
		exit;

</pre>
</code>


<ul>
	<li><a href="?module=DownloadFile&action=textbrut">Text Brut</a></li>
	<li><a href="?module=DownloadFile&action=csv">CSV</a></li>
	<li><a href="?module=DownloadFile&action=imagegd">Image générée</a></li>
	<li><a href="?module=DownloadFile&action=imagechargee">Image chargée du disque</a></li>	
</ul><?php }} ?>