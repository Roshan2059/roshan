<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // include 'db_queries.php';

    function debug($arre)
    {
        echo "<pre>";
        print_r($arre);
        echo "</pre>";
    }

    function letterProvider($n)
    {
        // letters = 'abcdefghijklmnopqrstuvwxyz';
        // each = letters.split('');
        // len = each.length;
        // if(n<len && n>=0)
        // {
        //     return each[n].toUpperCase();
        // }
        // return 0;

        $first = 'A';
        for ($i = 0; $i < 26; $i++) {
            if ($n == $i) {
                return $first;
            }
            $first++;
        }
        return 0;
    }

    function create_data($size)
    {
        $seats = array();

        function statusProvider()
        {
            $state = ["available", "reserved", "booked"];
            $val = rand(0, 2);
            return $state[$val];
        }

        for ($i = 0; $i < $size; $i++) {
            $col = $i % 15;
            $row = floor($i / 15);

            array_push($seats, [
                "seat_id" => letterProvider($row) . ($col + 1),
                "status" => statusProvider()
            ]);
        }
        return $seats;
    }
    $dispaly_data = create_data(120);
    //  echo letterProvider(-5);
    // create_data(10);



    $statusMap = [
        "available" => "seats available",
        "reserved" => "seats reserved",
        "booked" => "seats booked",
        "selected" => "seats booked"
    ];

    ?>
    <!-- // <div class="first-container">
    //         <span class="big">MUSK Theater</span>
    //          <span class="small">online ticket reservation</span>   
    // </div> -->
    <?php require 'partials/_nav.php'; ?>
    <div id="outer1">
        <div id="seat-container">
            <div class="box" id="zero-box">
                <?php
                foreach ($dispaly_data as $index => $indi) {
                    $bar = floor(($index % 15));
                    if ($bar == 0) {
                        // echo "<div class='".$statusMap[$indi['status']]."' data-status='".$indi['status']."'>"
                        // .$indi['seat_id']
                        // ."</div>";
                        echo "<div class='seats' id='seatlabel'>" . letterProvider(floor($index / 15)) . "</div>";
                    }
                }
                ?>
            </div>
            <div id="main-boxes">
                <div>
                    <h4 id="screen">Screen Here</h4>
                    <div class="box" id="first-box">
                        <?php
                        foreach ($dispaly_data as $index => $indi) {
                            $bar = floor(($index % 15) / 5);
                            if ($bar == 0) {
                                echo "<div class='" . $statusMap[$indi['status']] . "' data-status='" . $indi['status'] . "'>"
                                    . $indi['seat_id']
                                    . "</div>";
                            }
                        }
                        ?>
                    </div>
                    <div class="box" id="second-box">
                        <?php
                        foreach ($dispaly_data as $index => $indi) {
                            $bar = floor(($index % 15) / 5);
                            if ($bar == 1) {
                                echo "<div class='" . $statusMap[$indi['status']] . "' data-status='" . $indi['status'] . "'>"
                                    . $indi['seat_id']
                                    . "</div>";
                            }
                        }
                        ?>
                    </div>
                    <div class="box" id="third-box">
                        <?php
                        foreach ($dispaly_data as $index => $indi) {
                            $bar = floor(($index % 15) / 5);
                            if ($bar == 2) {
                                echo "<div class='" . $statusMap[$indi['status']] . "' data-status='" . $indi['status'] . "'>"
                                    . $indi['seat_id']
                                    . "</div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="buy-ticket">
            <div id="bill">
                <table>
                    <caption>Your Bill</caption>
                    <tr>
                        <th>Selected Seats</th>
                        <th>Price</th>
                    </tr>
                    <?php

                    ?>
                    <tr>
                        <th>Total</th>
                        <th>Rs. 0</th>
                    </tr>
                </table>
            </div>

            <div id="buy-button" class="bnrb">
            <button>Buy Ticket</button>
            </div>
            <div id="rsrv-button" class="bnrb">
                <button>Reserve Ticket</button>
            </div>
    
        </div>

        <script src="script.js"></script>
</body>

</html>