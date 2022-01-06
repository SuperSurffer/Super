<?php
session_start();
if (!isset($_SESSION['loggedin'])) { 
	header('Location:index.html'); 
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SUPER SURFFER</title>
  <link rel="stylesheet" type="text/css" href="css/bg.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Bai Jamjuree' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="images/icon3.png">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">HOME</a></li>
      <li><a href="shop.php">SHOP</a></li>
      <li><a href="location.php">LOCATION</a></li>
      <li><a href="other.php">OTHER</a></li>

    </ul>
   <div class="navbar-header ">
        <img src="images/logo3.png" class="img-rounded "  height="50" >
    </div>

   
    <a class="nav-link "style="position:relative;left:750px;top:5px;color:gray;font-family: 'Bai Jamjuree';font-size:13px"><b>Welcome<b>(<?php echo $_SESSION['username'];?>)</a> 
    
    
    <a href="logout.php"><button type="button" class="btn btn-danger pp2" > Log Out</button></a>  
  </div>
</nav>
<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
     
        margin: 0px;
    }
    </style>
  </head>
  <body>
  
  <div class="ma"style="margin: -20px;">
    
    <div id="myCarousel" class="carousel slide ma" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active ">
          <img src="images/bg.png" >
        </div>
  
        <div class="item">
          <img src="images/bg2.png">
        </div>
      
        <div class="item">
            <img src="images/bg3.png">
          </div>
      </div>
  
      
      <a href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
     </a>
      
    </div>
  </div>
  
  <div class="text-center text-dark p-3 tt" style="background-color: #f3f2b1;">
    <p><a href="https://www.facebook.com/saranyu.max/">
        <image src="images/facebook.png" style="width: 25px;"></a>
    <a href="https://www.instagram.com/saranyuuuu/?hl=th">
        <image src="images/ig.png" style="width: 25px";></a></p>
    
    <h3 class="cl">© SUPER SURFFER SHOP</h3>
      
     </div>
 
</body>

</html>
