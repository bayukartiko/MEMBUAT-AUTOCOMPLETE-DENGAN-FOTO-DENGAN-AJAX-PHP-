<?php
$DB_HOST = "localhost";
$DB_DATABASE = "db_starbhak";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
// $DB_PORT = "mysql";

$db1 = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

if ($db1->connect_error){
    die('connection failed :' .$conn->connection_error);
}
?>