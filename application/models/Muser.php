<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->library('medoo',[
            // 必填
            'database_type' => 'mysql',
            'database_name' => 'gshare',
            'server' => 'localhost',
            'username' => 'root',
            'password' => 'mysql123',

            // 可选参数
            'port' => 3306,
            'charset' => 'utf8',
            // 连接参数可参考官方手册： http://www.php.net/manual/en/pdo.setattribute.php
            'option' => [
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ]
        ]);
    }

    public function Auth($name,$pwd){
        $ret = $this->medoo->get('users','uid',array('AND'=>array(
            'email'=>$name,
            'password'=>md5($pwd)
        )));
        if($ret){
            return 'login ok';
        }else{
            return 'f';
        }
    }

}