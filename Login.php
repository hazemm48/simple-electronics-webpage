
<?php
    
    $con=mysqli_connect("localhost","root","","Project");
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="select * from Users where Email='$email' and Password='$pass'";
    $res=mysqli_query($con,$sql) or die(mysqli_error($con));
    if(mysqli_num_rows($res)>=1)
    {
        print "<script>alert('Logged in successfully')</script>";
        $usql="select Name from Users where Email='$email'";
        $uname=mysqli_query($con,$usql);
        $arr=mysqli_fetch_array($uname);
        $_SESSION['username']=$arr['Name'];
        $_SESSION['loggedin']=true;
        
        require 'home.php';
        
    }
    else
    {
        print "<script>alert('Worng Email/Password.')</script>";
        require "login.html";
    }
    
    
?>