<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <style>
    * {
        margin: 0;
        padding: 0;
        --primary: #5e00c9;
        --primaryA: rgb(255, 118, 141);
        font-family: 'Montserrat', sans-serif;
    }

    body{
        background-color: whitesmoke;
    }

    .menu-box {
        /* background: linear-gradient(180deg, pink 0%, rgb(255,204,110) 100%); */
        background-color: var(--primaryA);
        height: 90vh;
        width: 10%;
        display: block;
        position: fixed;
        bottom: 0;
    }

    .admin_nav{
        background: linear-gradient(90deg, var(--primary) 0%, var(--primaryA) 100%);
        /* background-color: var(--primary); */
        width: 100vw;
        height: 10vh;
    }

    .admin_nav h1{
        display: inline;
        color: white;
        font-size: 2.5em;
        position: relative;
        left: 0vw;
    }

    .admin_nav h2{
        display: inline;
        color: white;
        font-size: 2em;
        position: relative;
        left: 28vw;
    }

    .admin_nav a{
        border-radius: 7px;
        font-size: 20px;
        box-sizing: border-box;
        text-decoration: none;
        padding: 8px 10px;
        background-color: var(--primary);
        color: white;
        position: absolute;
        top: 1.4vh;
        left: 91vw;
        font-weight: bolder;
    }

    .admin_nav a:hover{
        background-color: white;
        color: blue;
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
        font-weight: 900;
    }

    .fli {
        margin-top: 20px;
    }

    li:hover {
        background-color: white;
        color: #9471f5;
    }
    </style>
</head>
<body>
    <div class="admin_nav">
        <h1>RJ Movies</h1>
        <h2>Admin Panel</h2>
        <a href="#">LOG OUT</a>
    </div>
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
</body>
</html>