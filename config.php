<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registerdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die('<script>swal("Connection Failed!", "Please Check!", "warning");</script>');
}

?>