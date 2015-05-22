<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function ret($code,$msg,$data=null){
    return array(
        'code' => $code,
        'msg'  => $msg,
        'data' => $data
    );
}

function ret_ok($ret){
    return isset($ret['code']) && $ret['code']==1;
}