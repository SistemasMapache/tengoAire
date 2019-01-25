<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
session_name("TENGOAIRE");
session_start();
include('conn.php');

if(isset($_REQUEST['xsw'])&&isset($_REQUEST['ysw'])&&isset($_REQUEST['xne'])&&isset($_REQUEST['yne'])){

	$xsw=$_REQUEST['xsw'];
	$ysw=$_REQUEST['ysw'];
	$xne=$_REQUEST['xne'];
	$yne=$_REQUEST['yne'];
	$sql = " SELECT  categoria, sum(cantidad_aires) AS cantidad FROM aires where  
	ST_Contains(GeomFromText('Polygon(($xsw $ysw,$xne $ysw,$xne $yne, $xsw $yne,$xsw $ysw))') ,geom ) GROUP BY categoria";
	$rs = $conn_pdo->query($sql);
	$i=0;
	while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
	$json_result[]=$row;
	$i++;


	}
	header('Content-type: application/json');
	echo json_encode( $json_result );
}