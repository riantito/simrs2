
<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "simrs2";

$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Database connection failed:" . mysqli_error());
}
