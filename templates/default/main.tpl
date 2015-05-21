<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <title>{$title} - {$site['title']}</title>
    <meta name="keywords" content="{$site['keywords']}">
    <meta name="descritpion" content="{$site['description']}">
    <link type="text/css" rel="stylesheet" href="{$url_public}/css/bootstrap.min.css" />
</head>
<body>
{include file="parts/header.tpl"}
{include file="{$content_tpl}"}
{include file="parts/footer.tpl"}
</body>
</html>