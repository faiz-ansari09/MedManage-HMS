<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "root", "", "College_Data");

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$gender=$_POST['flexRadioDefault'];
$college=$_POST['college'];
$date=$_POST['date'];

$insert="INSERT INTO `college_form`( `name`, `email`, `number`, `gender`, `college`, `date`) 
VALUES ('$name','$email','$number','$gender','$college','$date')";

if (mysqli_query($conn, $insert)) {
    
    echo "<script>alert('Added successfully');
              window.location.href='test.php';
              </script>";
} 
else 
{
    echo "<script>alert('Not Added successfully')</script>";
}

?>