<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>checkout page</title>
  <style>
    body{
      background-color: whitesmoke;
    }
    .frame {
      width: 100%;
      position: relative;
      height: 600px;
    }

    #text1 {
      position: absolute;
      width: 625px;
      height: 55px;
      top: 20px;
      left: 50%;
      transform: translate(-50%,-50%);
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-size: 48px;
      line-height: 56px;
      text-align: center;
      color: #1FAC08;

    }

    #text2 {
      position: absolute;
      width: 531px;
      height: 210px;
      left: 50%;
      top: 280px;
      transform: translate(-50%,-50%);
      font-family: 'Roboto';
      font-style: normal;
      font-size: 36px;
      line-height: 42px;
      color: #000000;
      

    }

    button {
      position: absolute;
      width: 250px;
      height: 62px;
      left: 30px;
      top: 440px;
      border-radius: 50px;
      font-size: 25px;
      font-weight: bold;
      border: 3px solid pink;
      left: 39%;
      transform: translate(-50%,-50%);

    }

    button:hover {
      background: linear-gradient(180deg, #FC0202 0%, rgba(252, 2, 2, 0) 100%);
      border: 3px solid #000000;
      border-radius: 40px;
    }

    #text3 {
      position: absolute;
      width: 795px;
      height: 92px;
      left: 30px;
      top: 500px;
      font-family: 'Roboto';
      font-style: normal;
      font-size: 25px;
      line-height: 42px;
      color: #000000;
      left: 60%;
      transform: translate(-50%,-50%);

    }

    #text4 {
      position: absolute;
      left: 30px;
      top: 100px;
      font-family: georgia;
      left: 50%;
      transform: translate(-50%,-50%);

    }
  </style>
</head>

<body>
  <div class="frame">
    <p id="text1">Seats Reserved Successfully <br>
    </p>
    <p id="text4">Don't forget to enjoy the movie ;) ;)</p>
    <p id="text2">Reservation Summary <br><br>
      Reserve seats: <br>
      Transaction amount:</p>
    <br><br>
    <div id="btn"><button>Print ticket</button></div>
    <br><br>
    <p id="text3">Note: Kindly print the ticket and bring that to the cinema hall premises.</p>
  </div>

</body>

</html>