<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model{
    
    private $table = 'users';
    public function __construct(){
        parent::__construct();
        $this->load->library('medoo',null,'mdb');    
        
    }
    public function Auth($name,$pwd){
        $ret = $this->mdb->get($this->table,array('uid','status'),array(
            'AND'=>array('email'=>$name,'password'=>md5($pwd))
            ));
            
        if($ret['uid'] && $ret['status']){
            return ret(1,'ok',array());
        }elseif(!$ret['uid']){
            return ret(0,'用户名或密码错误!');
        }else{
            return ret(0,'用户尚未激活，请激活后登录!');
        }
    }
}