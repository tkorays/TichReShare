<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('site');


    }
    public function login(){
        $this->site->display('account/login.tpl','login',null);
    }
    public function register(){

    }
}