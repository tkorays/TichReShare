{include file="parts/header.tpl"}
<div class="jx-w900 jx-center" style="min-height: 400px;padding: 20px;margin-top: 20px;">
    <div class="steps">
        <ul class="list-inline">
            <li class="jx-btn jx-bg-warning" style="padding: 5px 20px;">1. 填写信息</li>
            <li class="jx-btn jx-bg-primary" style="padding: 5px 20px;">2. 邮箱激活</li>
            <li class="jx-btn jx-bg-primary" style="padding: 5px 20px;">3. 完成注册</li>
        </ul>
        <form class="form-horizontal register-form" action="{$url_base}/account/register_do" method="post" style="width: 400px;margin: 40px auto;">
            {if $data['error'] eq 1}
            <div class="form-group">
                <p style="color: #f2777a;">{$data['error_msg']}</p>
            </div>
            {/if}
            <div class="form-group">
                <label  class="col-sm-2 control-label">姓名</label>
                <div class="col-sm-10">
                    <input name="name" class="form-control required" type="text" placeholder="真实姓名" data-rule="姓名:required;">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">邮箱</label>
                <div class="col-sm-10">
                    <input name="email" class="form-control" type="text" placeholder="邮箱" data-rule="邮箱:required;email;">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input name="password" class="form-control" type="password" placeholder="密码" data-rule="密码:required;password;">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input name="password_confirm" class="form-control" type="password" placeholder="密码" data-rule="确认密码: required;match(password);">
                </div>
            </div>
            <div class="jx-form-group  jx-txt-center">
                <button  class="btn-submit jx-btn bg-primary" type="submit">创建我的账号</button>
            </div>
        </form>
    </div>
</div>

{include file="parts/footer.tpl"}
<script src="{$url_public}/js/lib/validator/jquery.validator.js"></script>
<script src="{$url_public}/js/lib/validator/local/zh_CN.js"></script>