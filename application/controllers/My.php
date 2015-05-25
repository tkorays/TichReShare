
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('account_model','maccount');
        $this->load->model('watch_model','mwatch');
    }
    public function index(){
        $this->site->display('my/index.tpl','个人主页',array(
            'user_info'=>$this->maccount->Info($this->usersession->get_uid()),
            'fans'=>array(
                'watchme'=>$this->mwatch->WatchCount($this->usersession->get_uid()),
                'mywatch'=>$this->mwatch->FansCount($this->usersession->get_uid())
            )
        ));
    }
    
    public function course(){
        
    }
}