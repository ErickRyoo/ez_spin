<?php
if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "user_db";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);

$sql = "DELETE FROM user_form WHERE id= $id";
$connection->query($sql);
}

header("location: userlist.php");
exit;
?>