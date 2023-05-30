<!DOCTYPE html>
<html lang="en">
<head>
<title>Update your details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php
$id=$_GET["id"];
//connection
$con=mysqli_connect("localhost","root","","crud");
$query="select * from crud_tbl where id='$id'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
   if($row=mysqli_fetch_assoc($res))
   {

?>


<div class="container">       
 <br>
 <br>
    <!-- Registration Form  -->

<div class="col-lg-10 container">

<div class="card bg-light">
<article class="col-lg card-body mx-auto" style="max-width: 600px;">
  <br>
  <h2 class="text-center">Update Registration Details</h2>
  <br>
    <!-- form start -->
  <form action="updatecode.php" method="post" enctype="multipart/form-data"><!-- form Method -->
  
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Name:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        <input class="form-control" type="text" name="name" autocomplete="off" value="<?php echo $row['name']; ?>"> <!-- name -->
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Father's Name:- &nbsp;</span>
     </div>
        <input class="form-control" type="text" name="fname" autocomplete="off" value="<?php echo $row['fname']; ?>"> <!-- name -->
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Mother's Name:-</span>
     </div>
        <input class="form-control" type="text" name="mname" autocomplete="off" value="<?php echo $row['mname']; ?>"> <!-- name -->
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Gender:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
     <?php
        if($row["gender"]=="Male")
        {
            ?>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" id="" value="Male" checked="true">Male
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" id="" value="Female">Female  <br>
        <?php
        }
        elseif($row["gender"]=="Female"){
            ?>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" name="gender" id="" value="Male" >Male
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" id="" value="Female" checked="true">Female   <br>
         <?php    
        }
        ?>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Email ID:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
     </div>
        <input class="form-control" type="email" name="email" autocomplete="off" value="<?php echo $row["email"]?>">  <!-- email -->
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Mobile No.:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        <input type="number" class="form-control" id="" name="mobile" autocomplete="off" value="<?php echo $row["mobile"]?>"> <!-- mobile -->
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Address:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
     </div>
        <input type="text" class="form-control" id="" name="address" autocomplete="off" value="<?php echo $row["address"]?>">
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Country Name:- &nbsp;</span>
     </div>
        <input type="text" class="form-control" id="" name="country" autocomplete="off" value="<?php echo $row["country"]?>">
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Pin Code:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        <input type="number" class="form-control" id="" name="pincode" autocomplete="off" value="<?php echo $row["pincode"]?>"> <!-- pincode -->
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> Qualification:- &nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        &nbsp;&nbsp;<input name="qualification" type="checkbox" value="10th">&nbsp;10th <!-- Qualification -->
        &nbsp;&nbsp;<input name="qualification" type="checkbox" value="12th">&nbsp;12th <!-- Qualification -->
        &nbsp;&nbsp;<input name="qualification" type="checkbox" value="Diploma">&nbsp;Diploma <!-- Qualification -->
        &nbsp;&nbsp;<input name="qualification" type="checkbox" value="B.E./B.Tech.">&nbsp;B.E./B.Tech. <!-- Qualification -->
    </div> <!-- form-group// -->
     
   <div class="form-group input-group">
      <input type="file" name="pic" value="<?php echo $row["pic_name"] ?>"> <!-- photo -->
    </div> <!-- form-group// -->

       <!--for password-->
       <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> Password:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </div>
        <input type="password" id="myInput" class="form-control" id="" placeholder="Password" name="password" autocomplete="off" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      &nbsp;&nbsp;&nbsp; <input type="checkbox" onclick="myFunction()"> Show Password  <!-- password -->
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

    <div class="form-group">
    <input class="btn btn-outline-primary btn-block" type="submit" value="update">
        <input type="hidden" name="id" value="<?php echo $row["id"]?>"/>
    </div> <!-- form-group// -->      
    <p class="text-center">New Registration? <a href="index.php";>Click Here</a> </p>                                                                 
</form>
<!-- form closed -->

</article>
</div> 
<!-- //// Reg.. form end -->
  <br>

</div>
</div>

<?php
   }
}
?>

</body>
</html>