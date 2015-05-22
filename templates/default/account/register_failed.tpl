{include file="parts/header.tpl"}

<div class="jx-w900 jx-center" style="min-height: 400px;padding: 10px;">
    <h3 class="text-center" style="line-height: 60px;">注册 ( 3/3 )</h3>
        <div style="min-height: 300px;">
            <div class="text-center" style="padding: 20px 0;">
                <p>激活失败!失败原因: {$data['error']}</p>
                {if $data['error'] eq 'token_invalid'}
                <p>无效token，可能你已经激活！<a href="{$url_base}/account/login">登录</a>或重新<a href="{$url_base}/account/register">注册</a>...</p>
                {else}
                <p>token过期,重新<a href="{$url_base}/account/register">注册</a>...</p>
                {/if}
            </div>
        </div>
    
</div>

{include file="parts/footer.tpl"}