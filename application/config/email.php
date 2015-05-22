<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
            'protocol'=>'smtp',
            'smtp_host'=>SMTP_HOST,
            'smtp_user'=>SMTP_USER,
            'smtp_pass'=>SMTP_PASS,
            'smtp_port'=>SMTP_PORT,
            'wordwrap'=>true,
            'smtp_timeout'=>10,
            'charset'=>'utf8'
            );