<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';

    $showAlert = $showError = false;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "select * from `user` where username = '$username'";
    $sqlexe = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($sqlexe);

    if ($num > 0) {
        $show_error = true;
    } else {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user(`first_name`, `last_name`, `username`, `password`, `email`, `phone_number`, `address`) values('$fname', '$lname', '$username', '$hash', '$email', '$phone', '$address')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $show_sucess = true;
            }
        } 
        else {
            $showError = "Password do not match";
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>

<body>
    <?php
    require 'partials/_nav.php';
    ?>

    <div class="container">

        <h1 class="text-center">Sign Up</h1>

        <form action='signup.php' method='POST'>
            <div class="mb-3">
                <label for="fname" class="form-label">First name</label>
                <input type="text" id="fname" name="fname" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last name</label>
                <input type="text" id="lname" name="lname" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" name="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="number" id="phone" name="phone" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" name="address" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" id="cpassword" name="cpassword">
            </div>
            <button type="submit" id="sub-btn" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>