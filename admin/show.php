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

        /* .main{
        float: right;
        display: block;
        width: 65vw;
        height: 30vh;
        padding: auto;
        margin-top: 40vh;
    } */

        /* button {
            border: none;
            background-color: springgreen;
            color: white;
            padding: 20px;
            margin-left: 30px;
            box-shadow: 5px 5px 10px gray;
            border-radius: 10px;
            font-size: 20px;
        }

        button:hover {
            background-color: white;
            color: springgreen;
            cursor: pointer;
        }

        .main {
            height: auto;
            display: flex;
            flex-wrap: wrap;
            padding-top: 5vh;
        }

        .box {
            border: 2px solid springgreen;
            height: 30vh;
            width: 20vw;
            display: flex;
            flex-wrap: wrap;
            float: left;
            font-family: sans-serif;
            margin: 30px 40px;
            box-shadow: 5px 5px 10px gray;
            color: white;
            position: relative;
        }

        .box h3 {
            color: black;
            font-size: 20px;
            width: max-content;
            height: 5vh;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .box img {
            height: 100vh;
        }*/

        /* .add{
            
            display: flex;
            flex-direction: row;
        } */
        
        .add{
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

        .boxes{
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



    <!-- <div class="main">
        <button onclick="location.href = 'add_show.html';">Add show</button>
        <button onclick="location.href = 'modify_show.html';">Modify show</button>
        <button onclick="location.href = 'delete_show.html';">Delete show</button>
    </div> -->
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