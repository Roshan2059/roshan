<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userbookings</title>
    <style>
        body {
            background: whitesmoke;
        }

        .box1 {
            position: absolute;
            width: 300px;
            height: 70px;
            left: 530px;
            background: whitesmoke;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.25), 4px 4px 12px rgba(0, 0, 0, 0.25);
        }

        .mybookingtext {
            position: absolute;
            width: 464px;
            left: 445px;
            top: 20px;
            font-size: 35px;
            font-weight: bold;
            line-height: 40px;
            text-align: center;
            color: #000000;
            text-shadow: 7px 7px 4px rgba(0, 0, 0, 0.25);
        }


        .container {
            position: relative;
            top: 100px;
            width: auto;
            height: 600px;
            display: grid;
            background-color: whitesmoke;
            padding: 10px;
            grid-template-columns: repeat(auto-fill, minmax(20vw, 1fr));
            /* grid-template-rows: repeat(auto-fill, minmax(200px,1fr));  i like but gtc flow well*/
            grid-template-columns: repeat(auto-fill, minmax(20vw, 1fr));
            grid-template-columns: repeat(auto-fill, minmax(20vw, 1fr));
            /* grid-template-rows: repeat(auto-fill, minmax(200px,1fr));  i like but gtc flow well*/
            grid-gap: 20px;
            grid-auto-rows: minmax(100px, auto);
            grid-auto-columns: minmax(50px, auto);
        }

        .boxes {
            box-shadow: -2px -2px 8px #B4B4B4, 4px 4px 8px grey;
            border-radius: .5em;
            background-color: pink;
        }

        .boxes .content {
            position: relative;
            top: 90px;
            left: 10px;
            color: #000000;
            font-weight: bolder;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <div class="box1"></div>
    <div class="mybookingtext">My Bookings
    </div>
    <div class="container">
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>
        <div class="boxes">
            <div class="content"> Movie: <br>
                seats: <br> Date: <br> Amount: </div>
        </div>

    </div>
</body>

</html>