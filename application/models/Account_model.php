<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model{
    
    private $table = 'users';
    private $table_token = 'user_token';
    public function __construct(){
        parent::__construct();
        $this->load->library('medoo',null,'mdb');    
        
    }
    public function Auth($post){
        $name = $post['email'];
        $pwd = $post['password'];
        $ret = $this->mdb->get($this->table,array('uid','status'),array(
            'AND'=>array('email'=>$name,'password'=>md5($pwd))
        ));
            
        if($ret['uid'] && $ret['status']){
            return ret(1,'ok',array(
                'uid'=>$ret['uid'],
                'username'=>$ret['username']
                ));
        }elseif(!$ret['uid']){
            return ret(0,'用户名或密码错误!');
        }else{
            return ret(0,'用户尚未激活，请激活后登录!');
        }
    }
    
    public function CreateUser($post){
        $name = $post['name'];
        $email = $post['email'];
        $password = $post['password'];
        // 用户名不能为空
        if(trim($name) == ''){
            return ret(0,'用户名不能为空');
        }
        // 邮箱格式是否正确
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return ret(0,'邮箱格式不正确');
        }
        // 邮箱是否可以注册
        if($this->mdb->get('users','uid',array('email'=>$email))){
            return ret(0,'该邮箱已注册',$email);
        }
        $uid = $uid = $this->mdb->insert('users',array(
            'email'=>$email,
            'true_name'=>$name,
            'password'=>md5($password),
            'status'=>0, // 不可用
            'school_id'=>0,
            'image'=>'',
            'last_login_ip'=>'',
            'reg_time'=>date('Y-m-d h:i:s'),
            'last_login_time'=>date('Y-m-d h:i:s')
        ));
        if($uid){
            $token = $this->CreateToken($uid,'user_activate',time()+600); 
            return ret(1,'成功!',array('uid'=>$uid,'token'=>$token['token']));
        }else{
            return ret(0,'失败!');
        }
    }
    
    private function CreateToken($uid,$usage,$expire){
        $id = $this->mdb->insert($this->table_token,array(
           'token'=>md5(time().','.$uid.','.$usage.','.$expire),
           'uid'=>$uid,
           'usage'=>$usage,
           'expire'=>$expire
        ));
        return $this->mdb->get($this->table_token,'*',array('id'=>$id));
    }
    public function Activate($token){
        $ret = $this->mdb->get($this->table_token,'*',array('token'=>$token));
        if(!$ret){
            return ret(0,'无效token!请确认用户是否已经激活!',array('error'=>'token_invalid'));
        }else{
            if($ret['expire']<time()){
                $this->mdb->delete($this->table,array('uid'=>$ret['uid']));
                $this->mdb->delete($this->table_token,array('token'=>$token));
                return ret(0,'token过期,请重新注册!',array('error'=>'token_expire'));
            }else{
                $this->mdb->delete($this->table_token,array('token'=>$token));
                $this->mdb->update($this->table,array('status'=>1),array('uid'=>$ret['uid']));
                return ret(1,'ok');
            }
        }
    }
    public function Info($uid){
        return $this->mdb->get($this->table,array('uid','email','true_name','image','school_id','reg_time','last_login_time','last_login_ip'),array('uid'=>$uid));
    }
}