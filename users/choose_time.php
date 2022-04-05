<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codewithroshan</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            font-family: monospace;
            background-color: whitesmoke;
        }

        .container {
            position: absolute;
            width: 610px;
            height: 355px;
            top: 75px;
            left: 50px;
            background-color: whitesmoke;
            box-shadow: inset -4px -4px 8px rgba(0, 0, 0, 0.25), inset 4px 4px 8px rgba(0, 0, 0, 0.25);
        }

        .container:hover {
            background-color: pink;
        }

        .frame1 {
            width: 1075px;
            height: 620px;
            left: 0px;
            top: 0px;
        }

        h4 {
            display: inline;
            position: absolute;
            width: 205px;
            height: 50px;
            left: 65px;
            display: inline;
            top: -5px;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 38px;
            color: #000000;
        }

        .rectangle_1 {
            position: absolute;
            display: inline;
            width: 580px;
            height: 329px;
            left: 65px;
            top: 88px;
            background: #000000;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.25), 4px 4px 12px rgba(0, 0, 0, 0.25);
        }

        p {
            position: absolute;
            display: inline;
            width: 267px;
            height: 114px;
            left: 65px;
            top: 443px;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            line-height: 38px;
            color: #000000;
        }

        .text {
            display: inline;
            position: absolute;
            width: 255px;
            height: 38px;
            left: 780px;
            top: 40px;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 38px;
            color: #000000;
        }

        #time1 {
            padding-top: 10px;
            font-weight: 700;
            font-size: 32px;
            line-height: 38px;
            font-family: 'constantia';
            text-align: center;
            position: absolute;
            width: 255px;
            height: 52px;
            left: 764px;
            top: 177px;
            background: #FFFFFF;
            border: 3px solid pink;
            border-radius: 35px;
            box-shadow: inset -4px -4px 8px rgba(0, 0, 0, 0.25), inset 4px 4px 8px rgba(0, 0, 0, 0.25);

        }

        .time2 {
            padding-top: 10px;
            text-align: center;
            font-weight: 700;
            font-size: 32px;
            line-height: 38px;
            font-family: 'constantia';
            position: absolute;
            width: 255px;
            height: 52px;
            left: 764px;
            top: 282px;
            background: #FFFFFF;
            border: 3px solid pink;
            border-radius: 35px;
            box-shadow: inset -4px -4px 8px rgba(0, 0, 0, 0.25), inset 4px 4px 8px rgba(0, 0, 0, 0.25);

        }

        .time3 {
            padding-top: 10px;
            text-align: center;
            font-weight: 700;
            font-size: 32px;
            line-height: 38px;
            font-family: 'constantia';
            position: absolute;
            width: 255px;
            height: 52px;
            left: 765px;
            top: 387px;
            background: #FFFFFF;
            border: 3px solid pink;
            border-radius: 35px;
            box-shadow: inset -4px -4px 8px rgba(0, 0, 0, 0.25), inset 4px 4px 8px rgba(0, 0, 0, 0.25);

        }

        .time2:hover {
            color: #FFFFFF;
            background-color: pink;
            cursor: pointer;
        }

        .time3:hover {
            color: #FFFFFF;
            background-color: pink;
            cursor: pointer;
        }

        #time1:hover {
            color: #FFFFFF;
            background-color: pink;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container"></div>
    <div class="frame1">
        <h4>KGF chapter 2</h4>
        <div class="rectangle_1">
            <iframe width="580" height="329" src="https://www.youtube.com/embed/Qah9sSIXJqk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>Movie description:
            Directed by: <br>
            Actor:
        </p>
        <p class="text">Select movie time</p>
        <a href="../login.php"><div id="time1">10:00 am</div></a>
        <a href="../login.php"><div class="time2">2:00 pm</div></a>
        <a href="../login.php"><div class="time3">5:00 pm</div></a>
    </div>
</body>

</html>