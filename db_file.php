<?php 

     class connectionBD{
          private $host;
          private $login;
          private $password;
          private $bd;
          private static $UniqueInstance = null;
          /**
           * 
           */

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
          /**
           * cette methode nous retourne l'unique insctance de notre classe connectionBD, histoire d'appliquer le pattenn singleton
           * @return connectionBD objet de la classe connectionBD
           */
          public static function  getUniqueInstance(){
               if(self::$UniqueInstance == null){
                    return new connectionBD("localhost","root","","condidature");
               }else{
                    return self::$UniqueInstance;
               }
          }
          
          /**
           * [insert description]
           * @param  String $id        id de la table users
           * @param  String $nom       username de la table users
           * @param  String $email     email de la personne
           * @param  String $pass      mot de passe
           * @param  String $tablename nom de la table
           */
          public function insert($id,$nom,$email,$pass,$tablename){
               $requet = "INSERT INTO ".$tablename." VALUES (".$id.",".$nom.",".$email.",".$pass.")";
               'mysql_query('.$requet.') or die(mysql_error())';

          }
          /**
           * [select description]
           * @param  String $nom  username
           * @param  String  $pass password
           * @return int       nombre de ligne trouvées par la requet select
           */
          public function select($nom,$pass){
               $requet = "SELECT * FROM users WHERE username='".$nom."' AND password ='".$pass."' ";
               $res = 'mysql_query('.$requet.')';
               return 'mysql_num_rows('.$res.')';
          }
     }
     ?>
