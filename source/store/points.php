<?php
session_name("TENGOAIRE");
session_start();
include('conn.php');

if(isset($_REQUEST['f']))
$sql = " SELECT latitud,longitud,categoria*cantidad_aires as heat FROM `aires` WHERE fecha_declarado>'".$_REQUEST['f']."' ";
	else $sql = " SELECT latitud,longitud,categoria*cantidad_aires as heat FROM `aires`";

$rs = $conn_pdo->query($sql);

while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
	$heat.='[' . $row['latitud'] . ',' .  $row['longitud'] . ',' . $row['heat'] . '],';
}

echo '['. substr($heat, 0, -1) . ']';
