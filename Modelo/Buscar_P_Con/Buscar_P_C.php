<?php

function conexion() {
    $con = mysql_connect("localhost", "root", "root");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("db_obrared", $con);
    return($con);
}
//function conexion_2(){
//    $con_2=new mysqli("localhost","root", "root");
////    if (mysqli_connect_errno()) {
////    printf("Conexión fallida: %s\n", mysqli_connect_error());
////    exit();
////}
//}
//============================================================================
function Traer_Tipo_Busqueda_C() {
    $con = conexion();
    $res2 = mysql_query("select * from tipo_busqueda", $con);
    Return $res2;
}
function Mostrar_Tipo_Busqueda_C($var) {
    $con = conexion();
    $res2 = mysql_query("select * from tipo_busqueda where id_tipo_b=".$var."", $con);
    Return $res2;
}
//============================================================================
function Traer_Regiones_C() {
    $con = conexion();
    $res = mysql_query("select * from tbl_region order by region_nombre", $con);
    return $res;
}
function Mostrar_Region_C($var) {
    $con = conexion();
    $res2 = mysql_query("select * from tbl_region where region_id=".$var."", $con);
    Return $res2;
}
//============================================================================
function Traer_Comunas_C($q) {
    $con = conexion();
    $res = mysql_query("select * from tbl_comuna where comuna_provincia_id=" . $q . " order by comuna_nombre", $con);
//    $res = mysql_query("select * from comuna where id_region_comuna=" . $q . "", $con);
    
    return $res;
}
function Mostrar_Comuna_C($var) {
    $con = conexion();
    $res2 = mysql_query("select * from tbl_comuna where comuna_id=".$var."", $con);
//        $res2 = mysql_query("select * from comuna where id_comuna=".$var."", $con);
//
    Return $res2;
}
//=========================================================================
function Traer_Provincia_C($q) {
    $con = conexion();
    $res = mysql_query("select * from tbl_provincia where provincia_region_id=" . $q . " order by provincia_nombre", $con);

    
    return $res;
}
function Mostrar_Provincia_C($var) {
    $con = conexion();
    $res2 = mysql_query("select * from tbl_provincia where provincia_id=".$var."", $con);
    Return $res2;
}
//============================================================================
function Traer_Locales_C($r)
{
    $con=  conexion();
    $res=mysql_query("select * from local where id_comuna_local=".$r."",$con);
    return $res;
}
//============================================================================
function Traer_Mat_por_Tipo_Contruccion_C($r)
{
    $con=  conexion();
    $res=mysql_query("select * from tbl_materiales where id_tipo_materiales=".$r."",$con);
    return $res;
}
//============================================================================

function Devuelve_Eleccion_Busqueda_C($k)
{
    $res=null;
    $id=null;
    $nombre=null;
    $nombre_buscar=null;
    $con = conexion();    
    if ($k ==='1'){
          $res = mysql_query("select * from tbl_materiales_tipo ",$con);
          $id='id_tipo_materiales';
          $nombre='nombre_tipo_materiales';
          $nombre_buscar='Seleccione Tipo de Construccion';
    }
if ($k === '2'){
        $res = mysql_query("select * from tipo_local ",$con);
        $id='id_tipo_local';
        $nombre='nombre_tipo_local';
        $nombre_buscar='Seleccione Local';
    }
    $respuesta=array($res,$id,$nombre,$nombre_buscar);
    Return $respuesta ;
}
function Mostrar_Materiales_Tipo_C($k)
{
        $con = conexion();    
        $res = mysql_query("select * from tbl_materiales_tipo where id_tipo_materiales=".$k."",$con);
        Return $res;         
}
function Mostrar_Local_Tipo_C($k)
{
        $con = conexion();    
        $res = mysql_query("select * from local where id_tipo_local_l=".$k."",$con);
        Return $res;         
}
//============================================================================
function Trae_Local_x_Tipo_Material_C($region,$comuna,$tipo_material)
{
   $con = conexion();    
   $res = mysql_query("select * from tbl_local where id_region_local=".$region." and id_comuna_local = ".$comuna." and id_tipo_material_local = ".$tipo_material."",$con);
    return $res;
}
function Trae_Local_x_Tipo_Local_C($region,$comuna,$tipo_local)
{
   $con = conexion();    
   $res = mysql_query("select * from tbl_local where id_region_local=".$region." and id_comuna_local = ".$comuna." and id_tipo_local_l = ".$tipo_local."",$con);
    return $res;
}
function Trae_Nombre_Tipo_Local_C($k) {
    $con = conexion();
    $nombre='';
    $res = mysql_query("select * from tipo_local where id_tipo_local=" . $k . "", $con);
    while ($fila = mysql_fetch_array($res)) {
        $nombre = $fila['nombre_tipo_local'];
    }
    Return $nombre;
}
function Comprobar_Datos_en_Tabla_C($id_comuna){
    $respuesta=true;
    $con = conexion();
    $res = mysql_query("select * from tbl_local where id_comuna_local=".$id_comuna."", $con);
    $numero=  mysql_num_rows($res);
    if($numero>0){
        $respuesta=TRUE;
    }else{
        $respuesta=FALSE;
    }
    Return $respuesta;
}
