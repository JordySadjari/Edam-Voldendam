<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'Gemeente';
const DB_PASSWORD = 'Gemeente';
const DB_NAME = '20466_Klomp';

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
    echo "<p>MySQL error no ($mysqli->connect_errno) : ($mysqli->connect_error)</p>";
    exit();
}
/*else {
    echo "<p>Connection okay</p>";
}*/
?>