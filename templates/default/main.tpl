<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <title>{$title} - {$site['title']}</title>
    <meta name="keywords" content="{$site['keywords']}">
    <meta name="descritpion" content="{$site['description']}">
    <link type="text/css" rel="stylesheet" href="/static/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/static/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="/static/css/all.min.css" />
    <link type="text/css" rel="stylesheet" href="/static/js/lib/validator/jquery.validator.css" />
    <link type="text/css" rel="stylesheet" href="/static/js/lib/tinyeditor/style.css" />
</head>
<body>

{include file="header.tpl"}
{include file="{$content_tpl}"}
{include file="footer.tpl"}
</body>
</html>