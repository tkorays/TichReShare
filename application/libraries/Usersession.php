<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 用户会话管理类
 */ 
class Usersession{
    private $uid = '';
    private $name = '';
    private $is_login = 0;

    private $ci;

    public function __construct(){
        $this->ci = & get_instance();

        if($this->ci->session->userdata('is_login')>0){
            $this->uid = $this->ci->session->userdata('uid');
            $this->name = $this->ci->session->userdata('name');
            $this->is_login = $this->ci->session->userdata('is_login');
        }
    }
    public function info(){
        return array(
            'uid'      => $this->uid,
            'name'     => $this->name,
            'is_login' => $this->is_login
        );
    }
    public function get_uid(){
        return $this->uid;
    }
    public function info_json(){
        return json_encode($this->info());
    }
    public function is_login(){
        return $this->is_login;
    }
    
    public function set($uid,$name){
        $this->uid = $uid;
        $this->name = $name;
        $this->is_login = 1;
        $this->ci->session->set_userdata('uid',$this->uid);
        $this->ci->session->set_userdata('name',$this->name);
        $this->ci->session->set_userdata('is_login',$this->is_login);
    }
    public function clear(){
        $this->ci->session->set_userdata('uid','');
        $this->ci->session->set_userdata('name','');
        $this->ci->session->set_userdata('is_login',0);
        $this->uid = '';
        $this->name = '';
        $this->is_login = 0;
    }
}
