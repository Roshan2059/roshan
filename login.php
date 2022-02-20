<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
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
            margin: 5em auto;
            width: 20%;
            background-color: rgb(253, 80 , 115);
            border-radius:20px;
            justify-content: center;
            align-items: center;
        }

        .text-center{
            padding-top: 0.5em;
            margin-bottom: 0.5em;
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
            outline: 2px solid #fff;
            border: none;
        }
        
        .form-control:focus::-webkit-input-placeholder {
            color: #888;
        }

        .mb-3{
            margin-bottom: 0.5em;
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
            margin-top: 0.3em;
            margin-left: 0.8em;
            margin-bottom: 0.5em;
        }

        #sub-btn:hover{
          background: #6f00f9; 
          cursor: pointer;
        }
        
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
      <?php 
      require 'partials/_nav.php';
      include 'connection.php';
        $login = false;
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
          if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']))
          {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM user where username='$username' AND password = '$password'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);

            if($num == 1 )
            {
              $login = true;
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['usernmae'] = $username;

              header("location: ticket.php"); 
            }
          }
          else
          {
            $showError = true;
          }
        }


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
                <strong>Oops!</strong> Enter the credentials properly!
                <button type="button" class="clost" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
          </div>';
        }
      ?>
      <div class="container">
        <h1 class="text-center">Log In</h1>


        <form method = 'post' action ='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" id="username" name="username" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" >Password</label>
                <input type="password" class="form-control" id="password" id="password" name="password">
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