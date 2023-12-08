<?php
error_reporting(0);
ob_start();
session_start();
$siteName = "demo.com";

DEFINE("BASE_URL","http://cipetbhopal.com/");
DEFINE("BASE_URL","http://localhost/portal/");

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', ''); 
DEFINE ('DB_HOST', 'localhost'); 
DEFINE ('DB_NAME', 'tei'); 
$conn =  new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

/*$username ="root";
$password = " ";
$host = "localhost";
$dbname = "tei";
$conn =mysqli_connect($host, $username, $password, $dbname);
if($con)
{
die("not open");
}*/

date_default_timezone_set('Asia/Calcutta');
 
if($conn->connect_error)
die("Failed to connect database ".$conn->connect_error );

?>
