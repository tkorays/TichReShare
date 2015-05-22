{include file="parts/header.tpl"}

<div class="jx-w900 jx-center" style="min-height: 400px;padding: 20px;margin-top: 20px;">
    <div class="steps">
        <ul class="list-inline">
            <li class="jx-btn jx-bg-primary" style="padding: 5px 20px;">1. 填写信息</li>
            <li class="jx-btn jx-bg-warning" style="padding: 5px 20px;">2. 邮箱激活</li>
            <li class="jx-btn jx-bg-primary" style="padding: 5px 20px;">3. 完成注册</li>
        </ul>
        <div style="min-height: 300px;padding: 20px;">
            <div class="text-center" style="padding: 50px 0;">
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