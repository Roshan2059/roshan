<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="movies.css">
</head>

<body>
    <?php include '../partials/navnside.php';
    include '../connection.php' ?>

    <div class="boxes">
        <span><a href="add_movies.php" class="add">Add movie</a></span>

        <!-- <div class="box m1">
            <a href="#" class="modify">modify</a>SSS
            <a href="#" class="delete">delete</a>
        </div> -->


        <?php
        $displayq = "select * from movie";
        $displayexe = mysqli_query($conn, $displayq);

        if ($displayexe) {

            echo("<div class='box m1'>");
            echo("<span>Movie 1</span>" . "<br>");
            echo("<a href='' class='modify'>modify</a>");
            echo("<a href='' class='delete'>delete</a>");
            echo("</div>");
            while ($row = mysqli_fetch_assoc($displayexe)) {
                echo ($row['title']);
                echo ($row['description']);
                echo ("<img src='data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])."' width='auto' height='auto'>");
            }
        }
        ?>
    </div>
</body>

</html>