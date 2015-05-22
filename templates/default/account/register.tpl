{include file="parts/header.tpl"}
<div class="jx-w900 jx-center" style="min-height: 400px;padding: 10px;">
    <h3 class="text-center" style="line-height: 60px;">注册 ( 1/3 )</h3>
    
    <div class="text-center center-block" style="width: 300px;">
        <form action="{$url_base}/account/register_do" method="post">
            <div style="padding: 10px 0;">
                <input name="name" class="form-control required" type="text" placeholder="真实姓名" data-rule="姓名:required;">
            </div>
            <div style="padding: 10px 0;">
                <input name="email" class="form-control" type="text" placeholder="邮箱" data-rule="邮箱:required;email;">        
            </div>
            <div style="padding: 10px 0;">
                <input name="password" class="form-control" type="password" placeholder="密码" data-rule="密码:required;password;">        
            </div>
            <div style="padding: 10px 0;">
                <input name="password_confirm" class="form-control" type="password" placeholder="密码" data-rule="确认密码: required;match(password);">        
            </div>
            <div style="padding: 10px 0;">
                <input type="checkbox"> 我已同意<a href="#">《资源共享网站注册协议》</a>
            </div>
            <div style="padding: 10px 0;">
                已有账号？立即<a href="{$url_base}/account/login">登录</a>
            </div>
            <div style="padding: 10px 0;">
                <button  class="btn-submit jx-btn bg-primary" type="submit">立即创建我的账号</button>        
            </div>
        
        </form>
    </div>
</div>

{include file="parts/footer.tpl"}
<script src="{$url_public}/js/lib/validator/jquery.validator.js"></script>
<script src="{$url_public}/js/lib/validator/local/zh_CN.js"></script>