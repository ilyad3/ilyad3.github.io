<?php /* Smarty version 3.1.28-dev/18, created on 2015-10-25 11:49:10
         compiled from "/var/www/templates/feed.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:467443910562cf9f64e7519_06890248%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aa92c085c0b57ecbe697854b157a91df90d0119' => 
    array (
      0 => '/var/www/templates/feed.tpl',
      1 => 1439896516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '467443910562cf9f64e7519_06890248',
  'variables' => 
  array (
    'title' => 0,
    'menu' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/18',
  'unifunc' => 'content_562cf9f660bf16_44124207',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562cf9f660bf16_44124207')) {
function content_562cf9f660bf16_44124207 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '467443910562cf9f64e7519_06890248';
?>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="css/page.css">
	<link rel="stylesheet" type="text/css" href="css/vk.css">
	<link rel="stylesheet" type="text/css" href="css/emoji.css">
	<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src='js/script.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src='js/ajax.js'><?php echo '</script'; ?>
>
	<meta charset='utf-8'>
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body scroll="no">
	<div id='main_bg' class='main_bg'>
	</div>
	<div id='menu'>
		<img src='img/menu_logo.png' id='user_avatar'>
		<ul>
			<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

			<li id='out_li'><a href='/exit'><img src='img/menu_ico/out_ico.png'></a></li>
		</ul>
	</div>
		<?php echo $_smarty_tpl->tpl_vars['body']->value;?>

	<?php echo '<script'; ?>
 type="text/javascript" src='js/feed_after.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src='js/after_script.js'><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>