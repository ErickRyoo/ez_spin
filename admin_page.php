<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ez Spin Admin Panel</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/mainadmin.css">
    <link rel="icon" type="image/icon" href="favicon.png" />

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="/spin/images/logo.svg" alt="">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="admin_page.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="userlist.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Registered Users</span>
                    </a>
                </li>
                <li>
                    <a href="appointmentlist.php">
                        <span class="icon">
                            <ion-icon name="list-outline"></ion-icon>
                        </span>
                        <span class="title">Appointment List</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">

                        <?php
$con=mysqli_connect("localhost","root","","booking_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT first,last FROM book ORDER BY first";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf(" %d\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
mysqli_close($con);
?>                      </div>
                        <div class="cardName">Total Appointment</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="calendar-clear-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">

                        <?php
$con=mysqli_connect("localhost","root","","user_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT name FROM user_form ORDER BY name";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf(" %d\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
mysqli_close($con);
?>          
                        </div>
                        <div class="cardName">Registered Users</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="hourglass-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Completed</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="checkmark-done-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Books</h2>
                        <a href="appointmentlist.php" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>First</td>
                                <td>Last</td>
                                <td>Number</td>
                                <td>Email</td>
                                <td>Pick up Date</td>
                                <td>Pick up Address</td>
                                <td>Delivery Date</td>
                                <td>Delivery Address</td>
                                <td>Services</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            $servername= "localhost";
                            $username= "root";
                            $password = " ";
                            $database = "booking_db";

                            // Create connection
                            $connection = new mysqli($servername, $username, $password, $database);

                            //check connection 
                            if ($connection->connect_error) {
                                die("Connection failed: " . $connection->connect_error);
                            }

                            //read all row from database table
                            $sql = "SELECT * FROM book ORDER BY ID DESC LIMIT 4";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("invalid query: " . $connection->error);
                            }
                            //read date each row
                            while($row = $result->fetch_assoc()) {
                                echo"

                            <tr>
                                <td>$row[id]</td>
                                <td>$row[first]</td>
                                <td>$row[last]</td>
                                <td>$row[number]</td>
                                <td>$row[email]</td>
                                <td>$row[pdate]</td>
                                <td>$row[paddress]</td>
                                <td>$row[ddate]</td>
                                <td>$row[daddress]</td>
                                <td>$row[services]</td>
                            </tr>
                            ";
                            }
                            ?>
                            

                           

                           
                            

                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Admininstrators</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Erick(Admin1) <br> <span>Balagtas Branch</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Mochi(Admin2) <br> <span>Lipa Branch</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Kimchi(Admin3) <br> <span>Batangas City Branch</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Jussel(Admin4) <br> <span>Ibaan Branch</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Andre (Admin5) <br> <span>Quezon Branch</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="js/adminmain.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>