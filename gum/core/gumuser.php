<?php  if(!defined('INVOKER')) exit('No direct access allowed!');

/*
 * Gem Auth获得这个对象
 */
class GumUser{
    private $uid;
    private $role_id;
    private $permission_list = array();
    private $operation_list = array();
    private $resource_list = array();

    public function __construct($uid){
        // 先读取用户各类权限信息，如果错误则uid置o
        $this->uid = $uid;
    }
    public function GetUid(){
        return $this->uid;
    }
    public function GetRoleId(){
        return $this->role_id;
    }
    public function GetPermissions(){
        return $this->permission_list;
    }
    public function CheckOperation($operation_name){
        return true;
    }
    public function CheckResource($resource_name){
        return false;
    }

}
