<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('PLATFORM','C9'); // LOCAL,SAE,C9

// ------------------------两个根目录需要修改---------------------------------
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

// --------------------------模板目录需要修改----------------------------------
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


// -----------------------------URL需要修改-----------------------------------
if(PLATFORM=='SAE'){
    define('URL_BASE','http://gshare.tkorays.com/index.php');
    define('URL_PUBLIC','http://gshare.tkorays.com/public');
}elseif(PLATFORM=='C9'){
    define('URL_BASE','https://tichreshare-tkorays.c9.io');
    define('URL_PUBLIC','https://tichreshare-tkorays.c9.io/public');
}else{
    define('URL_BASE','http://gshare.tkorays.com/index.php');
    define('URL_PUBLIC','http://gshare.tkorays.com/public');
}

// ----------------------------数据库配置需要修改-----------------------------
if(PLATFORM=='SAE'){
    $hostname = 'localhost';
    $database = 'gshare';
    $username = 'root';
    $password = 'mysql123';
    $port     = 3306;
}elseif(PLATFORM=='C9'){
    $hostname = getenv('IP');
    $database = 'c9';
    $username = getenv('C9_USER');
    $password = '';
    $port     = 3306;
}else{
    $hostname = 'localhost';
    $database = 'gshare';
    $username = 'root';
    $password = 'mysql123';
    $port     = 3306;
}
define('DB_HOSTNAME',$hostname);
define('DB_DATABASE',$database);
define('DB_USERNAME',$username);
define('DB_PASSWORD',$password);
define('DB_PORT',$port);


// 邮箱设置
define('SMTP_HOST','smtp.163.com');
define('SMTP_USER','whugshare@163.com');
define('SMTP_PASS','hdhbscfdjicafnea');
define('SMTP_PORT',25);

ini_set('date.timezone','Asia/Shanghai');

