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
    <link rel="stylesheet" href="users.css">
</head>

<body>
    <?php include '../partials/navnside.php'; 
    include '../connection.php';
    $displayq = "select * from user";
    $displayexe = mysqli_query($conn, $displayq);
    $counter = 1;
    if ($displayexe) {
        echo ("<table>");
        echo ("<tr>");
        echo ("<th>S.N.</th>");
        echo ("<th>Full Name</th>");
        echo ("<th>Username</th>");
        echo ("<th>Address</th>");
        echo ("<th>Phone no.</th>");
        echo ("</tr>");
        while ($row = mysqli_fetch_assoc($displayexe)) {
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $uname = $row['username'];
            $address = $row['address'];
            $phone = $row['phone_number'];

            echo ("<tr>");
            echo ("<td>$counter</td>");
            echo ("<td>$fname $lname</td>");
            echo ("<td>$uname</td>");
            echo ("<td>$address</td>");
            echo ("<td>$phone</td>");
            echo ("</tr>");
            $counter++;
        }
        echo ("</table>");
    }
    ?>
</body>

</html>