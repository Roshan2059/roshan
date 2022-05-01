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
  $showError = false;
  $login = false;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM user where username='$username'";
      $result = mysqli_query($conn, $sql);
      // $num = mysqli_num_rows($result);
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

      if ($userinfo["usertype"] == "user") {
        if (password_verify($password, $userinfo['password'])) {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['usernmae'] = $username;
          $_SESSION['userid'] = $userinfo['user_id'];
          $_SESSION['showUserSucess'] = true;
          header("location: ticket.php");
        }
      } elseif ($userinfo["usertype"] == "admin") {
        if (password_verify($password, $userinfo['password'])) {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['usernmae'] = $username;
          $_SESSION['userid'] = $userinfo['user_id'];
          $_SESSION['showUserSucess'] = true;
          header("location: admin/dashboard.php");
        }
      }else{
        $showError = true;
      }
    }
  }
  ?>

  <div class="container">
    <h1 class="text-center">Log In</h1>

    <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="username" id="username" name="username" class="form-control" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" id="password" name="password">
      </div>
      <button type="submit" id="sub-btn" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <?php
  if ($showError) {
    echo "<script>alert('Invalid username and password')</script>";
  }
  ?>
</body>

</html>