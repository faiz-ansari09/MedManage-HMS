<?php

$conn = mysqli_connect("localhost", "root", "", "Product") or die("Connection failed: " . mysqli_connect_error());

$pname = $_POST['productname'];
$pprice = $_POST['productprice'];
$c = $_FILES['productimage']['name'];
$d = $_FILES['productimage']['size'];
$e = $_FILES['productimage']['type'];
$f = $_FILES['productimage']['tmp_name'];

$loc = __DIR__ . "/Image/";

$insert = "INSERT INTO `addproduct`(`name`, `price`, `image`) VALUES ('$pname','$pprice','$c')";

if (mysqli_query($conn, $insert)) {
    move_uploaded_file($f, $loc.$c);
    echo "<script>alert('Product added successfully');
              window.location.href='addproduct.php';
              </script>";
} 
else 
{
    die("Error inserting data: " . mysqli_error($conn));
}
?>
