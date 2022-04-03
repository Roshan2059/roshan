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
        }
        body {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        form {
            width: 30vw;
            height: 90vh;
            padding: 20px;
            margin-right: auto;
            margin-left: auto;
            position: relative;
        }
        textarea {
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        label {
            font-size: 20px;
        }
        input {
            padding: 0.5em;
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        a {
            text-decoration: none;
            padding: 8px;
            background-color: blue;
            color: white;
            border-radius: 5px;
            position: absolute;
            left: 15vw;
        }
        a:hover {
            color: white;
            background-color: springgreen;
        }
    </style>
</head>

<body>
<!-- <?php include '../partials/navnside.php'; ?> -->
    <form action="">
        <h1>Add Movie</h1>
        <label for="">Movie name:</label><br>
        <input type="text" name="" id=""><br>
        <label for="">Description:</label><br>
        <textarea name="" id="" cols="40" rows="10"></textarea><br>
        <label for="">Image:</label><br>
        <input type="file" name="" id="">
        <a href="">confirm</a>
    </form>
</body>

</html>