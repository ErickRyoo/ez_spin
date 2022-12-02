<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ez Spin Laundry Shop</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/appointment.css">
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

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Registered Users</h2>
                        <a href='create1.php'>
                            <button type='button' style="background-color: #008CBA;border: none; color: white;  padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;border-radius: 12px;"><span class='adduser'></span>Add</button>
                        </a>

                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Password</td>
                                <td>User Type</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $servername= "localhost";
                            $username= "root";
                            $password = " ";
                            $database = "user_db";

                            // Create connection
                            $connection = new mysqli($servername, $username, $password, $database);

                            //check connection 
                            if ($connection->connect_error) {
                                die("Connection failed: " . $connection->connect_error);
                            }

                            //read all row from database table
                            $sql = "SELECT * FROM user_form";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("invalid query: " . $connection->error);
                            }
                            //read date each row
                            while($row = $result->fetch_assoc()) {
                                echo"

                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[password]</td>
                                <td>$row[user_type]</td>
                                <td>
                                    <a href='edit1.php?id=$row[id]'>
                                    <button type='button'style='background-color: #4CAF50;border: none; color: white;  padding: 5px 10px;text-align: center;text-decoration: none;display: inline-block;border-radius: 8px;'><span class='button'></span>Edit</button>
                                    </a>
                                    <a href='delete1.php?id=$row[id]'>
                                    <button type='button'style='background-color: #008CBA;border: none; color: white;  padding: 5px 10px;text-align: center;text-decoration: none;display: inline-block;border-radius: 8px;' ><span class='button'></span>Delete</button>
                                    </a>
                                </td>
                            </tr>
                            ";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                
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