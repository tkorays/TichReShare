<?php if(!defined('INVOKER')) exit('No direct access allowed!');

class Permission{
    /*
     * $type和$name都是字符串形式，
     */
    private $pdo;
    public function __construct($db){
        try{
            $this->pdo = new PDO('mysql:host'.$db['hostname'].';dbnmae='.$db['database'],$db['username'],$db['password'], array(
                    PDO::ATTR_PERSISTENT=>true
                ));
        }catch(PDOException $e){
            echo 'Error! '.$e->getMessage().'<br>';
            die();
        }
    }
    public function Check($type,$name){
        echo true;
    }

    public function Clear(){
        $this->pdo = null;
    }

}