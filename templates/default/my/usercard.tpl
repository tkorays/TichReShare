<div style="background-color: #fff;padding: 10px;">
    <div class="text-center" >
        {if ($data['user_info']['image'] neq '' || $data['user_info']['image'] neq 0) && 0}
            <img
                    src="{$url_public}/uploads/images/{$data['user_info']['image']}"
                    title="用户头像"
                    style="width: 80px;height: 80px;border-radius: 40px;border: 3px solid #c0c0c0;">
        {else}
            <img src="{$url_public}/img/user.png"
                 data-toggle="tooltip" data-placement="top" title="Tooltip on top"
                 style="width: 80px;height: 80px;border-radius: 40px;border: 3px solid #c0c0c0;">
        {/if}
        <div>
            <h3>{$data['user_info']['true_name']}</h3>
        </div>
    </div>
    <ul class="nav nav-pills nav-justified text-center">
        <li><a href="{$url_base}/my/watch">关注 {$data['fans']['mywatch']}</a></li>
        <li><a href="{$url_base}/my/fans">粉丝 {$data['fans']['watchme']}</a></li>
    </ul>
</div>