<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('ROOT_PATH',dirname(__FILE__));
define('PRIVATE_PATH','/home/tkorays/web/gshare_files');

define('UPLOAD_PATH',PRIVATE_PATH.'/uploads');
define('TEMP_PATH',PRIVATE_PATH.'/temp');


define('PLATFORM','LOCAL'); // LOCAL,SAE
define('USE_MEMCACHE',false); // 使用memcached
define('USE_LOGGING',false); // 使用日志


if(PLATFORM=='SAE'){
    define('SMARTY_COMPILE_PATH','saemc://smartytpl/'); // 编译文件临时目录
    define('SMARTY_CACHE_PATH','saemc://smartytpl/'); // 缓存目录
    define('SMARTY_TPL_PATH', ROOT_PATH.'/templates/default');
    define('SMARTY_DEBUG',false);
}else{ // smarty for local
    define('SMARTY_COMPILE_PATH',TEMP_PATH.'/tpl_c');
    define('SMARTY_CACHE_PATH',TEMP_PATH.'/tpl_cache');
    define('SMARTY_TPL_PATH',ROOT_PATH.'/templates/default');
    define('SMARTY_DEBUG',false);
}

// upload
define('UPLOAD_FILE_PATH',UPLOAD_PATH.'/files');
define('UPLOAD_IMAGE_PATH',UPLOAD_PATH.'/images');

define('URL_BASE','http://gshare.tkorays.com/index.php');
define('URL_PUBLIC','http://gshare.tkorays.com/public');

ini_set('date.timezone','Asia/Shanghai');

