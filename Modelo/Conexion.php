<?php 
$server='localhost';
$user='root';
$pass='root';

$con=mysql_connect($server,$user,$pass);
if($con){
    $database=mysql_select_db("db_obrared");
    $error=1;//Variable  que permite controlar si está conectado o no el valor 1 indica que está conectado
}else{
    $error=2;//Variable que permite controlar si está conectado o no el valor 2 indica que no se conectó
}

?>  
