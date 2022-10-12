<?php
include "conexion.php";
//$pdo = new Conexion();

if ($_SERVER["REQUEST_METHOD"]=="GET")
{
	if (isset($_GET["ci"]))
	{
		$sql = $db->prepare("select * from persona where ci=:ci");
		$sql->bindValue(':ci',$_GET["ci"]);
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 existen datos");
		echo json_encode($sql->fetchAll());
		exit;
	}
	else
	{
		
		$sql = $db->prepare("select * from persona");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 existen datos");
		echo json_encode($sql->fetchAll());
		exit;
	}
	header("HTTP/1.1 400 Requerimiento inexistente");
}
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$s="insert into alumno(ci,nombre_completo,fecha_nac,departamento,)";
	$s.=" values (:ci,:nombrecompleto,:fechanac,:coddepto)";
	$sql = $db->prepare($s);
	$sql->bindValue(':ci',$_GET["ci"]);
	$sql->bindValue(':nombre_completo',$_GET["nombre_completo"]);
	$sql->bindValue(':fecha_nac',$_GET["fecha_nac"]);
	$sql->bindValue(':departamento',$_GET["departamento"]);
	$sql->execute();
	$state=$db->lastInsertId();
	if ($state)
	{
		header("HTTP/1.1 200 insercion correcta");
		echo json_encode($state);
		exit;
	}
}
if ($_SERVER["REQUEST_METHOD"]=="DELETE")
{
	$sql = $db->prepare("delete from persona where ci=:ci");
	$sql->bindValue(':ci',$_GET["ci"]);
	$sql->execute();
	header("HTTP/1.1 200 borrado");
	exit;
}

if($_SERVER["REQUEST_METHOD"]=="PUT"){
	$s="update persona set nombre_completo='".$_GET['nombre_completo']."',fecha_nac='".$_GET['fecha_nac']."', departamento='".$_GET['departamento']."'";
    $s.="where ci=".$_GET['ci'];
	$sql = $db->prepare($s);
	$sql->bindValue(':ci',$_GET["ci"]);
	$sql->bindValue(':nombre_completo',$_GET["nombre_completo"]);
	$sql->bindValue(':fecha_nac',$_GET["fecha_nac"]);
	$sql->bindValue(':departamento',$_GET["departamento"]);
	$sql->execute();
	exit;

}
?>