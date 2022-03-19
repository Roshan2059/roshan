<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
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

        if($password == $cpassword)
        {
            // $sql = "INSERT INTO user (`first_name`, `last_name`, `username`, `password`, `email`, `phone_number`, `address`) VALUES ($fname, $lname, $username, $password, $email, $phone, $address);
            // ";
            $sql = "INSERT INTO user(`first_name`, `last_name`, `username`, `password`, `email`, `phone_number`, `address`) values('$fname', '$lname', '$username', '$password', '$email', '$phone', '$address')";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                $showAlert = true;
            }
        }
        else{
            $showError = "Password do not match";
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>

    <style>
        
    </style>
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
                <label for="password" class="form-label" >Password</label>
                <input type="password" class="form-control" id="password" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label" >Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" id="cpassword" name="cpassword">
            </div>
            <button type="submit" id="sub-btn" class="btn btn-primary">Submit</button>
        </form>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>