<?php
// user pwd db
# Connect to MySQL database PDO
$conn_pdo = new PDO('mysql:host=localhost;dbname=gestorwj_consumo_electrico','','');

// Create connection
$con=mysql_connect("localhost","","");

mysql_select_db("gestorwj_consumo_electrico",$con);
?>