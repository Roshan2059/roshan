<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
// echo $_SESSION['userid'];
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


    function statusCalculator($seat, $reserved = [], $booked = [], $reservedMine = [], $bookedMine = [])
    {
        $state = ["available", "reserved", "booked", "reservedmine", "bookedmine"];
        if (in_array($seat, $reserved)) {
            return $state[1];
        }
        if (in_array($seat, $booked)) {
            return $state[2];
        }
        if (in_array($seat, $reservedMine)) {
            return $state[3];
        }
        if (in_array($seat, $bookedMine)) {
            return $state[4];
        }

        return $state[0];
    }


    function clean_data($seats, $reserved = [], $booked = [], $reservedMine = [], $bookedMine = [])
    {


        $out = array();
        foreach ($seats as $seat) {
            array_push($out, [
                "seat_id" => $seat,
                "status" => statusCalculator($seat, $reserved, $booked, $reservedMine, $bookedMine)
            ]);
        }
        return $out;
    }


    //Fetching seats data from database
    include 'connection.php';
    $sqlSeats = "SELECT *,SUBSTRING(seat_id, 1,1) AS txt,SUBSTRING(seat_id, 2) AS num FROM `seat` WHERE 1 ORDER BY `txt` ASC, CAST(`num` as int) ASC;";
    $seatIn = mysqli_query($conn, $sqlSeats);


    $sqlBooking = "SELECT * FROM booking WHERE show_id = '1'";
    $bookingIn = mysqli_query($conn, $sqlBooking);

    $allSeats = array();
    while ($row = mysqli_fetch_assoc($seatIn)) {
        // debug($row);
        // debug(clean_data($row));
        // debug($row);

        array_push($allSeats, $row['seat_id']);
    }

    $booking = array();
    $bookedSeats = array();
    $reservedSeats = array();
    $bookedSeatsMine = array();
    $reservedSeatsMine = array();

    while ($bookingRow = mysqli_fetch_assoc($bookingIn)) {
        // debug($bookingRow);
        // echo "found booking\n";
        $bookingId = $bookingRow['booking_id'];

        $seatBookSQL = "SELECT * FROM seatbook WHERE booking_id = '$bookingId'";
        $seatBookIn = mysqli_query($conn, $seatBookSQL);

        while ($seatBookRow = mysqli_fetch_assoc($seatBookIn)) {
            // echo "found row\n";
            $theSeat = $seatBookRow['seat_id'];
            if ($bookingRow['sold'] == 1) {
                if ($bookingRow['user_id'] == $_SESSION['userid']) {
                    array_push($bookedSeatsMine, $theSeat);
                } else {
                    array_push($bookedSeats, $theSeat);
                }
            } else {
                if ($bookingRow['user_id'] == $_SESSION['userid']) {
                    array_push($reservedSeatsMine, $theSeat);
                } else {
                    array_push($reservedSeats, $theSeat);
                }
            }
        }
    }

    // debug(clean_data($allSeats,$bookedSeats,$reservedSeats));

    $dispaly_data = clean_data($allSeats, $reservedSeats, $bookedSeats, $reservedSeatsMine, $bookedSeatsMine);
    //  echo letterProvider(-5);
    // create_data(10);



    $statusMap = [
        "available" => "seats available",
        "reserved" => "seats reserved",
        "booked" => "seats booked",
        "reservedmine" => "seats reservedmine",
        "bookedmine" => "seats bookedmine",
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
                <div id="main">
                    <h4 id="screen">Screen Here</h4>
                    <div class="box" id="first-box">
                        <?php
                        foreach ($dispaly_data as $index => $indi) {


                            // To Run only once to load seat data to the database
                            // include 'connection.php';
                            // $listsql = "INSERT INTO `seat` (`seat_id`) VALUES ('{$indi['seat_id']}')";
                            // $listresult = mysqli_query($conn,$listsql);

                            $hereid = substr($indi['seat_id'], 1);
                            // echo $hereid;


                            $bar = ($hereid % 16) / 5;
                            // echo $bar;
                            if ($bar <= 1) {
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
                            $hereid = substr($indi['seat_id'], 1);
                            $bar = ($hereid % 16) / 5;
                            if ($bar > 1 && $bar <= 2) {
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
                            $hereid = substr($indi['seat_id'], 1);
                            $bar = ($hereid % 16) / 5;
                            if ($bar > 2 && $bar <= 3) {
                                echo "<div class='" . $statusMap[$indi['status']] . "' data-status='" . $indi['status'] . "'>"
                                    . $indi['seat_id']
                                    . "</div>";
                            }
                        }
                        ?>
                    </div>
                    
                    <div id="status-hint">
                    <h3 class="hint">Available</h3>
                    <h3 class="hint">Sold</h3>
                    <h3 class="hint">Reserved</h3>
                    <h3 class="hint">Selected</h3>
                    </div>
                    
                </div>
            </div>
        </div>
        <div id="buy-ticket">
            <div id="bill">
                <h2>Your Bill</h2>
                <table>
                    <tr>
                        <th>Selected Seats</th>
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