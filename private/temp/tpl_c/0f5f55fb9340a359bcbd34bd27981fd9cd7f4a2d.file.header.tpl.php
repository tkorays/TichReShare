<?php /* Smarty version Smarty-3.1.20, created on 2015-05-22 00:27:26
         compiled from "/home/ubuntu/workspace/templates/default/parts/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156530005555e076e09fb08-05806097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f5f55fb9340a359bcbd34bd27981fd9cd7f4a2d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/default/parts/header.tpl',
      1 => 1432225044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156530005555e076e09fb08-05806097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site' => 0,
    'url_base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_555e076e0bb934_81319649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555e076e0bb934_81319649')) {function content_555e076e0bb934_81319649($_smarty_tpl) {?><div class="header">
    <div class="jx-w900 jx-center">
        <span class="logo">
            <a href="/home" ><h1><?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
</h1></a>
        </span>
        <ul class="menu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/home">首页</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/course">课程</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/point">知识点</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/home/about">关于</a></li>
        </ul><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/home/search">
        <span class="search-btn">
            <i class="icon-search"></i>
        </span>
        </a>
        <span class="user-operation">

        </span>
    </div>

</div><?php }} ?>
