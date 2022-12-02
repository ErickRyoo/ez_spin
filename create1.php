<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_db";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);

$name = "";
$email = "";
$password = "";
$user_type = "";

$errorMessage ="";
$successMessage ="";

if ( $_SERVER ['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    do {
        if ( empty($name)|| empty($email)|| empty($password) || empty($user_type) ) {
            $errorMessage = " All fields are required";
            break;
        }

        //add new clients to db
        $sql = "INSERT INTO user_form(name, email, password, user_type)" ."VALUES ('$name','$email','$password', '$user_type')";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $name = "";
        $email = "";
        $password = "";
        $user_type = "";

        $successMessage = "Client added correctly";

        header("location: userlist.php");
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
    <h2>New User</h2>


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
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">User Type</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="user_type" value="<?php echo $user_type; ?>">
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
            <a class="btn btn-outline-primary" href="userlist.php" role="button">Cancel</a>
        </div>
    </div>
</form>


    </div> 
</body>
</html>