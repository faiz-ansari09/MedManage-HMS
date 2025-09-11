<?php

$conn=mysqli_connect("localhost","root","","project");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$insert="INSERT INTO `regform`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";

if(mysqli_query($conn,$insert))
{
    echo "<script>
             alert('REGISTERED SUCCESSFULLY');
             window.location.href='Registration.php';
          </script>";
}
else
{
   echo "<script>
             alert('NOT REGISTERED SUCCESSFULLY');
              window.location.href='Registration.php';
        </script>";
}

?>