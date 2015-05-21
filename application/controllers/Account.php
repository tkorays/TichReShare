<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('site');
        
        $this->load->model('account_model','maccount');

    }
    public function login(){
        var_dump($this->maccount->Auth('tkorays@hotmail.com','123456'));
        //$this->site->display('account/login.tpl','login',null);
    }
    public function register(){

    }
}