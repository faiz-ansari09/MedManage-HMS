<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <form action="insertaddproduct.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="productname">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="productprice">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="productimage">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
            <div class="col-sm-2">
              <a href="showproduct.php"><button> Show Product </button></a>
            </div>
        </div>
    </div>


</body>
</html>