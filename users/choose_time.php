<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choose the time</title>
    <link rel="stylesheet" href="choose_time.css">
</head>

<body>
    <div class="container"></div>
    <div class="frame1">
        <h4>KGF chapter 2</h4>
        <div class="rectangle_1">
            <iframe width="580" height="329" src="https://www.youtube.com/embed/Qah9sSIXJqk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>Movie description:
            Directed by: <br>
            Actor:
        </p>
        <p class="text">Select movie time</p>
        <a href="../login.php"><div id="time1">
            <?php
            $time = "10:00 pm";
            echo $time;
            ?>
        </div></a>
        <a href="../login.php"><div class="time2">
            <?php
            $time = "2:00 pm";
            echo $time;
            ?>
        </div></a>
        <a href="../login.php"><div class="time3">
            <?php
            $time = "5:00 pm";
            echo $time;
            ?>
            </div></a>

        <!-- <?php
        // if(isset($_SESSION['userid'])){
        //     echo '<a href="../ticket.php"><div id="btn">Checkout</div></a>';
        // }
        // else{
        //     echo '<a href="../login.php"><div id="btn">Checkout</div></a>';
        // }
        ?>

        <?php
        // if(isset($_SESSION['userid'])){
        //     echo '<a href="../users/browse_movies.php"><div id="btn">Back to homepage</div></a>';
        // }
        // else{
        //     echo '<a href="../login.php"><div id="btn">Back to homepage</div></a>';
        // }
        ?> -->
    </div>
</body>

</html>