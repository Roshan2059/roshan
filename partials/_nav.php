<?php
if (!isset($_SESSION)) {
  session_start();
}
$loggedin = false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
}
?>

<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand middle" href="/movieticket/welcome.php">RJ Movies</a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div>
      <ul class="navbar-nav">
        <button type="button" class="btn btn-primary nav-item" onclick="location.href='/movieticket/users/browse_movies.php';">Book Now</button>

        <!-- <button type="button" class="btn btn-primary nav-item"> <a href="../users/browse_movies.php"></a> Book Now</button> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/movieticket/home.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/movieticket/home.php#about_us">About Us</a>
        </li>
        <?php
        if ($loggedin) {
          echo '
          
          <li class="nav-item">
            <a class="nav-link" href="/movieticket/users/my_bookings.php">My bookings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/movieticket/logout.php">logout</a>
          </li>';
        } else {
          echo '
            <li class="nav-item">
              <a class="nav-link" href="/movieticket/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/movieticket/signup.php">Signup</a>
            </li>';
        }
        ?>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>