<?php /* Smarty version Smarty-3.1.1, created on 2014-11-22 01:10:30
         compiled from "modules\DownloadFile\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2092546fd476291dc8-38283755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18a553953763594afae11820fbabda9ffec3f3bd' => 
    array (
      0 => 'modules\\DownloadFile\\tpl\\index.tpl',
      1 => 1416614549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2092546fd476291dc8-38283755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_546fd4762f76d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546fd4762f76d')) {function content_546fd4762f76d($_smarty_tpl) {?><p>
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