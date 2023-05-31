<!DOCTYPE html>
<html lang="en">
<head>
<title>CRUD Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">       
 <br>
 <br>
    <!-- Registration Form  -->

<div class="col-lg-10 container">

<div class="card bg-light">
<article class="col-lg card-body mx-auto" style="max-width: 600px;">
  <br>
  <h2 class="text-center">Registration</h2>
  <br>
    <!-- form start -->
  <form action="code.php" method="post" enctype="multipart/form-data" class="was-validated"><!-- form Method -->
  
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Name:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        <input type="text" class="form-control" id="" placeholder="Enter username" name="name" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div> <!-- name -->
    </div> <!-- form-group// -->
    
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Father's Name:- &nbsp;</span>
     </div>
        <input type="text" class="form-control" id="" placeholder="Enter father name" name="fname" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div> <!-- fname -->
    </div> <!-- form-group// -->
    
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Mother's Name:-&nbsp;</span>
     </div>
        <input type="text" class="form-control" id="" placeholder="Enter mother name" name="mname" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div> <!-- mname -->
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Gender:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="" value="Male">&nbsp;&nbsp; Male <!-- male -->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="" value="Female">&nbsp;&nbsp; Female <!-- female -->
    </div> <!-- form-group// -->

    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Email ID:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
     </div>
        <input type="email" class="form-control" id="" placeholder="xyz@gmail.com" name="email" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>  <!-- email -->
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Mobile No.:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        <input type="number" class="form-control" id="" placeholder="9876543210" name="mobile" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>  <!-- mobiles -->
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Address:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
     </div>
        <input type="text" class="form-control" id="" placeholder="Your permanent address..." name="address" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>  <!-- address -->
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Country Name:- &nbsp;</span>
     </div>
        <input type="text" class="form-control" id="" placeholder="India etc." name="country" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>  <!-- country -->
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Pin Code:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        <input type="number" class="form-control" id="" placeholder="123456" name="pincode" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>  <!-- pincode -->
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Qualification:- &nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        &nbsp;&nbsp;<input name="qualification" type="checkbox" checked="true">&nbsp;10th <!-- Qualification -->
        &nbsp;&nbsp;<input name="qualification" type="checkbox" checked="true">&nbsp;12th <!-- Qualification -->
        &nbsp;&nbsp;<input name="qualification" type="checkbox" checked="true">&nbsp;Diploma <!-- Qualification -->
        &nbsp;&nbsp;<input name="qualification" type="checkbox" checked="true">&nbsp;B.E./B.Tech. <!-- Qualification -->
    </div> <!-- form-group// -->

   <div class="form-group input-group">
      <input type="file" class="form-control" id="" placeholder="Attached photo" name="pic" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div> <!-- photo -->
    </div> <!-- form-group// -->

    <!--for password-->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Password:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        <input type="password" id="myInput" class="form-control" id="" placeholder="Password" name="password" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <input type="checkbox" onclick="myFunction()">Show Password  <!-- password -->
    </div> <!-- form-group// -->
    
      <script>
      function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      </script>
    <!--for password-->

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on submit all details.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>

    
    <div class="form-group">
    <input class="btn btn-outline-primary btn-block" type="submit" value="SAVE">
    </div> <!-- form-group// -->        
    <p class="text-center">View all registered candidates? <a href="view.php";>Click Here.</a> </p>                                                                 
</form>
<!-- form closed -->

</article>
</div> 
<!-- //// Reg.. form end -->
  <br>

</div>
</div>

</body>
</html>
