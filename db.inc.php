<?php
$hostname = "localhost";

$dbname = "Accounts";

$con = mysqli_connect($hostname, 'root', '', $dbname);

if (!$con)
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>