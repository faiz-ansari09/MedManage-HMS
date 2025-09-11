<?php

$conn=mysqli_connect("localhost","root","","Product");

$id=$_REQUEST['idd'];

$select="SELECT * FROM `addproduct` WHERE id='$id'";

$r=mysqli_query($conn,$select);
$res=mysqli_fetch_array($r);

$product_name=$res['name'];
$product_price=$res['price'];
$del_charge=50;
$total_price=$product_price+$del_charge;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- table start -->

<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <table class="table table-bordered border-primary">
  <thead>
    <tr>
      <img src="Image/<?php echo $res['image']?>" alt="">
      <th scope="col">Product Name</th>
      <td><?php echo $product_name; ?></td>
      <th scope="col">Product Price</th>
      <td><?php echo $product_price; ?></td>
      <th scope="col">Delivery Charge</th>
      <td><?php echo $del_charge; ?></td>
      <th scope="col">Total Price</th>
      <td><?php echo $total_price; ?></td>
    </tr>

  </thead>
  <tbody>
    
  </tbody>
</table>
        </div>
    </div>
</div>

<!-- form create -->

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputPassword1" required>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Add to Cart : <?php echo $total_price; ?></button>
</form>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
</body>
</html>