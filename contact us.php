<?php
    $con=mysqli_connect("localhost","root","","Project");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $issue=$_POST['issue'];
    mysqli_query($con,"insert into Issues (Name,Email,Issue) values('$name','$email','$issue')");
    print "<script>alert('Thank you for messaging us we will respond to you as soon as possible')</script>";
    require 'contact us2.php';
?>