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

        table {
            position: absolute;
            top: 3vh;
            left: 15vw;
            border: none;
            width: 80vw;
            height: auto;
            border-collapse: separate; 
            border-spacing: 0 0.8em;
        }

        th{
            padding: 30px;
            margin: 10px;
        }

        tr {
            text-align: center;
            background-color: pink;
            color: blue;
            font-size: 20px;
            padding: 10px;
            box-sizing: border-box;
        }

        td {
            padding: 30px;
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

    <div class="main">
        <table>
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Address</th>
                <th>Phone no.</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pradip Pandey</td>
                <td>Deepan455</td>
                <td>Gongabu,kathmandu</td>
                <td>9841000000</td>
            </tr>
        </table>
    </div>
</body>

</html>