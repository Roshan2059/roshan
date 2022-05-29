<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="add_movies.css">
</head>

<body>
<!-- <?php include '../partials/navnside.php'; ?> -->
    <form action="add_movies.php" method="POST">
        <h1>Add Movie</h1>
        <label for="">Movie name:</label><br>
        <input type="text" name="movie_name" id=""><br>
        <label for="">Description:</label><br>
        <textarea name="movie_description" id="" cols="40" rows="10"></textarea><br>
        <label for="">Release Date</label><br>
        <input type="date" name="release_date" id=""><br>
        <label for="">Image:</label><br>
        <input type="file" name="movie_image" id=""><br>
        <label for="">Trailer link</label>
        <input type="text" name="trailer_link"><br>
        <a href="">confirm</a>
    </form>
    <?php
    include '../connection.php';
    if(isset($_POST['submit'])){
        $movie_name = $_POST['movie_name'];
        $movie_description = $_POST['movie_description'];
        $release_date = $_POST['release_date'];
        $movie_image = $_POST['movie_image'];
        $sql = "INSERT INTO movie (title, description, release_date, image) VALUES ('$movie_name', '$movie_description', '$release_date', '$movie_image')";
        if(mysqli_query($conn, $sql)){
            echo "New movie inserted successfully";
        }else{
            echo "Error: ".$sql."<br>".mysqli_error($conn);
        }
    }
    ?>
</body>

</html>