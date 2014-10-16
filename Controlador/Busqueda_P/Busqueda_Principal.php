<?php


function conexion(){
 $con = mysql_connect("localhost","root","root");
 if (!$con){
  die('Could not connect: ' . mysql_error());
 }
 mysql_select_db("db_obrared", $con);
 return($con);
}


function Traer_Tipo_Busqueda()
{

    $con = conexion();
    $res2 = mysql_query("select * from tipo_busqueda", $con);
    Return $res2;
}


function Traer_Regiones()
{
    $con = conexion();
    $res = mysql_query("select * from regionm", $con);
    return $res;
}

function Traer_Locales($r)
{
    $con=conexion();
    $res=mysql_query("select * from local where id_comuna_local=".$r."",$con);
    return $res;
}

function Traer_Comunas($q)
{
    $con=conexion();
    $res=mysql_query("select * from comuna where id_region_comuna=".$q."",$con);
    return $res;
}

function Devuelve_Eleccion_Busqueda($k)
{
    $con = conexion();
    if ($k ==='1'){
        $res = mysql_query("select * from tbl_materiales_tipo ",$con);
        $id='id_tipo_materiales';
        $nombre='nombre_tipo_materiales';       
    }
if ($k === '2'){//rubro
        $res = mysql_query("select * from tipo_local ",$con);
        $id='id_tipo_local';
        $nombre='nombre_tipo_local';
    }
if($k ==='3'){ //nombre materiales
        $res = mysql_query("select * from tbl_materiales ",$con); 
        $id='id_materiales_tipo';
        $nombre='nombre_materiales';
    }
    $respuesta=array($res,$id,$nombre);
    Return $respuesta ;
}

