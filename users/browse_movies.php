<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .topbox{
      background-color: antiquewhite;
      position: absolute;
      top: 10px;
      left:50%;
      transform: translate(-50%,-30%);
      padding: 20px;
      font-size: 2em;
      font-weight: bolder;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .container{
      padding: 10px;
      position: relative;
      top: 80px;
      display: grid;
      grid-template-columns: repeat( auto-fill, minmax(20vw,1fr));
      grid-gap: 20px;
      grid-auto-rows: minmax(100px,auto);
      grid-auto-columns: minmax(50px,auto);
    }
    .boxes{
      background: url(kgf_poster.jpg);      height: 20vw;
    }
  </style>
</head>
<body>
  <div class="topbox">Now showing</div>
  <div class="container">
    <a href="codeWithroshan.html" target="_blank"><div class="boxes"></div></a>
    <a href="codeWithroshan.html" target="_blank"><div class="boxes"></div></a>
    <a href="codeWithroshan.html" target="_blank"><div class="boxes"></div></a>
    <a href="codeWithroshan.html" target="_blank"><div class="boxes"></div></a>
    <a href="codeWithroshan.html" target="_blank"><div class="boxes"></div></a>
    <a href="codeWithroshan.html" target="_blank"><div class="boxes"></div></a>
    <a href="codeWithroshan.html" target="_blank"><div class="boxes"></div></a>
    <a href="codeWithroshan.html" target="_blank"><div class="boxes"></div></a>
  </div>
</body>
</html>