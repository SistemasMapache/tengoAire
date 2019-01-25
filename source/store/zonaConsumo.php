<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
session_name("TENGOAIRE");
session_start();
include('conn.php');

if(isset($_REQUEST['x'])&&isset($_REQUEST['y'])){
	$sql = " SELECT categoria, sum(cantidad_aires) AS cantidad
	FROM aires
	where  ST_Contains(BUFFER( GEOMFROMTEXT(  'POINT(".$_REQUEST['x']." ".$_REQUEST['y']. ")' ) , 0.00200 ) ,geom ) GROUP BY categoria";
	$rs = $conn_pdo->query($sql);
	$i=0;
	while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
		$json_result[]=$row;
		$i++;
	}
	header('Content-type: application/json');
	echo json_encode( $json_result );
}
