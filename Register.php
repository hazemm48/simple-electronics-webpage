<?php 
    $con=mysqli_connect("localhost","root","","Project");
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $pass=$_POST['initial'];
    $pass2=$_POST['second'];
        $sql="select * from Users where Email='$email'";
        $res=mysqli_query($con,$sql) or die(mysqli_error($con));
        if(mysqli_num_rows($res)>=1)
        {
            print "<script>alert('Email is already in use.')</script>";
            require 'Register.html';    
        }
        else{
            mysqli_query($con,"insert into Users (Name,Email,Password) values('$name','$email','$pass')");
            print "<script>alert('Successfull Registration.')</script>";
            require 'login.html';
        }
?>