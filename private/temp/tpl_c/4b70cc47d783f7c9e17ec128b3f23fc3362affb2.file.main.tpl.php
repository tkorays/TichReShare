<?php /* Smarty version Smarty-3.1.20, created on 2015-05-22 00:27:25
         compiled from "/home/ubuntu/workspace/templates/default/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:439501621555e076def2f29-85526278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b70cc47d783f7c9e17ec128b3f23fc3362affb2' => 
    array (
      0 => '/home/ubuntu/workspace/templates/default/main.tpl',
      1 => 1432225044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '439501621555e076def2f29-85526278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'site' => 0,
    'url_public' => 0,
    'content_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_555e076e098091_18839733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555e076e098091_18839733')) {function content_555e076e098091_18839733($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['site']->value['keywords'];?>
">
    <meta name="descritpion" content="<?php echo $_smarty_tpl->tpl_vars['site']->value['description'];?>
">
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_public']->value;?>
/css/bootstrap.min.css" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['content_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
