<?php
define('SERVERNAME', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');
define('DBNAME', 'parking');
try {
	$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
	if (!$connect) {
		die("connection failed".mysqli_connect_error());
	} 
	else {
		
	}
} 
catch (Exception $e) {
	die($e->getMessage());
}

?>