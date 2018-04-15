<?php 
 $dsn    = 'mysql:host=localhost;dbname=conn';  //data source name 
 $user   = 'root';
 $pass   = '';
 $option = array(
 	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' //to write in arabic 
 	);
 try{
 $connect = new PDO($dsn,$user,$pass);
 $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 echo "connect is true";
    }
    catch(PDOException $e){
echo "error".$e->getMessage();
    }

 ?>