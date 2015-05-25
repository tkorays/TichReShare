{include file="parts/header.tpl"}
{include file="my/nav.tpl"}
<div class="jx-w900 center-block">
    <div class="row">
        <div class="col-md-8">
            <div style="background-color: #fff;padding: 10px;min-height: 300px;">
                <span class="text-success">最新动态</span><hr>
                <div>
                    没有最新动态
                </div>
            </div>
        </div>
        <div class="col-md-4" style="">
            {include file="my/usercard.tpl"}
            <div style="background-color: #fff;padding: 10px;margin-top: 10px;">
                <p><i class="glyphicon glyphicon-edit"></i>&nbsp;<a href="{$url_base}/my/editprofile">修改个人资料</a></p>
                <p><i class="glyphicon glyphicon-plus"></i>&nbsp;<a href="{$url_base}/my/course/add">添加课程</a></p>
            </div>
        </div>
    </div>

</div>
{include file="parts/footer.tpl"}

