<?php
class GumManager{
    private $db;
    public function __construct($medoo){
        $this->db = $medoo;
    }
    public function CreateRole($name,$description){
        return $this->db->insert('gum_role',array('name'=>$name,'description'=>$description));
    }
    public function CreatePermission($type,$name,$description){
        return $this->db->insert('gum_permission',array('type'=>$type,'name'=>$name,'description'=>$description));
    }
    public function AssignUserRole($uid,$rid){
        if($this->db->get('gum_user','id',array('id'=>$uid))){
            return 0;
        }
        if($this->db->get('gum_role','id',array('id'=>$rid))){
            return 0;
        }
        if($this->db->get('gum_user_role','id',array('uid'=>$uid))){
            return $this->db->upadte('gum_user_role',array('uid'=>$uid,'rid'=>$rid));
        }else{
            return $this->db->insert('gum_user_role',array('uid'=>$uid,'rid'=>$rid));
        }
    }
}