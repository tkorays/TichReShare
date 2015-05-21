<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(PLATFORM=='SAE'){
    include_once APPPATH.'libraries/smarty4sae/Smarty.class.php';
}else{
    include_once APPPATH.'libraries/smarty/Smarty.class.php';
}


class Site{
    private $ci;
    private $layout = 'main.tpl';
    private $smarty = null;

    public function __construct(){
        $this->ci = &get_instance();
        $this->ci->config->load('site');

        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(SMARTY_TPL_PATH);
        $this->smarty->setCompileDir(SMARTY_COMPILE_PATH);
        $this->smarty->setCacheDir(SMARTY_CACHE_PATH);
        $this->smarty->debugging = SMARTY_DEBUG;
    }

    /**
     * 获取配置信息
     * @param null $item 获取的信息，为空表示所有
     * @return null 所需信息,出错返回null
     */
    public function info($item=null){
        $all = $this->ci->config->item('site');
        if(!$item){
            return $all;
        }else{
            if(isset($all[$item])){
                return $all[$item];
            }else{
                return null;
            }
        }
    }

    /**
     * 设置页面模板布局
     * @param $layout 页面模板
     */
    public function set_layout($layout){
        $this->layout = $layout;
    }

    /**
     * 页面跳转
     * @param $absolute_url 绝对地址
     */
    public function go($absolute_url){
        header('location: '.URL_BASE.$absolute_url);
    }

    /**
     * 任意跳转
     * @param $url　任意url
     */
    public function free_go($url){
        header('location: '.$url);
    }

    /**
     * 简单展示
     * @param $tpl 模板
     * @param null $data　数据
     */
    public function display_simple($tpl,$data=null){
        $this->smarty->assign('data',$data);
        $this->smarty->display($tpl);
    }

    public function display($content_tpl,$page_title,$data=null,$layout=null){
        $this->smarty->assign('data',$data);
        $this->smarty->assign('title',$page_title);
        $this->smarty->assign('content_tpl',$content_tpl);
        if($layout){
            $this->smarty->display($layout);
        }else{
            $this->smarty->display($this->layout);
        }

    }

}