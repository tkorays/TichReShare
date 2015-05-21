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
    
    public function CreateUser($name,$email,$password){
        // 用户名不能为空
        if(trim($name) == ''){
            return ret(0,'用户名不能为空');
        }
        // 邮箱格式是否正确
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return ret(0,'邮箱格式不正确');
        }
        // 邮箱是否可以注册
        if($this->medoo->get('users','uid',array('email'=>$email))){
            return ret(0,'该邮箱已注册',$email);
        }
        $uid = $uid = $this->medoo->insert('users',array(
            'email'=>$email,
            'true_name'=>$name,
            'password'=>md5($password),
            'status'=>0, // 不可用
            'school_id'=>0,
            'image'=>'',
            'last_login_ip'=>''
        ));
        if($uid){
            return ret(1,'成功!',array('uid'=>$uid));
        }else{
            return ret(0,'失败!');
        }
    }
}