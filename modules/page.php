<?php if(!defined('INVOKER')) exit('No direct access allowed!');

class Page{
    private $data;
    public function __construct($data){
        $this->data = $data;
    }

    public function view(){
        $url = $this->data['calldata']['url'];
        return true;
    }
}