<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #424a99;
            color: wheat;
        }

        .top {
            width: 100vw;
            height: 10vh;
            font-size: 1.5em;
            font-family: sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .movies {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            width: 100vw;
            height: 70vh;
        }

        .imb {
            border-radius: 10px;
            width: 18vw;
            height: 60vh;
            border: 1px solid #2e3575;
            background-image: url(ae.jpg);
            background-size: cover;
        }

        .note{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            width: 100%;
            font-size: 1.5em;
            font-family: serif;
        }

    </style>
</head>

<body>

    <div class="top">
        <h1>Now showing</h1>
    </div>

    <div class="movies">
        <div class="imb m1">
            
        </div>
        <div class="imb m2">

        </div>
        <div class="imb m3">

        </div>
        <div class="imb m4">

        </div>
    </div>

    <div class="note">
        Choose the movie you want to see.
    </div>

</body>

</html>