{include file="parts/header.tpl"}

<div class="jx-w900 jx-center" style="min-height: 400px;padding: 20px;margin-top: 20px;">
    <div class="steps">
        <ul class="list-inline">
            <li class="jx-btn jx-bg-primary" style="padding: 5px 20px;">1. 填写信息</li>
            <li class="jx-btn jx-bg-primary" style="padding: 5px 20px;">2. 邮箱激活</li>
            <li class="jx-btn jx-bg-warning" style="padding: 5px 20px;">3. 完成注册</li>
        </ul>
        <div style="min-height: 300px;padding: 20px;">
            <div class="text-center" style="padding: 50px 0;">
                <p>激活失败!失败原因: {$data['error']}</p>
                {if $data['error'] eq 'token_invalid'}
                <p>无效token，可能你已经激活！<a href="{$url_base}/account/login">登录</a>或重新<a href="{$url_base}/account/register">注册</a>...</p>
                {else}
                <p>token过期,重新<a href="{$url_base}/account/register">注册</a>...</p>
                {/if}
            </div>
        </div>
    </div>
</div>

{include file="parts/footer.tpl"}