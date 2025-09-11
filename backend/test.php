<?php

$conn = mysqli_connect("localhost", "root", "", "College_Data") ;

$select="SELECT * FROM `college_form`";

$a=mysqli_query($conn,$select);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Users/amanmirza/Desktop/BOOTSTRAP/bootstrap copy/css/bootstrap.min.css">
    <script  src="/Users/amanmirza/Desktop/BOOTSTRAP/bootstrap copy/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- Contact Us Form-->
     <div class="container-fluid p-0"  style=" background-color: rgb(6, 6, 50);">
        <div class="row">
            <div class="col-sm-12 p-0">

            
    <div class="container  my-5"  style="background-color: white; border-radius: 5px;border: 1px solid black;">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5  my-5">
            <form method="post" action="inserttest.php">
              <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Enter Your Name</label>
                <input name="name" style="height: 50px;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter Your Name" >
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enter Your E-mail</label>
                <input name="email" style="height: 50px;" type="email" class="form-control  text-danger" id="exampleInputPassword1"  placeholder="Enter Your E-mail">
              </div>
              
              <div class="mb-3">
                <label for="exampleInputMobileNumber1" class="form-label">Enter Your Mobile Number</label>
                <input name="number" style="height: 50px;" type="number" class="form-control" id="exampleInputPassword1"  placeholder="Enter Your Mobile Number">
              </div>

              <label for="exampleInputMobileNumber1" class="form-label">Enter Your Gender</label>
              <div class="form-check">
              <input value="Male" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                 Male
              </label>  
              </div>
              <div class="form-check">
              <input value="Female" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
              <label class="form-check-label" for="flexRadioDefault2">
              Female
              </label>
              </div>
              <label for="exampleInputMobileNumber1" class="form-label">Enter Your College</label>
              <select name="college" class="form-select" aria-label="Default select example">
              <option selected>Select Your College</option>
              <option value="BBDNIIT">BBDNIIT</option>
              <option value="BBDITM">BBDITM</option>
              <option value="BBDU">BBDU</option>
              </select>
              <div class="mb-3">
                <label for="exampleInputMobileNumber1" class="form-label">Date : </label>
                <input name="date" style="height: 50px;" type="date" class="form-control" id="exampleInputPassword1"  placeholder="Enter Your Year">
              </div>
              <div class="mb-3">
                <input  type="submit" style="height: 50px;background-color: green;" class="form-control" >
              </div>
              
              
              
            </form>

            
          </div>
         
          <div class="col-sm-1"></div>
        </div>
       </div>


    </div>
</div>
</div>
<br>


       <!-- Contact Us Form END-->


       <table border="1">
        <tr>
            
            <td>Name</td>
            <td>E-mail</td>
            <td>Mobile Number</td>
            <td>Gender</td>
            <td>College Name</td>
            <td>Date</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

        <?php
        while($res=mysqli_fetch_array($a))
        {
        ?>

        <tr>
            
            <td><?php echo $res['name'] ?></td>
            <td><?php echo $res['email'] ?></td>
            <td><?php echo $res['number'] ?></td>
            <td><?php echo $res['gender'] ?></td>
            <td><?php echo $res['college'] ?></td>
            <td><?php echo $res['date'] ?></td>
            <td><a href="edit_form.php?$idd=<?php echo $res['id']?>">Edit</a></td>
            <td><a href="delete_form.php?$idd=<?php echo $res['id']?>">Delete</a></td>
        </tr>

        <?php } ?>

    </table>
    <br>


</body>
</html>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6717a3f54304e3196ad59d6c/1iaq5gum0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->