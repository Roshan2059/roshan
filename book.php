<?php
    try
    {
        include 'connection.php';

        //Getting data from user
        $contents = file_get_contents('php://input');
        $seat_list = explode(",",$contents);

        $find_booking_sql = "SELECT booking_id FROM booking WHERE show_id = '1' AND user_id = '9'";
        $find_query = mysqli_query($conn,$find_booking_sql);
        $idout = mysqli_num_rows($find_query);
        
        if($find_query)
        {   
            $booking = mysqli_fetch_assoc($find_query); 
            $modifyBookingSQL = "UPDATE booking SET sold='1' WHERE booking_id = '".$booking['booking_id']."'";
            $modifyResult = mysqli_query($conn,$modifyBookingSQL);
            // if($modifyResult)
            // {
            //     echo "Modification done";
            // }

            $delsql = "DELETE from seatbook where booking_id = '$idout'";
            $delresult = mysqli_query($conn,$delsql);
            
        }
        else
        {
            $sql = "INSERT INTO `booking` (`show_id`, `user_id`, `sold`) VALUES ('1', '9', '1');";
            $result = mysqli_query($conn,$sql);

            if($result)
            {
                $getIdSql = "SELECT booking_id FROM booking where user_id ='9' AND show_id='1'";
                $idresult = mysqli_query($conn,$getIdSql);
                $idout = mysqli_num_rows($idresult);
            }
        }

        foreach($seat_list as $seat)
        {
            $listsql = "INSERT INTO `seatbook` (`seat_id`, `booking_id`) VALUES ('$seat', '$idout')";
            $listresult = mysqli_query($conn,$listsql);
        }



        //Returning data to frontend
        $arr = array(
            "message"=>$idout
        );
        print json_encode($arr,true);

        // else{
        //     $arr = array("message"=>"Insertion Error");
        //     print json_encode($arr,true);
        // }
    }
    catch(Exception $e)
    {
        $arr = array(
            "message"=>strval($e)
        );
        print json_encode($arr,true);
    }
    die();
?>