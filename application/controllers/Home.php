<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->library('site');
    }
    public function index()
    {
        $this->site->display_simple('test.tpl');
    }
    public function download(){
        $this->load->library('storage/storage');
        $this->storage->SetDir(UPLOAD_FILE_PATH);
        $this->storage->Save('hah.txt','i am content');
        //$this->storage->Download('spritesheet.png','ss');
    }
}