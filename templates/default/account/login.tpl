{include file="parts/header.tpl"}

<div style="height: 400px;background-color: #002D57;">
    <div style="width: 900px;margin: 0 auto;">
        <div style="width: 400px;height: 400px;padding: 40px;background-color: #fff;float: right;">
            <h4>登录</h4>
            <hr>
            <form class="form-horizontal register-form" action="/account/login?action=do&from={$data['from_url']}" method="post" style="width: 160px;margin-left: auto;margin-right:auto;">
                {if $data['error'] eq 1}
                    <div class="form-group">
                        <p style="color: #f2777a;">{$data['error_msg']}</p>
                    </div>
                {/if}
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
                还没有账号？赶紧<a href="{$url_base}/account/register">注册</a>
            </div>
        </div>
    </div>
</div>

{include file="parts/footer.tpl"}
<script src="{$url_public}/js/lib/validator/jquery.validator.js"></script>
<script src="{$url_public}/js/lib/validator/local/zh_CN.js"></script>
<script>
    
</script>