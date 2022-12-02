<?php
if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "booking_db";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);

$sql = "DELETE FROM book WHERE id= $id";
$connection->query($sql);
}

header("location: appointmentlist.php");
exit;
?>