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
    <title>SUPER SURFFER Shop</title>
    <link rel="stylesheet" type="text/css" href="css/bg.css">
    <link href='https://fonts.googleapis.com/css?family=Bai Jamjuree' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="images/icon3.png">
</head>
<style>
    .img1 {
        position: relative;
        left: 30px;
        bottom: 40px;
        text-align: center;
        float: left;
        width: 200px;    
    }
    .type1 {
        position: relative;
        bottom: 15px;
        padding: 0px 0px 50px 0px;
        text-align: center;
        font-family: 'Candal';
        font-size: 15px;
    }
    .type2{
        text-align: center;
        font-family: 'Candal';
        font-size: 15px;
    }

    a:link,
    a:visited {
      
       
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    a:hover,
    a:active {
        background-color: #ffffff;
        opacity: 0.2;
    }



    * {box-sizing: border-box;}

.img-comp-container {
  position: relative;
  height: 200px; 
}

.img-comp-img {
  position: absolute;
  width: auto;
  height: auto;
  overflow: hidden;
}

.img-comp-img img {
 
  vertical-align: middle;
}

.img-comp-slider {
  position: absolute;
  z-index: 9;
  cursor: ew-resize;
 
  width: 40px;
  height: 40px;
  background-color: #ffffff;
  opacity: 0.5 ;
  border-radius: 50%;
}
</style>

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li class="active"><a href="shop.php">SHOP</a></li>
            <li><a href="location.php">LOCATION</a></li>
            <li><a href="other.php">OTHER</a></li>

        </ul>
        <div class="navbar-header ">
            <img src="images/logo3.png" class="img-rounded " height="50">
        </div>

        <a class="nav-link "style="position:relative;left:750px;top:5px;color:gray;font-family: 'Bai Jamjuree';font-size:13px"><b>Welcome<b>(<?php echo $_SESSION['username'];?>)</a> 
        <a href="logout.php"><button type="button" class="btn btn-danger pp2" > Log Out</button></a>   
    </div>
</nav>

<body>
    <div class="img-comp-container jav">
        <div class="img-comp-img">
          <img src="images/topshop.png" width="1521" height="300">
        </div>
        <div class="img-comp-img img-comp-overlay">
          <img src="images/topshop2.png" width="1521" height="300">
        </div>
      </div>

    <p class="shop">SURF SKATE 'SHOP</p>

    <div class="container">
        <div class="row">
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s1.png">
                        <img src="images/9.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW x Christenson 34"</div><br>
                        <div class="type1">16,500 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s2.png">
                        <img src="images/10.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW Coxos 33.5"</div><br>
                        <div class="type1">13,500 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s3.png">
                        <img src="images/11.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW Huntington 30"</div><br>
                        <div class="type1">11,500 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s4.png">
                        <img src="images/12.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW Aranburu 32.5"</div><br>
                        <div class="type1">11,500 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s5.png">
                        <img src="images/5.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW Snappers 32.5"</div><br>
                        <div class="type1">13,300 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s6.png">
                        <img src="images/6.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW Mundaka 32"</div><br>
                        <div class="type1">13,000 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s7.png">
                        <img src="images/7.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW x Pukas RVSH 33"</div><br>
                        <div class="type1">18,000 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s8.png">
                        <img src="images/8.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW J-Bay 33"</div><br>
                        <div class="type1">13,500 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s9.png">
                        <img src="images/13.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW Hossegar 29"</div><br>
                        <div class="type1">12,500 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s10.png">
                        <img src="images/14.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW Chiba 30"</div><br>
                        <div class="type1">14,500 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s11.png">
                        <img src="images/15.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW Pipe 32"</div><br>
                        <div class="type1">20,000 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
            <div class="column col-sm-3">
                <div class="img1">
                    <a target="_blank" href="images/s12.png">
                        <img src="images/16.png" class="board">
                    </a>
                    <p>
                    <h3>
                        <div class="type2">YOW Byron Bay 38"</div><br>
                        <div class="type1">25,000 Bath</div>
                    </h3>
                    </p>
                </div>
            </div>
        </div>
</div>
<div>
    <button type="button" class="btn btn-danger buy">BUY NOW</button>
</div>


    <div class="text-center text-dark p-3 tt" style="background-color: #f3f2b1;">
        <p><a href="https://www.facebook.com/saranyu.max/">
            <image src="images/facebook.png" class="footer1"></a>
        <a href="https://www.instagram.com/saranyuuuu/?hl=th">
            <image src="images/ig.png" class="footer2"></a></p>
        
        <h3 class="cl">© SUPER SURFFER SHOP</h3>
          
         </div>

         <script>
         function initComparisons() {
            var x, i;
           
            x = document.getElementsByClassName("img-comp-overlay");
            for (i = 0; i < x.length; i++) {
        
              compareImages(x[i]);
            }
            function compareImages(img) {
              var slider, img, clicked = 0, w, h;
              
              w = img.offsetWidth;
              h = img.offsetHeight;
             
              img.style.width = (w / 2) + "px";
              
              slider = document.createElement("DIV");
              slider.setAttribute("class", "img-comp-slider");
              
              img.parentElement.insertBefore(slider, img);
             
              slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
              slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
              
              slider.addEventListener("mousedown", slideReady);
              
              window.addEventListener("mouseup", slideFinish);
              
              slider.addEventListener("touchstart", slideReady);
               
              window.addEventListener("touchend", slideFinish);
              function slideReady(e) {
               
                e.preventDefault();
              
                clicked = 1;
             
                window.addEventListener("mousemove", slideMove);
                window.addEventListener("touchmove", slideMove);
              }
              function slideFinish() {
              
                clicked = 0;
              }
              function slideMove(e) {
                var pos;
                
                if (clicked == 0) return false;
                
                pos = getCursorPos(e)
              
                if (pos < 0) pos = 0;
                if (pos > w) pos = w;
               
                slide(pos);
              }
              function getCursorPos(e) {
                var a, x = 0;
                e = e || window.event;
                
                a = img.getBoundingClientRect();
                
                x = e.pageX - a.left;
               
                x = x - window.pageXOffset;
                return x;
              }
              function slide(x) {
                
                img.style.width = x + "px";
                
                slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
              }
            }
          }
          initComparisons();
</script>
</body>



</html>