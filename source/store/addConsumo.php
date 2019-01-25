<?php
session_name("TAIRE");
session_start();
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
include('conn.php');

$categoria = $_POST["categoria"];
$cant_aire = $_POST["cant_aire"];
$latlng = $_POST["latlng"];

$latlng=str_replace("LatLng", "",$latlng);$latlng=str_replace("(", "",$latlng);$latlng=str_replace(")", "",$latlng);$latlng=str_replace(" ", "",$latlng);

$cord = explode(",", $latlng);

$lat=$cord[0];
$lng=$cord[1];
 
// Inserta delitos 
$query = "INSERT INTO aires (latitud,longitud,cantidad_aires,ip,categoria,geom) VALUES ('$lat','$lng',$cant_aire,'$ip','$categoria',PointFromText('POINT($lat $lng)',4326));";

//echo $query;
mysql_query($query) or die('Consulta fallida: ' . mysql_error());
echo json_encode(array('message' => 'OK'));
?>