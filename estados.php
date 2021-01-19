<?php

$hostname='ec2-3-218-123-191.compute-1.amazonaws.com';
$database='d9pr5aifgprbrk';
$user='ftjmhxlmrknfjm';
$pass='a950396198402283060bcb94c41148d68837731bdc234de9ffe3d2f6a19fb869';

$conexion = pg_connect("host='ec2-3-218-123-191.compute-1.amazonaws.com' dbname=d9pr5aifgprbrk port=5432 user=ftjmhxlmrknfjm password=a950396198402283060bcb94c41148d68837731bdc234de9ffe3d2f6a19fb869") or die ("Error de Conexión".pg_last_error());

$consulta = "Select * from estado";
$resultado = pg_query($conexion, $consulta);
$reporte = array();
$cont =0;
while ($fila = pg_fetch_array($resultado)){
    $reporte[$cont++] = array_map('utf8_encode',$fila);
}

echo json_encode($reporte);

pg_close($conexion);
