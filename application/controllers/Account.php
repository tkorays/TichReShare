<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller{
    public function __construct(){
        parent::__construct();
        
        $this->load->model('account_model','maccount');
    }
    private function need_login(){
        if($this->usersession->is_login()){
            $this->site->go('/my');
        }else{
            $this->site->go('/account/login');
        }
    }
    
    public function index(){
        $this->need_login();
    }
    /**
     * 登录页面 
     */
    public function login(){
        if($this->usersession->is_login()){
            $this->site->go('/my');
            exit;
        }
        $this->site->display('account/login.tpl','登录',null);
    }
    /**
     * 登录处理
     */ 
    public function login_do(){
        $ret = $this->maccount->Auth($this->input->post());
        if(ret_ok($ret)){
            $this->usersession->set($ret['data']['uid'],$ret['data']['username']);
            $this->site->go('/my/');
        }else{
            $this->site->go('/account/login');
        }
    }
    /**
     * 退出登录 
     */
    public function logout(){
        $this->usersession->clear();
        $this->site->go('/account/login');
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