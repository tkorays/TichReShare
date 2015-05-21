<?php /* Smarty version Smarty-3.1.20, created on 2015-05-22 00:45:27
         compiled from "/home/ubuntu/workspace/templates/default/parts/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:685823911555e0ba7cd0248-72971951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '685823911555e0ba7cd0248-72971951',
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
  'unifunc' => 'content_555e0ba7ceee44_28236999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555e0ba7ceee44_28236999')) {function content_555e0ba7ceee44_28236999($_smarty_tpl) {?><div class="header">
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
