<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends  CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function Auth($name,$pwd){
        return $name=="test" && $pwd=="test";
    }

}