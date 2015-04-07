<?php
class GumManager{
    private $db;
    public function __construct($medoo){
        $this->db = $medoo;
    }
    public function CreateRole($name,$description){
        return $this->db->insert('gum_role',array('name'=>$name,'description'=>$description));
    }
}