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
//$manager->CreatePermission(1,'add_file','添加文件');
//echo $manager->AssignUserRole(1,7);
//echo $manager->AssignRolePermission(7,2);
//echo $manager->RemoveRolePermission(7,1);
echo $gum->CheckPermission(1,1,'add_file');