<?php 
try {
     $connect = new PDO('mysql:host=localhost;dbname=condidature;charset=utf8', 'root', '',
     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
      die('Error connecting to database');
}

     class connectionBD{
          private $host;
          private $login;
          private $password;
          private $bd;
          private static $UniqueInstance = null;

          private function __construct($host,$root,$pass,$db){
               $this->host = $host;
               $this->login = $root;
               $this->password = $pass;
               $this->bd = $db;
          try{
               $connect = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8_general_ci,'.$root.','.$pass);
               $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }catch(PDOException $e){
                    die('Error connecting to database '.$e->getMessage());
          }
          }

          public static function  getUniqueInstance(){
               if(self::$UniqueInstance == null){
                    return new connectionBD("localhost","root","","condidature");
               }else{
                    return self::$UniqueInstance;
               }
          }
          

          public function insert($id,$nom,$email,$pass,$tablename){
               $requet = "INSERT INTO ".$tablename." VALUES (".$id.",".$nom.",".$email.",".$pass.")";
               'mysql_query('.$requet.') or die(mysql_error())';

          }

          public function select($nom,$pass){
               $requet = "SELECT * FROM users WHERE username='".$nom."' AND password ='".$pass."' ";
               $res = 'mysql_query('.$requet.')';
               return 'mysql_num_rows('.$res.')';
          }
     }

     ?>