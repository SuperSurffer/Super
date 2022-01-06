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
  <title>SUPER SURFFER Location</title>
  <link rel="stylesheet" type="text/css" href="css/bg.css">
  <link href='https://fonts.googleapis.com/css?family=Bai Jamjuree' rel='stylesheet'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="images/icon3.png">
</head>
<style>
 a:link,
    a:visited {
      
       
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    a:hover,
    a:active {
        background-color: #f3f2b1;
        opacity: 0.2;
    }


</style>
<nav class="navbar navbar-default">
    <div class="container-fluid">
     
      <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="shop.php">SHOP</a></li>
        <li class="active"><a href="location.php">LOCATION</a></li>
        <li><a href="other.php">OTHER</a></li>
        
  
      </ul>
     <div class="navbar-header ">
          <img src="images/logo3.png" class="img-rounded "  height="50" >
      </div>
   
     
    <a class="nav-link "style="position:relative;left:750px;top:5px;color:gray;font-family: 'Bai Jamjuree';font-size:13px"><b>Welcome<b>(<?php echo $_SESSION['username'];?>)</a> 
    <a href="logout.php"><button type="button" class="btn btn-danger pp2" > Log Out</button></a>   
    </div>
  </nav>
<body>

    <p class="shop2">STORE ADDRESS</p>
    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30963.55477876109!2d100.7353856!3d14.050918399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d83e49a363707%3A0x957376618d39e37d!2zU1VQRVIgU1VSRkZFUiDguKvguKHguLnguYjguJrguYnguLLguJnguJ7guKTguIHguKnguLIgMTE2LCA4MS8xNjAg4LiV4Liz4Lia4LilIOC4hOC4peC4reC4h-C4q-C4gSDguK3guLPguYDguKDguK3guITguKXguK3guIfguKvguKXguKfguIcg4Lib4LiX4Li44Lih4LiY4Liy4LiZ4Li1IDEyMTIw!5e0!3m2!1sth!2sth!4v1617819327450!5m2!1sth!2sth"
width="600"  height="450" style="border:0; position: relative; left:430px; margin: 30px;" allowfullscreen="" loading="lazy" ></iframe>


    <div class="text-center text-dark p-3 tt" style="background-color: #f3f2b1;">
        <p><a href="https://www.facebook.com/saranyu.max/">
            <image src="images/facebook.png" style="width: 25px;"></a>
        <a href="https://www.instagram.com/saranyuuuu/?hl=th">
            <image src="images/ig.png" style="width: 25px";></a></p>
        
        <h3 class="cl">© SUPER SURFFER SHOP</h3>
          
         </div>
    </body>
    </html>