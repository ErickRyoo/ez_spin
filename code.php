<?php
session_start();
$conn =mysqli_connect("localhost", "root", "", "booking_db");

if(isset($_POST['submit']))
{
    $first = $_POST['first'];
    $last = $_POST['last'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pdate = $_POST['pdate'];
    $paddress = $_POST['paddress'];
    $ddate = $_POST['ddate'];
    $daddress = $_POST['daddress'];
    $services = $_POST['services'];
     $b=implode(',',$services);
     echo $b;

     $qry ="INSERT INTO book(first, last, number, email, pdate, paddress, ddate, daddress, services) VALUES ('$first', '$last', '$number', '$email', '$pdate', '$paddress', '$ddate', '$daddress','$b')";

     mysqli_query($conn,$qry);

     header("location: user_page.php");
     exit;

}

?>