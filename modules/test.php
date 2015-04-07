<?php if(!defined('INVOKER')) exit('No direct access allowed!');
class Test{
    private $data;
    public function __construct($data){
        $this->data = $data;
    }
    public function hello(){
        echo '<pre>';
        print_r($this->data);
        echo '</pre>';
        $user = new GumUser(123);
        var_dump($user->CheckResource('abc'));
    }
}