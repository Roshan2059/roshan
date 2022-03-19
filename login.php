<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
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
            $userinfo = mysqli_fetch_assoc($result);

            // if($num == 1 )
            // {
            //   $login = true;
            //   session_start();
            //   $_SESSION['loggedin'] = true;
            //   $_SESSION['usernmae'] = $username;
            //   $_SESSION['userid'] = $userinfo['user_id'];
            //   echo $userinfo['user_id'];

            //   header("location: ticket.php");
            // }

            if($userinfo["usertype"] == "user")
            {
              $login = true;
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['usernmae'] = $username;
              $_SESSION['userid'] = $userinfo['user_id'];
              header("location: ticket.php");
            }

            if($userinfo["usertype"] == "admin")
            {
              header("location: admin/dashboard.php");
            }
          }
          else
          {
            $showError = true;
          }
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