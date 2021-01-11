<?php

$hostname='ec2-3-218-123-191.compute-1.amazonaws.com';
$database='d9pr5aifgprbrk';
$user='ftjmhxlmrknfjm';
$pass='a950396198402283060bcb94c41148d68837731bdc234de9ffe3d2f6a19fb869';

$conexion = pg_connect("host='ec2-3-218-123-191.compute-1.amazonaws.com' dbname=d9pr5aifgprbrk port=5432 user=ftjmhxlmrknfjm password=a950396198402283060bcb94c41148d68837731bdc234de9ffe3d2f6a19fb869") or die ("Error de Conexión".pg_last_error());


$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contra = $_POST['contra'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$total = $nombre.", ".$direccion.", ".$email.", ".$telefono.", ".$contra.",".$estado.", ".$municipio."'";
$querycont = pg_query($conexion, "INSERT INTO usuario(nombre,direccion,email,telefono,contra,estado,municipio) VALUES (".$total.");");

pg_close($conexion);

?>
