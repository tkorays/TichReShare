<?php
define('INVOKER',"1.0");
/*
 *
 */
class Gum{
    private $db_info;
    public $default_user;
    public static $GRUNT  =  1;
    public static $DENY   =  0;
    public  $db;
    public function __construct($db_hostname,$db_database,$db_username,$db_password){
        $this->db_info = array(
            'hostname'=>$db_hostname,
            'database'=>$db_database,
            'username'=>$db_username,
            'password'=>$db_password
        );
        /* 自动加载模块 */
        spl_autoload_register(function($classname){
            $path = dirname(__FILE__).'/core/'.strtolower($classname).'.php';
            if(file_exists($path)){
                include_once $path;
            }
        });
        /* 初始化数据库操作类 */
        $this->db = new medoo(array(
            'database_type' => 'mysql',
            'database_name' => $this->db_info['database'],
            'server' => $this->db_info['hostname'],
            'username' => $this->db_info['username'],
            'password' => $this->db_info['password'],
            'port' => 3306,
            'charset' => 'utf8',
            'option' => array(
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            )
        ));
    }
    public function CreateManager(){
        return new GumManager($this->db);
    }
    /* 验证，传入自己定义的对象和函数以及数据，进行验证，得到一个GumUser类 */
    public function Auth($object,$func,$data){
        $id = call_user_func(array($object,$func),$data); // 返回一个GumUser对象
        $this->default_user = new GumUser($id);
    }
    /*　检查是否有权限 */
    public function CheckPermission($uid,$type,$name){
        $rid = $this->db->get('gum_user_role','rid',array('uid'=>$uid));

        if(!$rid){
            return 0;
        }
        $pid = $this->db->get('gum_permission','id',array(
            'AND'=>array(
                'type'=>$type,
                'name'=>$name
            )
        ));
        if(!$pid){
            return 0;
        }
        return $this->db->get('gum_role_permission','id',array(
            'rid'=>$rid,
            'pid'=>$pid
        ));

    }

    public function Setup(){
        $prefix='gum_';
        $setup = new Setup($this->db_info);
        $setup->Work($prefix);
    }
}