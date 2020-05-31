<?php 

DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','su');
DEFINE('DB_PWD','P@ss123');
DEFINE('DB_NAME','company');


$connect=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME) or die($connect);

/*if (!$connect) {
	# code...
	die('Connection unsuccessful'.mysql_error());
}else{

	echo 'Conneted successfully';
}*/

?>