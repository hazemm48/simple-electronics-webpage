<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Us</title>
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
                <li ><a href="home.php#prod">Products</a></li>
                <li class="active"><a href="about us.php">About Us</a></li>
                <li><a href="contact us2.php">Contact Us</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
              <?php if(isset($_SESSION["loggedin"])):?>
            <li id="visii" ><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            <li class="visiname" class="active"><a href="login.html"> welcome <?php echo $_SESSION["username"] ?></a></li>
            <?php else:?>
                <li id="visi" ><a href="Register.html" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li id="visii"><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <?php endif;?>
              </ul>
            </div>
          </nav>
<img style="display: block;margin-top: 50px;margin-left: auto;margin-right: auto;width: 20%;" src="pics/about 2.png" alt="">
<p style="font-size:50px;font-family: 'Roboto';font-weight: bolder;text-align: center;margin: 60px;">Welcome to SIM electronics company</p>
<p style="text-align: center;font-family: Arial;margin-bottom: 40px;">SIM COMPANY is the leading Electronics Components Company since 2018 which sells all Electronic Components, Development Boards, Industrial<br>
    spare parts and Tools for Engineers and anyone interested in Electronics.<br>
    For ever 14 years, we’ve been providing products and solutions to Engineers, making it easy to our customers to do business and saving them time and<br>money. <br>
    We aim to offer our customers unrivalled choice of product technologies, solve problems with innovative solutions and deliver a world-class customer<br>experience. <br> </p>
<img style="display: block;margin-left: auto;margin-right: auto;margin-bottom: 20px; width:80%;" src="pics/location.png" alt="location">
    </body>
    <footer>
            <hr style="height: 2px;width: 30%;margin-left: auto;margin-right: auto;">
    <h6 style="font-weight: bolder;color:black;text-align: center;">All copyrights reserved &#x000A9; 2021</h6>
    </footer>
</html>