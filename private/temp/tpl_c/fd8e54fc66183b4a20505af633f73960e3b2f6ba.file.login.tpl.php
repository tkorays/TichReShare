<?php /* Smarty version Smarty-3.1.20, created on 2015-05-22 00:27:26
         compiled from "/home/ubuntu/workspace/templates/default/account/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218576578555e076e0c03f3-36927383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd8e54fc66183b4a20505af633f73960e3b2f6ba' => 
    array (
      0 => '/home/ubuntu/workspace/templates/default/account/login.tpl',
      1 => 1432225044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218576578555e076e0c03f3-36927383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_555e076e0e3d62_48661351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555e076e0e3d62_48661351')) {function content_555e076e0e3d62_48661351($_smarty_tpl) {?><div style="height: 400px;background-color: #002D57;">
    <div style="width: 900px;margin: 0 auto;">
        <div style="width: 400px;height: 400px;padding: 40px;background-color: #fff;float: right;">
            <h4>登录</h4>
            <hr>
            <form class="form-horizontal register-form" action="/account/login?action=do&from=<?php echo $_smarty_tpl->tpl_vars['data']->value['from_url'];?>
" method="post" style="width: 160px;margin-left: auto;margin-right:auto;">
                <?php if ($_smarty_tpl->tpl_vars['data']->value['error']==1) {?>
                    <div class="form-group">
                        <p style="color: #f2777a;"><?php echo $_smarty_tpl->tpl_vars['data']->value['error_msg'];?>
</p>
                    </div>
                <?php }?>
                <div class="form-group">
                    <input name="email" class="form-control" type="text" placeholder="邮箱" data-rule="邮箱:required;email;">
                </div>
                <div class="form-group">
                    <input name="password" class="form-control" type="password" placeholder="密码" data-rule="密码:required;password;">
                </div>
                <div class="jx-form-group  jx-txt-center">
                    <button  class="btn-submit jx-btn bg-primary" type="submit">登录</button>
                </div>
            </form>
            <div>
                <p></p>
                <hr>
                还没有账号？赶紧<a href="/account/register">注册</a>
            </div>
        </div>
    </div>
</div><?php }} ?>
