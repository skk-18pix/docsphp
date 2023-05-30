<?php
$id=$_POST["id"];
$name=$_POST["name"];
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$country=$_POST["country"];
$pincode=$_POST["pincode"];
$qualification=$_POST["qualification"];
$pic_name=$_FILES["pic"]["name"];
$pic_type=$_FILES["pic"]["type"];
$pic_tmp=$_FILES["pic"]["tmp_name"];
$password=$_POST["password"];
$con=mysqli_connect("localhost","root","","crud");
$query="update crud_tbl set name='$name', fname='$fname', mname='$mname',gender='$gender',email='$email',mobile='$mobile',address='$address',country='$country',pincode='$pincode',qualification='$qualification',pic_name='$pic_name',password='$password' where id='$id'";
mysqli_query($con,$query);
echo "<script>alert('Your data is updated !!');window.location.href='view.php';</script>";
?>