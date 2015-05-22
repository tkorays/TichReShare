{include file="parts/header.tpl"}

<div class="jx-w900 jx-center" style="min-height: 400px;padding: 10px;">
    <h3 class="text-center" style="line-height: 60px;">注册 ( 2/3 )</h3>
    
    <div class="text-center center-block">
        <div style="min-height: 300px;">
            <div class="text-center" style="padding: 20px 0;">
                <p>[DebugInfo] Platform: Local</p>
                <p>您的邮箱会收到链接: <a href="{$url_base}/account/register_activate_do?token={$data['token']}">
                    {$url_base}/account/register_activate_do?token={$data['token']}
                </a></p>
                <p>邮箱激活已关闭！直接点击<a href="{$url_base}/account/register_activate_do?token={$data['token']}">激活</a></p>
            </div>
        </div>
    </div>
</div>

{include file="parts/footer.tpl"}