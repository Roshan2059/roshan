<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: whitesmoke;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }

        .add {
            position: absolute;
            left: 70vw;
            top: 2vh;
            width: fit-content;
            padding: 10px;
            border-radius: 10px;
            font-size: 25px;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            background-color: springgreen;
            text-decoration: none;
            color: white;
        }

        .add a:hover {
            background-color: aqua;
            cursor: pointer;
        }

        .boxes {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            position: absolute;
            top: 10vh;
            left: 15vw;
            width: 80vw;
            height: 90vh;
        }

        .box {
            position: relative;
            top: 5vh;
            width: 15vw;
            height: 40vh;
            margin: 9vh 2vw 2vh 2vw;
            background-image: url(../images/ae.jpg);
            background-size: 100% 100%;
        }

        .box a {
            position: relative;
            top: 43vh;
            height: 2vh;
            width: 12vw;
            text-decoration: none;
            padding: 10px;
            background-color: #9471f5;
            color: white;
            border-radius: 10px;
            margin: 0px 14px;
        }

        .box .modify {
            background-color: green;
        }

        .box .delete {
            background-color: rgb(240, 37, 37);
        }
    </style>
</head>

<body>
    <?php include '../partials/navnside.php'; ?>

    <div class="boxes">
        <span><a href="add_movies.php" class="add">Add movie</a></span>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
        <div class="box m1">
            <a href="" class="modify">modify</a>
            <a href="" class="delete">delete</a>
        </div>
    </div>
</body>

</html>