<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface IStorage{
    public function SetDir($dirname);
    public function Save($name,$content); // 将数据保存到指定位置
    public function Fetch($name); // 获取相应文件
    public function Download($name,$as);
}