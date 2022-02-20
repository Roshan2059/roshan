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

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
        
        .alert-success{
            background-color: #28a745;
            border-color: #28a745;
            font-size: 20px;
        }
        .alert-danger{
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .alert-success .btn-close{
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }
        .alert-danger .btn-close{
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-close{
            padding: 0.25rem 0.5rem;
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 0.25rem;
        }

        .btn-close:hover{
            color: #fff;
            background-color: #d73925;
            border-color: #d73925;
        }

        .container{
            margin-left: auto;
            margin-right: auto;
            width: 25%;
            background-color: rgb(253, 80 , 115);
            border-radius:20px;
        }

        .text-center{
            margin-top: 0.5em;
            text-align: center;
            font-family: 'Montserrat', sans-serif;  
            font-size: 2em;
            font-weight: bold;
            color: #fff;
        }

        .form-label{
            margin-top: 10em;
            font-size: 18px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            color: #fff;
        }

        .form-control{
            padding: 5px;
            width: 90%;
            display: inline-block;
            background: white;
            border: none;
            border-radius: 8px;
            font-size: 17px;
        }

        .form-control:focus{
            background-color: #ddd;
            outline: 1px solid #5e00c9;
            border: none;
        }
        
        .form-control:focus::-webkit-input-placeholder {
            color: #888;
        }

        .mb-3{
            margin-bottom: 0.4em;
            margin-left: 1em;
        }

        #sub-btn{
            background: #5e00c9;
            border-color: #28a745;
            height: 2em;
            color: #fff;
            width: 89%;
            display: inline-block;
            font-size: 20px;
            border-radius: 10px;
            margin-top: 0.1em;
            margin-left: 0.8em;
            margin-bottom: 0.4em;
        }

        #sub-btn:hover{
            background-color: #313552; 
            cursor: pointer;
        }
        
    </style>
  </head>
  <body>
      <?php
      require 'partials/_nav.php';
        if(isset($showAlert)&&$showAlert)
        {

          echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your account is created and you can now login!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }

        if(isset($showError)&&$showError)
        {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> Your account is not created!
                <button type="button" class="clost" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
          </div>';
        }
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