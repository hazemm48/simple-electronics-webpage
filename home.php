<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIM MALL</title>
    <link rel="icon"href="pics/title 1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body id="home">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#home"> <img class="navimg" src="pics/bg 3.png"></a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="#prod">Products</a></li>
            <li><a href="about us.php">About Us</a></li>
            <li><a href="contact us2.php">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION["loggedin"])):?>
            <li id="visii" class="active"><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            <li class="visiname" class="active"><a href="login.html"> welcome <?php echo $_SESSION["username"] ?></a></li>
            <?php else:?>
                <li id="visi" ><a href="Register.html" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li id="visii" ><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <?php endif;?>
            
            
          </ul>
        </div>
      </nav>
<img style="display: block;margin-left: auto;margin-right: auto;width: 30%;margin-bottom: 30px;" src="pics/3922.png" alt="">
<hr>
<p style="text-align: center;font-family:'Roboto';font-weight: bolder;font-size: 50px;">Our Products</p>
<hr>
<div class="wrapper"  id="prod">
    <div class="ibord">
        <p>9V Battery Cap with Male DC Connector</p>
        <img style="width: 90%;height: 70%;" src="pics/h1.jpg" alt="">
        <p class="show">5$</p>
    </div>
    <div class="ibord">
        <p>UT343D Coating Thickness <br> Gauge</p>
        <img style="width: 90%;height: 70%;" src="pics/h2.jpg" alt="">
        <p class="show">1700$</p>
    </div>
    <div class="ibord">
        <p>UT373 Mini <br> Tachometer</p>
        <img style="width: 90%;height: 70%;" src="pics/h3.jpg" alt="">
        <p class="show">250$</p>
    </div>
    <div class="ibord">
        <p>5054 – 3 LED Module <br> Warm 12V</p>
        <img style="width: 90%;height: 70%;" src="pics/h4.jpg" alt="">
        <p class="show">2$</p>
    </div>
    <div class="ibord">
        <p>UT116A SMD <br> Tester</p>
        <img style="width: 90%;height: 70%;" src="pics/h5.jpg" alt="">
        <p class="show">400$</p>
    </div>
    <div class="ibord">
        <p>UT300S Infrared <br> Thermometer</p>
        <img style="width: 90%;height: 70%;" src="pics/h6.jpg" alt="">
        <p class="show">300$</p>
    </div>
    <div class="ibord">
        <p>1.5M 25Pin DB25/25F Male to Female Cable</p>
        <img style="width: 90%;height: 70%;" src="pics/h7.jpg" alt="">
        <p class="show">25$</p>
    </div>
    <div class="ibord">
        <p>CJMCU-MICS-6814 (Air Quality Co, NH3, Nitrogen Oxide Gas Sensor)</p>
        <img style="width: 90%;height: 70%;" src="pics/h8.jpg" alt="">
        <p class="show">965$</p>
    </div>
    <div class="ibord">
        <p>MyoWare Muscle Sensor SEN-13723</p>
        <img style="width: 90%;height: 70%;" src="pics/h9.jpg" alt="">
        <p class="show">1250$</p>
    </div>
    <div class="ibord">
        <p>Transformer 10A 220Vac TO 12-0-12Vac</p>
        <img style="width: 90%;height: 70%;" src="pics/h10.jpg" alt="">
        <p class="show">150$</p>
    </div>
    <div class="ibord">
        <p>Yellow and Blue Color 0.96 inch 128×64 OLED Display Module</p>
        <img style="width: 90%;height: 70%;" src="pics/h11.jpg" alt="">
        <p class="show">110$</p>
    </div>
    <div class="ibord">
        <p>4 Digits 7 Segment Display with 0.36Inch Time Clock Driver</p>
        <img style="width: 90%;height: 70%;" src="pics/h12.jpeg" alt="">
        <p class="show">35$</p>
    </div>
    <div class="ibord">
        <p>DC-12V 400RPM Geared <br> Motor</p>
        <img style="width: 90%;height: 70%;" src="pics/h13.jpg" alt="">
        <p class="show">200$</p>
    </div>
    <div class="ibord">
        <p>V2.0 5V Wireless Quad Band GSM GPRS Module PCB Antenna</p>
        <img style="width: 90%;height: 70%;" src="pics/h14.jpg" alt="">
        <p class="show">300$</p>
    </div>
    <div class="ibord">
        <p>0.10UF 35V Tantalum <br> Capacitor</p>
        <img style="width: 90%;height: 70%;" src="pics/h15.jpg" alt="">
        <p class="show">5$</p>
    </div>
    <div class="ibord">
        <p>(JY60) Male plug Connector + Female plug Connector</p>
        <img style="width: 90%;height: 70%;" src="pics/h16.jpg" alt="">
        <p class="show">25$</p>
    </div>
    <div class="ibord">
        <p>10 Ohm 3W <br> 5%r</p>
        <img style="width: 90%;height: 70%;" src="pics/h17.jpg" alt="">
        <p class="show">1$</p>
    </div>
    <div class="ibord">
        <p>1.2V 4000mAh Panasonic Rechargeable Battery</p>
        <img style="width: 90%;height: 70%;" src="pics/h18.jpg" alt="">
        <p class="show">50$</p>
    </div>
</div>
    </body>
    <footer>
            <hr style="height: 2px;width: 30%;margin-left: auto;margin-right: auto;">
    <h6 style="font-weight: bolder;color:black;text-align: center;">All copyrights reserved &#x000A9; 2021</h6>
        </div>
    </footer>
</html>