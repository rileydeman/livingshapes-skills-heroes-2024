<?php
$dbhost = $secrets["DB"]["DB_HOST"];
$dbname = $secrets["DB"]["DB_NAME"];
$dbuser = $secrets["DB"]["DB_USER"];
$dbpass = $secrets["DB"]["DB_PASSWORD"];
$dbport = $secrets["DB"]["DB_PORT"];

$db_conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

// Check connection
if ($db_conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
?>