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


    function statusCalculator($seat,$reserved=[],$booked=[])
        {
            $state = ["available", "reserved", "booked"];
            if(in_array($seat,$reserved))
            {
                return $state[1];
            }
            if(in_array($seat,$booked))
            {
                return $state[2];
            }
            return $state[0];
        }


    function clean_data($seats, $reserved=[], $booked=[])
    {


        $out = array();
        foreach($seats as $seat)
        {
            array_push($out,[
                "seat_id" => $seat,
                "status" => statusCalculator($seat,$reserved,$booked)
            ]);
        }
        return $out;
    }


    //Fetching seats data from database
    include 'connection.php';
    $sqlSeats = "SELECT * FROM seat";
    $seatIn = mysqli_query($conn,$sqlSeats);


    $sqlBooking = "SELECT * FROM booking WHERE show_id = '1' AND user_id = '9'";
    $bookingIn = mysqli_query($conn,$sqlBooking);

    $allSeats = array();
    while($row = mysqli_fetch_assoc($seatIn))
    {
        // debug($row);
        // debug(clean_data($row));
        // debug($row);

        array_push($allSeats,$row['seat_id']);
    }

    $booking = array();
    $bookedSeats = array();
    $reservedSeats = array();
    while($bookingRow = mysqli_fetch_assoc($bookingIn))
    {
        // debug($bookingRow);
        $bookingId = $bookingRow['booking_id'];

        $seatBookSQL = "SELECT * FROM seatbook WHERE booking_id = '$bookingId'";
        $seatBookIn = mysqli_query($conn,$seatBookSQL);

        while($seatBookRow = mysqli_fetch_assoc($seatBookIn))
        {
            $theSeat = $seatBookRow['seat_id'];
            if ($bookingRow['sold']==1)
            {
                array_push($bookedSeats,$theSeat);
            }
            else
            {
                array_push($reservedSeats, $theSeat);
            }
        }
    }

    // debug(clean_data($allSeats,$bookedSeats,$reservedSeats));

    $dispaly_data = clean_data($allSeats,$reservedSeats,$bookedSeats);
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


                             // To Run only once to load seat data to the database
                            // include 'connection.php';
                            // $listsql = "INSERT INTO `seat` (`seat_id`) VALUES ('{$indi['seat_id']}')";
                            // $listresult = mysqli_query($conn,$listsql);

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
                <h2>Your Bill</h2>
                <table>
                    <tr>
                        <th >Selected Seats</th>
                        <th width="80px">Quantity</th>
                        <th>Price(per seat)</th>
                    </tr>

                    <tr>
                        <td style="text-align:left;" id="seats_id_info">...</td>
                        <td>X <span id="seats_quantity">0</span></td>
                        <td>Rs.100</td>
                    </tr>
                    <tr>
                        <th colspan="2">Total</th>
                        <th id="total_amount">Rs. 0</th>
                    </tr>
                </table>
            </div>

            <div id="purchase">
                <button id="buy-button" class="bnrb">Buy Ticket</button>
                <button id="rsrv-button" class="bnrb">Reserve Ticket</button>
            </div>
    
        </div>

        <script src="script.js"></script>
</body>

</html>