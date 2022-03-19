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
        *{
            margin: 0;
            padding: 0;
        }
        form{  
            width: 30vw;
            height: 90vh;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
        }
        h1{
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 5vh;
        }
        label{
            margin-top: 5vh;
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        input{
            padding: 0.5em;
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            margin-bottom: 5vh;
        }
        a{
            text-decoration: none;
            padding: 8px;
            background-color: blue;
            color: white;
            border-radius: 5px;
            text-align: center;
        }
        a:hover{
            color: white;
            background-color: springgreen;
        }
    </style>
</head>
<body>
<!-- <?php include '../partials/navnside.php'; ?> -->
        <form action="">
            <h1>Add Show</h1>
            <label for="">Movie name:</label><br>
            <input type="text" name="" id=""><br>
            <label for="">Date:</label><br>
            <input type="date" name="" id=""><br>
            <label for="">Time:</label><br>
            <input type="time" name="" id=""> <br>
            <button><a href="">confirm</a></button>    
        </form>
</body>
</html>