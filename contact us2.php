<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="icon"href="pics/title 1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body id="home">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="home.php"> <img class="navimg" src="pics/bg 3.png"></a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="home.php#prod">Products</a></li>
            <li><a href="about us.php">About Us</a></li>
            <li class="active"><a href="contact us2.php">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION["loggedin"])):?>
            <li id="visii" class="active"><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            <li class="visiname" class="active"><a href="login.html"> welcome <?php echo $_SESSION["username"] ?></a></li>
            <?php else:?>
                <li><a href="Register.html" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <?php endif;?>
          </ul>
        </div>
      </nav>
<p style="font-size:200px;font-family: 'Roboto';font-weight: bolder;text-align: center;margin: 60px;">Contact Us</p>
<hr>
<div class="conmar">
    <div>
<img src="pics/contact.jpg">
    </div>
    
    <div>
      <hr>
<img id="loc" src="pics/map.png">
    </div>
    <hr style="width: 20%;">
    <div>
<img src="pics/location.png">
    </div>
    <hr>
    <div class="write">
    <form action="contact us.php" method="POST">
      <p style="font-size: 40px;font-family: 'Roboto';font-weight: bolder;">Send us a message</p>
      <input type="text" name="name" id="" placeholder="Your Name">
      <input type="text" name="email" id="" placeholder="Your Email"><br>
      <textarea id="issue" name='issue'  rows = "3"  cols = "40" placeholder="Please type your issue here briefly ;)"></textarea>
      <input style="margin:auto" class="sub" type="submit" value="Send message">
    </form>
  </div>
</div>
    </body>
    <footer>
      <hr style="width: 30%;margin-left: auto;margin-right: auto;">
        <h6 style="font-weight: bolder;color:black;text-align: center;">All copyrights reserved &#x000A9; 2021</h6>
    </footer>
</html>