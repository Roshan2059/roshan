<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RJ Movies Admin Panel</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
</head>
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
        background: linear-gradient(180deg, var(--primary) 0%, var(--primaryA) 100%);
        height: 100vh;
        width: 10%;
        display: block;
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
        font-family: 'Montserrat', sans-serif;
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

    .main {
        width: 85vw;
        display: flex;
        flex-wrap: wrap;
        padding-top: 5vh;
        position: relative;
        left: 12vw;
    }

    .box {
        background-color: pink;
        height: 35vh;
        width: 22vw;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        box-sizing: border-box;
        margin: 30px 40px;
        box-shadow: 5px 5px 15px gray;
        color: blue;
        padding: 1em;
    }

    .box h1 {
        display: flex;
        flex-wrap: wrap;
        font-size: 1.5em;
        width: max-content;
        height: 5vh;
        margin-left: auto;
        margin-right: auto;
        font-weight: 1000;
    }

</style>
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

    <div class="main">
        <div class="box">
            <h1>Now showing movies:</h1>
            <h1>Avengers</h1>    
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
        </div>

        <div class="box">
            <h1>No. of users:</h1>
        </div>
    </div>

</body>

</html>