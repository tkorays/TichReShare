<?php if(!defined('INVOKER')) exit('No direct access allowed!');

class Setup{
    private $db;
    public function __construct($db){
        $this->db = $db;
        try{
            $this->pdo = new PDO('mysql:host'.$db['hostname'].';dbnmae='.$db['database'],$db['username'],$db['password'], array(
                PDO::ATTR_PERSISTENT=>true
            ));
        }catch(PDOException $e){
            echo 'Error! '.$e->getMessage().'<br>';
            die();
        }
    }
    public function Work($prefix){
        $sql = $this->gen_create_table_sql($prefix,'user',
            "`id` int not null auto_increment,`uid` int not null,primary key(`id`)");
        $this->pdo->exec($sql);
        $sql = $this->gen_create_table_sql($prefix,'role',
            "`id` int not null auto_increment,`name` varchar(32) not null,`description` varchar(128) not null,primary key(`id`)");
        $this->pdo->exec($sql);
        $sql = $this->gen_create_table_sql($prefix,'user_role',
            "`id` int not null auto_increment,`uid` int not null,`rid` int not null,primary key(`id`)");
        $this->pdo->exec($sql);
        $sql = $this->gen_create_table_sql($prefix,'permission',
            "`id` int not null auto_increment,
             `type` int not null,
            `name` varchar(128) not null,`description` varchar(128) not null,primary key(`id`)");
        $this->pdo->exec($sql);
        $sql = $this->gen_create_table_sql($prefix,'role_permission',
            "`id` int not null auto_increment,`rid` int not null,`pid` int not null,primary key(`id`)");
        $this->pdo->exec($sql);
        echo 'create tables ok';
    }
    private function gen_create_table_sql($prefix,$table,$field_str){
        return "CREATE TABLE IF NOT EXISTS `".$this->db['database']."`.`".$prefix.$table."`(".$field_str.") ENGINE = InnoDB";
    }
}
