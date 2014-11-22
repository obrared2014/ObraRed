<?php
function conectarDb($base,$port,$serv,$user,$pass){
        
    
	try{
//		$servidor = "localhost";
//		$puerto = "3306";
////		$basedatos = "db_obrared";
//		$usuario = "root";
//		$contrasena = "root";
	
		$conexion = new PDO("mysql:host=$serv;port=$port;dbname=$base",
							$user,
							$pass,
							array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		
		$conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $conexion;
	}
	catch (PDOException $e){
		die ("No se puede conectar a la base de datos". $e->getMessage());
	}
}

function devuelveUsuarios($basedatos,$puerto,$servidor,$usuario,$contrasena){
	$resultado = false;
	$consulta = "call lista_personas";
	
	
	$conexion = conectarDb($basedatos,$puerto,$servidor,$usuario,$contrasena);
	$sentencia = $conexion->prepare($consulta);
//	$sentencia->bindParam('id_persona',$estado);
	
	try {
		if(!$sentencia->execute()){
			print_r($sentencia->errorInfo());
		}
		$resultado = $sentencia->fetchAll();
		//$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
	}
	catch(PDOException $e){
		echo "Error al ejecutar la sentencia: \n";
			print_r($e->getMessage());
	}
	
	return $resultado;
}
function traeUsuariosMantenedor($idUsuario,$base,$port,$serv,$user,$pass){
    
    	$resultado = false;
	$consulta="call usuarios_mantenedor($idUsuario)";
	
	$conexion = conectarDb($base,$port,$serv,$user,$pass);
	$sentencia = $conexion->prepare($consulta);
	$sentencia->bindParam('id_persona',$estado);
	
	try {
		if(!$sentencia->execute()){
			print_r($sentencia->errorInfo());
		}
		$resultado = $sentencia->fetchAll();
		//$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
	}
	catch(PDOException $e){
		echo "Error al ejecutar la sentencia: \n";
			print_r($e->getMessage());
	}
	
	return $resultado;
}

?>

