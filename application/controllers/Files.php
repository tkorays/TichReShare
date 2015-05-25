<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('storage/storage');
    }
    public function image(){
        $this->storage->SetDir(UPLOAD_IMAGE_PATH);
        $fn = $this->uri->segment(3);
        if(!$fn){
            exit;
        }
        $this->storage->Download($fn);
    }
    public function test(){
        $this->load->library('uploader');
        $this->uploader->do_upload('userfile',array());
    }
    
    
}