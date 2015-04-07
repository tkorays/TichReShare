<?php if(!defined('INVOKER')) exit('No direct access allowed!');

class File{
    private $data;
    public function __construct($data){
        $this->data = $data;
    }
    /* 如何下载你决定 */
    public function download(){
        $f = fopen('','r');
        Header("Content-type: application/octet-stream");
        Header("Accept-Ranges: bytes");
        Header("Accept-Length: ".filesize('????'));
        Header("Content-Disposition: attachment; filename=" . '?????');
        echo fread($f,filesize('????'));
        fclose($f);
    }


}