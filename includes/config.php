<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','neorentdb');
define('DB_PASS','(ZH9.uIIdQihpPm[');
define('DB_NAME','neorentdb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>