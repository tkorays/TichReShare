<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Watch_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->library('medoo',null,'mdb');
    }

    public function Watch($watcher_id,$watched_id){
        // 记录不能重复
        if($this->mdeoo->get('user_watch','id',array('AND'=>array(
            'watcher_id'=>$watcher_id,
            'watched_id'=>$watched_id
        )))){
            return array(
                'code'=>0,
                'msg'=>'已经关注过'
            );
        }
        if($this->mdb->insert('user_watch',array('watcher_id'=>$watcher_id, 'watched_id'=>$watched_id))){
            return array(
                'code'=>1,
                'msg'=>'成功'
            );
        }else{
            return array(
                'code'=>0,
                'msg'=>'关注失败'
            );
        }
    }
    public function UnWatch($watcher_id,$watched_id){
        if($this->mdb->delete('user_watch',array('AND'=>array(
            'watcher_id'=>$watcher_id,
            'watched_id'=>$watched_id
        )))){
            return array(
                'code'=>1,
                'msg'=>'ok'
            );
        }else{
            return array(
                'code'=>0,
                'msg'=>'取消关注失败！'
            );
        }
    }
    public function FansCount($uid){
        return $this->mdb->count('user_watch',array('watched_id'=>$uid));
    }
    public function WatchCount($uid){
        return $this->mdb->count('user_watch',array('watcher_id'=>$uid));
    }
    
}