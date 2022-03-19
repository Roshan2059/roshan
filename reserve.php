<?php
    try
    {
        include 'connection.php';
        //Getting data from user
        $contents = file_get_contents('php://input');
        $seat_list = explode(",",$contents);
        if(!isset($_SESSION))
        {
            session_start();
        }

        if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true)
        {
            $uid = $_SESSION['userid'];
            $find_booking_sql = "SELECT booking_id FROM booking WHERE show_id = '1' AND user_id = '$uid'";
            $find_query = mysqli_query($conn,$find_booking_sql);
            // $idout = 1;
            if(mysqli_num_rows($find_query)!=0)
            {   
                $booking = mysqli_fetch_assoc($find_query); 
                $idout = $booking['booking_id'];
                $modifyBookingSQL = "UPDATE booking SET sold='0' WHERE booking_id = '".$booking['booking_id']."'";
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
                $sql = "INSERT INTO `booking` (`show_id`, `user_id`, `sold`) VALUES ('1', '$uid', '0');";
                $result = mysqli_query($conn,$sql);

               
                $getIdSql = "SELECT booking_id FROM booking where user_id ='$uid' AND show_id='1'";
                $idresult = mysqli_query($conn,$getIdSql);
                $idresultrow = mysqli_fetch_assoc($idresult);
                $idout = $idresultrow['booking_id'];
                // $idout = 1;
            }

            foreach($seat_list as $seat)
            {
                $listsql = "INSERT INTO `seatbook` (`seat_id`, `booking_id`) VALUES ('$seat', '$idout')";
                $listresult = mysqli_query($conn,$listsql);
            }



            //Returning data to frontend
            $arr = array(
                "message"=>$_SESSION['userid']
            );
            print json_encode($arr,true);

            // else{
            //     $arr = array("message"=>"Insertion Error");
            //     print json_encode($arr,true);
            // }
        }
        else
        {
            $arr = array(
                "message"=>'Not Logged In'
            );
            print json_encode($arr,true);
        }  
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