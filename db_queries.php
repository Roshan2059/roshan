  <?php
  include 'connection.php';

  // for table named booking

  //  $insert_query = "INSERT INTO booking values ('1' , '1' , '1' , '1' )";
  //  $insert_execute = mysqli_query($conn,$insert_query);

  //  if($insert_execute){
  //      echo "<h3>data inserted</h3>";
  //  }                                                                                                  
  //  else{
  //      echo "<h3>data not inserted</h3>";
  //  }

  //  $display_query = "SELECT * FROM booking";
  //     $display_execute = mysqli_query($conn,$display_query);
  //     $display_result = mysqli_fetch_assoc($display_execute);
  //     echo $display_result['booking_id'];
  //     echo $display_result['show_id'];
  //     echo $display_result['user_id'];
  //     echo $display_result['sold'];

  //  $update_query = "UPDATE booking SET movie_id = '2' WHERE booking_id = '1'";
  //     $update_execute = mysqli_query($conn,$update_query);

  //     $delete_query = "DELETE FROM booking WHERE booking_id = '1'";
  //     $delete_execute = mysqli_query($conn,$delete_query);


  // for table named seat

  // $insert_query = "INSERT INTO seat values ('1','1','1')";
  // $insert_execute = mysqli_query($conn,$insert_query);

  //     $display_query = "SELECT * FROM seat";
  //     $display_execute = mysqli_query($conn,$display_query);
  //     $display_result = mysqli_fetch_assoc($display_execute);
  //     echo $display_result['seat_id'];
  //     echo $display_result['row'];
  //     echo $display_result['columns'];


  //     $update_query = "UPDATE seat SET row = '2' WHERE seat_id = '1'";
  //     $update_execute = mysqli_query($conn,$update_query);

  //     $delete_query = "DELETE FROM seat WHERE seat_id = '1'";
  //     $delete_execute = mysqli_query($conn,$delete_query);

  //     // for table named seatbook

  $insert_query = "INSERT INTO seatbook values ('1','1','1')";
  $insert_execute = mysqli_query($conn, $insert_query);

  //     $display_query = "SELECT * FROM seatbook";
  //     $display_execute = mysqli_query($conn,$display_query);
  //     $display_result = mysqli_fetch_assoc($display_execute);
  //     echo $display_result['id'];
  //     echo $display_result['seat_id'];
  //     echo $display_result['booking_id'];

  //     $update_query = "UPDATE seatbook SET seat_id = '2' WHERE id = '1'";
  //     $update_execute = mysqli_query($conn,$update_query);

  //     $delete_query = "DELETE FROM seatbook WHERE id = '1'";
  //     $delete_execute = mysqli_query($conn,$delete_query);

  //     // for table named show

  //     $insert_query = "INSERT INTO show values ('1','2022-02-15','05:00:00','pradeep')";
  //     $insert_execute = mysqli_query($conn,$insert_query);

  //     if($insert_execute){
  //         echo"insert";
  //     }
  //     else{   
  //         echo"record no";
  //     }

  //     $display_query = "SELECT * FROM show";
  //     $display_execute = mysqli_query($conn,$display_query);
  //     $display_result = mysqli_fetch_assoc($display_execute);
  //     echo $display_result['show_id'];
  //     echo $display_result['date'];
  //     echo $display_result['time'];
  //     echo $display_result['movie_id'];

  //     $update_query = "UPDATE show SET movie_id = '2' WHERE show_id = '1'";
  //     $update_execute = mysqli_query($conn,$update_query);

  //     $delete_query = "DELETE FROM show WHERE show_id = '1'";
  //     $delete_execute = mysqli_query($conn,$delete_query);

  //     // for table named user

  //     $insert_query = "INSERT INTO user values('2','Jin','Kal','ji2056','jib234','ji6@gmail.com','9807823','Gann')";
  //     $insert_execute = mysqli_query($conn,$insert_query);

  //     if($insert_execute){
  //         echo"<h3>record inserted</h3>";
  //     }
  //     else{
  //         echo"<h3>record not inserted</h3>";
  //     }

  //     $display_query = "SELECT * FROM user";
  //     $display_execute = mysqli_query($conn,$display_query);
  //     $display_result = mysqli_fetch_assoc($display_execute);
  //     echo $display_result['user_id'];
  //     echo $display_result['first_name'];
  //     echo $display_result['last_name'];
  //     echo $display_result['username'];
  //     echo $display_result['password'];
  //     echo $display_result['email'];
  //     echo $display_result['phone_number'];
  //     echo $display_result['address'];

  //     $update_query = "UPDATE user SET first_name = '2' WHERE user_id = '1'";
  //     $update_execute = mysqli_query($conn,$update_query);

  //     $delete_query = "DELETE FROM user WHERE user_id = '1'";
  //     $delete_execute = mysqli_query($conn,$delete_query);

  ?>