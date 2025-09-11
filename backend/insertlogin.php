<?php

$conn=mysqli_connect("localhost","root","","project");

session_start();//session started 

$_SESSION['user']; //session created -> to create session

$email=$_POST['email'];
$password=$_POST['password'];

$select="SELECT  * FROM `regform` WHERE email='$email' And password='$password'";

$r=mysqli_query($conn,$select);

if(mysqli_num_rows($r)>0)
{
    $res=mysqli_fetch_array($r);
    $e=$res['email'];
    $p=$res['password'];
    $name=$res['name'];

    if($p==$password && $e==$email)
    {
        $_SESSION['user']=$email;
        $_SESSION['name']=$name;
        header('location:dashboard.php');//to give location of page in php
    }
    else
    {
        echo "INVALID E-MAIL OR PASSWORD";
    }
}
else
{
    echo "INVALID E-MAIL OR PASSWORD";
}

?>