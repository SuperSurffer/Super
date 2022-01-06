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
  <title>SUPER SURFFER Other</title>
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
      <li><a href="index.php">HOME</a></li>
      <li><a href="shop.php">SHOP</a></li>
      <li><a href="location.php">LOCATION</a></li>
      <li class="active"><a href="other.php">OTHER</a></li>

    </ul>
   <div class="navbar-header ">
        <img src="images/logo3.png" class="img-rounded "  height="50" >
    </div>
 
   
    <a class="nav-link "style="position:relative;left:750px;top:5px;color:gray;font-family: 'Bai Jamjuree';font-size:13px"><b>Welcome<b>(<?php echo $_SESSION['username'];?>)</a> 
    <a href="logout.php"><button type="button" class="btn btn-danger pp2" > Log Out</button></a>  
  </div>
</nav>


<p class="shop2">YOUTUBE</p>

<iframe width="600"  height="450" style="border:0; position: relative; left:430px; margin: 30px;" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  
  <div class="text-center text-dark p-3 tt" style="background-color: #f3f2b1;">
    <p><a href="https://www.facebook.com/saranyu.max/">
        <image src="images/facebook.png" style="width: 25px;"></a>
    <a href="https://www.instagram.com/saranyuuuu/?hl=th">
        <image src="images/ig.png" style="width: 25px";></a></p>
    
    <h3 class="cl">© SUPER SURFFER SHOP</h3>
      
     </div>
 
</body>

</html>
