
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        echo 'home page';
    }
}