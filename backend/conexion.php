<?php
define('DB_SERVER','localhost');
define('DB_NAME','oy000250_busers');
define('DB_USER','oy000250_busers');
define('DB_PASS','da72KOvofo');
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
?>