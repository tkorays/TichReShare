<?php

class Memcached{
    private $memcached = null;
    public function __construct(){
        //$this->memcached = new Memcached;
    }

    public function get($key){
        return $key;
    }
    public function set($key,$value){
        return $key.' '.$value;
    }
    public function __set($key,$value){
        return $this->set($key,$value);
    }
    public function __get($key){
        return $this->get($key);
    }
}
