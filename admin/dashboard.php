<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RJ Movies Admin Panel</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <?php include '../partials/navnside.php'; ?>
    <?php include '../connection.php'; ?>

    <div class="main">
        <div class="box">
            <h1>Now showing movies:</h1>
            <?php
            $sql = "SELECT * FROM movies";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='movie-box'>";
                    echo "<h2>" . $row['movie_name'] . "</h2>";
                    echo "<img src='" . $row['movie_image'] . "' alt='" . $row['movie_name'] . "'>";
                    echo "<p>" . $row['movie_description'] . "</p>";
                    echo "</div>";
                }
            }
            ?>
        </div>

        <div class="box">
            <h1>Current show:</h1>
        </div>

        <div class="box">
            <h1>Upcoming Shows:</h1>
            movie name: <br>
            start time:
        </div>

        <div class="box">
            <h1>Booked Seats:</h1>
            <h2></h2>
        </div>

        <div class="box">
            <h1>Available Seats:</h1>
            <br>
            <h2>
                <?php

                ?>
            </h2>
        </div>

        <div class="box">
            <h1>No. of users:</h1>
            <br>
            <h2>
                <?php
                $sql = 'select * from user';
                $result = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($result);
                echo $row;
                ?>
            </h2>
        </div>
    </div>

</body>

</html>