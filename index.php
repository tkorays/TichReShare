<?php
include_once "gum/gum.php";


class usertest{
    public function auth($data){
        // auth and get uid
        return 1;
    }
}

$gum = new Gum('localhost','gum','root','mysql123');
//$gum->Auth(new usertest(),'auth',null); // 验证需要其他支持
$manager = $gum->CreateManager();
//$manager->CreateRole('测试','测试人员');
//$manager->CreatePermission(1,'delete_file','删除文件');
echo $manager->AssignUserRole(3,7);
