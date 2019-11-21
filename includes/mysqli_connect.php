<?php
// verbindung aufbauen zur Datenbank
$conn = mysqli_connect($server, $dbuser, $dbpasswort, $dbname);
// var_dump($conn);

if( $conn === false ){
	die('Keine Verbindung zur Datenbank'); 
}

?>