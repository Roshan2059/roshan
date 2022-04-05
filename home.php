<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>RJ MOVIES</title>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <div id="home">
        <div class="home1">
            <h1>Welcome to, RJ MOVIES</h1>
            <h2><span id="w"><span>Watch</span> </span> <br> Experience the movie </h2>
            <a href="/movieticket/users/browse_movies.php"><button>Book Now</button> </a>
        </div>
        <div class="home2">
            <img src="Movie.svg" alt="watching movie" height="485px" width="500px">
        </div>
    </div>

    <div id="about_us">
        <div class="au_content">

            <h1>
                About RJ MOVIES
            </h1>

            <p>
                <b>RJ MOVIES</b> is a well established cinema hall of Nepal
                which is located in Thamel,Kathmandu. It was commenced on
                2075 B.S. with the purpose of providing our customers the
                best movie watching experience. We are proud to say that
                we are the first cinema hall of Nepal to introduce the VR
                technology which not only has the 360&deg; view but also gives
                our customer the option to interact with the seats on alignment
                with the movie scenes. We also have a well managed cafeteria in
                which the foods and drinks are healthy as well as affordable. 
            </p>
        </div>
    </div>

    <footer>
        <h1 style=" display: inline-block; margin-left:600px;">RJ MOVIES</h1>
        <div id="foot">
            <div id="foot1">
                <h3>For Booking</h3>
                <br>
                <ul>
                    <li>9869064636</li>
                    <li>9803674803</li>
                </ul>
            </div>
            <div id="foot2">
                <h3>Quick Links</h3>
                <br>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#au">About Us</a></li>
                </ul>
            </div>
            <div id="foot3">
                <h3>Follow us</h3>
                <br>
                <ul>
                    <li><i class="fab fa-facebook"></i></li>
                    <li><i class="fab fa-youtube"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-instagram"></i></li>   
                </ul>

            </div>
        </div>
        <div id="last">
            <p>&copy; RJ MOVIES 2017-2022 &nbsp;&nbsp;&nbsp;&nbsp;All rights reserved</p>
        </div>
      </footer>
      <script src="stylescript.js"></script>
      <script src="https://kit.fontawesome.com/902b67489c.js" crossorigin="anonymous"></script>
  </body>
</html>