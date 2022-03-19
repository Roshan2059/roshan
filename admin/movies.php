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
        --primary: #5e00c9;
        --primaryA: #313552;
    }
    
        body {
            background-color: whitesmoke;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }

        .menu-box {
            background: linear-gradient(180deg, var(--primaryA) 35%, var(--primary) 100%);
            height: 100vh;
            width: 10%;
            display: block;
            float: left;
            position: fixed;
        }

        ul {
            list-style-type: none;
        }

        a {
            text-decoration: none;
            color: white;
        }

        li {
            font-size: 20px;
            padding: 20px;
        }

        .fli {
            margin-top: 100px;
        }

        li:hover {
            background-color: white;
            color: #9471f5;
        }

        .add{
            position: relative;
            left: 85vw;
            top: 2vh;
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
            position: relative;
            top: 10vh;
            left: 15vw;
            width: 85vw;
            height: auto;
            min-height: 90vh;
        }

        .box {
            position: relative;
            top: 0vh;
            width: 15vw;
            height: 40vh;
            margin: 10vh 2vw 2vh 2vw;
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
            margin: 5px 14px;
        }

        .box .modify{
            background-color: green;
        }

        .box .delete{
            background-color: rgb(240, 37, 37);
        }
    </style>
</head>

<body>
    <div class="menu-box">
        <ul>
            <a href="dashboard.html">
                <li class="fli">Dashboard</li>
            </a>
            <a href="users.html">
                <li>Users</li>
            </a>
            <a href="booking.html">
                <li>Bookings</li>
            </a>
            <a href="movies.html">
                <li>Movies</li>
            </a>
            <a href="show.html">
                <li>Shows</li>
            </a>
        </ul>
    </div>

        <a href="add_movies.html" class="add">Add movie</a>

    <div class="boxes">
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