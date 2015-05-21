<div class="header">
    <div class="jx-w900 jx-center">
        <span class="logo">
            <a href="{$site['page_url']}/home" ><h1>{$site['name']}</h1></a>
        </span>
        <ul class="menu">
            <li><a href="{$site['page_url']}/home">首页</a></li>
            <li><a href="{$site['page_url']}/course">课程</a></li>
            <li><a href="{$site['page_url']}/point">知识点</a></li>
            <li><a href="{$site['page_url']}/home/about">关于</a></li>
        </ul><a href="{$site['page_url']}/home/search">
        <span class="search-btn">
            <i class="icon-search"></i>
        </span>
        </a>
        <span class="user-operation">
            {if $user['is_login']}
                <a href="{$site['page_url']}/my">{$user['name']}</a>
                <a href="{$site['page_url']}/account/logout">退出</a>
            {else}
                <a href="{$site['page_url']}/account/register">注册</a>
                <a href="{$site['page_url']}/account/login">登录</a>
            {/if}
        </span>
    </div>

</div>