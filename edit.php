<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking_db";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);


$id = "";
$first = "";
$last = "";
$number = "";
$email = "";
$pdate = "";
$paddress = "";
$ddate = "";
$daddress = "";
$services = "";

$errorMessage ="";
$successMessage ="";

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET method: Show the data of the client
    if (!isset($_GET["id"]) ) {
        header("location: appointmentlist.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of the selected client from the database table
    $sql = "SELECT * FROM book WHERE id=$id";
    $result =$connection->query($sql);
    $row = $result->fetch_assoc();


    if (!$row) {
        header("location: appointmentlist.php");
        exit;
    }

    $first = $row['first'];
    $last = $row['last'];
    $number = $row['number'];
    $email = $row['email'];
    $pdate = $row['pdate'];
    $paddress = $row['paddress'];
    $ddate = $row['ddate'];
    $daddress = $row['daddress'];
    $services = $row['services'];
}
else {
    // POST method: Update the data of the client

    $id = $_POST["id"];
    $first = $_POST["first"];
    $last = $_POST["last"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $pdate = $_POST["pdate"];
    $paddress = $_POST["paddress"];
    $ddate = $_POST["ddate"];
    $daddress = $_POST["daddress"];
    $services = $_POST["services"];

    do {
        if ( empty($first)|| empty($last)|| empty($number) || empty($email) || empty($pdate) || empty($paddress) || empty($ddate) || empty($daddress) || empty($services) ) {
            $errorMessage = " All fields are required";
            break;
        }

        $sql = "UPDATE book " . 
        "SET first = '$first', last = '$last', number = '$number', email = '$email', pdate = '$pdate', paddress = '$paddress', ddate = '$ddate', daddress='$daddress', services = '$services' " .
        "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Client updated successfully";

        header("location: appointmentlist.php");
        exit;

    }while (false);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ez spin Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
    <h2>New Client</h2>


<?php
if ( !empty($errorMessage) ) {
    echo "
    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>$errorMessage</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
";
}

?>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">First</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="first" value="<?php echo $first; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Last</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="last" value="<?php echo $last; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Number</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="number" value="<?php echo $number; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Pick up Date</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="pdate" value="<?php echo $pdate; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Pick up Address</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="paddress" value="<?php echo $paddress; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Delivery Date</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="ddate" value="<?php echo $ddate; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Delivery Address</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="daddress" value="<?php echo $daddress; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Services</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="services" value="<?php echo $services; ?>">
        </div>
    </div>

    <?php
    if ( !empty($successMessage)) {
        echo "
        <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'
                </div>
            </div>
        </div>
        ";    
       
    }

    ?>


    <div class="row mb-3">
        <div class="offset-sm-3 col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="appointmentlist.php" role="button">Cancel</a>
        </div>
    </div>
</form>


    </div> 
</body>
</html>