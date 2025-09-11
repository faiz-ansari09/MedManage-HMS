<?php

$conn = mysqli_connect("localhost", "root", "", "project");

$old = $_POST['opassword'];
$new = $_POST['npassword'];
$confirm = $_POST['cpassword'];

session_start();

$email = $_SESSION['user'];

$select = "SELECT * FROM `regform` WHERE email='$email'";

$r = mysqli_query($conn, $select);
$res = mysqli_fetch_array($r);

if ($res['password'] == $old) {
    if ($new == $confirm) {
        $update = "UPDATE `regform` SET `password`='$new' WHERE email='$email'";
        mysqli_query($conn, $update);
        echo "<script>alert('Password updated Successfully');
              window.location.href='changepassword.php';
              </script>";
    } else {
        echo "<script>alert('New password and confirm password do not match');
              window.location.href='changepassword.php';
              </script>";
    }
} else {
    echo "<script>alert('Old password does not match');
          window.location.href='changepassword.php';
          </script>";
}
?>
