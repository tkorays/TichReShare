<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once "IStorage.php";

class Storage implements IStorage{
    private $dir = "";
    public function __construct($dirname=""){
        if(is_dir($dirname)){
            $this->dir = $dirname;    
        }
    }
    public function SetDir($dirname){
        if(is_dir($dirname)){
            $this->dir = $dirname;    
            return true;
        }
        return false;
    }
    public function Save($name,$content){
        if($this->dir == ""){
            return false;
        }
        $f = fopen($this->dir.'/'.$name,'w');
        if(!$f){
            return false;
        }
        fwrite($f,$content);
        fclose($f);
        return true;
    }
    public function Fetch($name){
        if(!file_exists($this->dir.'/'.$name)){
            return false;
        }
        $f = fopen($this->dir.'/'.$name,'r');
        $content = fread($f,filesize($this->dir.'/'.$name));
        fclose($f);
        return $content;
        
    }
    public function Download($name,$as=''){
        if(!file_exists($this->dir.'/'.$name)){
            return false;
        }
        $ext = strtolower(trim(substr(strrchr($name, '.'), 1)));
        $f = fopen($this->dir.'/'.$name,'r');
        header("Content-type: application/octet-stream");
        header("Accept-Ranges: bytes");
        header("Accept-Length: ".filesize($this->dir.'/'.$name));
        header("Content-Disposition: attachment; filename=" . ($as?($as.'.'.$ext):$name));
        echo fread($f,filesize($this->dir.'/'.$name));
        fclose($f);
        exit;
    }
}