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
            display: inline-block;
            position: fixed;
        }

        ul {
            list-style-type: none;
        }

        ul a {
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

        .add {
            position: absolute;
            top: 2vh;
            left: 85vw;
            width: fit-content;
            padding: 10px;
            border-radius: 10px;
            font-size: 25px;
            box-sizing: border-box;
            background-color: springgreen;
            text-decoration: none;
            color: white;
        }

        .add a:hover {
            background-color: aqua;
        }

        .boxes {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            position: absolute;
            top: 10vh;
            left: 10vw;
            height: 90vh;
            width: 85vw;
        }


        .box {
            position: relative;
            width: 15vw;
            height: 40vh;
            left: 5vw;
            top: 5vh;
            margin: 2vw;
            box-sizing: border-box;
            background-image: url(../images/ae.jpg);
            background-size: 100% 100%;
            box-shadow: 5px 5px 10px solid gray;
        }

        .datetime {
            position: absolute;
            width: 12vw;
            height: 8vh;
            left: 1vw;
            top: 32vh;
            font-size: 20px;
            line-height: 4vh;
            color: white;
        }
    </style>
</head>

<body>
    <a href="add_show.html" class="add">add show</a>

    <div class="boxes m1">
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
        <div class="box">
            <div class="datetime">
                Date : 03/16/2022<br>
                time : 6:00 a.m
            </div>
        </div>
    </div>

</body>

</html>