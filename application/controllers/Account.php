<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('site');
        
        $this->load->model('account_model','maccount');

    }
    public function login(){
        //var_dump($this->maccount->Auth('tkorays@hotmail.com','123456'));
        $this->site->display('account/login.tpl','登录',null);
    }
    
    // 注册三步骤
    public function register(){
        $this->site->display('account/register.tpl','注册',null);
    }
    public function register_do(){
        $ret = $this->maccount->CreateUser($this->input->post());
        if(ret_ok($ret)){
            $this->site->go('/account/register_activate?token='.$ret['data']['token']);
        }else{
            $this->site->go('/account/register');
        }
    }
    public function register_activate(){
        $this->site->display('account/register_activate.tpl','激活',array('token'=>$this->input->get('token')));    
    }
    public function register_activate_do(){
        $ret = $this->maccount->Activate($this->input->get());
        if(ret_ok($ret)){
            $this->site->go('/account/register_success');
        }else{
            $this->site->go('/account/register_failed?error='.$ret['data']['error']);
        }
    }
    public function register_success(){
        $this->site->display('account/register_success.tpl','注册成功');
    }
    public function register_failed(){
        $this->site->display('account/register_failed.tpl','激活失败',array('error'=>$this->input->get('error')));
    }
    public function sendemail(){
        $this->load->library('email');
        $this->email->initialize();
        $this->email->from('whugshare@163.com','gshare');
        $this->email->to('tkorays@hotmail.com');
        $this->email->subject('this is a hot');
        $this->email->message('hahaaa');
        $this->email->send();
        echo $this->email->print_debugger();
    }
}