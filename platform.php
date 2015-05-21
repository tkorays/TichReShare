<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('PLATFORM','C9'); // LOCAL,SAE,C9


define('ROOT_PATH',dirname(__FILE__));
if(PLATFORM=='SAE' || PLATFORM=='C9'){
    define('PRIVATE_PATH',ROOT_PATH.'/private');
}else{ // 当然本地也可以放在index.php所在目录下，这里为了安全考虑
    define('PRIVATE_PATH','/home/tkorays/web/gshare_files');
}


define('UPLOAD_PATH',PRIVATE_PATH.'/uploads');
define('TEMP_PATH',PRIVATE_PATH.'/temp');



define('USE_MEMCACHE',false); // 使用memcached
define('USE_LOGGING',false); // 使用日志


define('SMARTY_TPL_PATH', ROOT_PATH.'/templates/default'); // 这个目录最好修改下放在外面
    define('SMARTY_DEBUG',false);
if(PLATFORM=='SAE'){
    define('SMARTY_COMPILE_PATH','saemc://smartytpl/'); // 编译文件临时目录
    define('SMARTY_CACHE_PATH','saemc://smartytpl/'); // 缓存目录
}else{ // smarty for local
    define('SMARTY_COMPILE_PATH',TEMP_PATH.'/tpl_c');
    define('SMARTY_CACHE_PATH',TEMP_PATH.'/tpl_cache');
}

// upload
define('UPLOAD_FILE_PATH',UPLOAD_PATH.'/files');
define('UPLOAD_IMAGE_PATH',UPLOAD_PATH.'/images');

if(PLATFORM=='SAE'){
    define('URL_BASE','http://gshare.tkorays.com/index.php');
    define('URL_PUBLIC','http://gshare.tkorays.com/public');
}elseif(PLATFORM=='C9'){
    define('URL_BASE','https://tichreshare-tkorays.c9.io/index.php');
    define('URL_PUBLIC','https://tichreshare-tkorays.c9.io/public');
}else{
    define('URL_BASE','http://gshare.tkorays.com/index.php');
    define('URL_PUBLIC','http://gshare.tkorays.com/public');
}

ini_set('date.timezone','Asia/Shanghai');

