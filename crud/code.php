<?php
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
$location="upload/";
$password=$_POST["password"];
move_uploaded_file($pic_tmp,$location.$pic_name);
//connection
$con=mysqli_connect("localhost","root","","crud");
$query="insert into crud_tbl (name,fname,mname,gender,email,mobile,address,country,pincode,qualification,pic_name,pic_type,pic_tmp,password)values('$name','$fname','$mname','$gender','$email','$mobile','$address','$country','$pincode','$qualification','$pic_name','$pic_type','$pic_tmp','$password')";
mysqli_query($con,$query);
echo "<script>alert('Registration is Done !!');window.location.href='view.php';</script>";

?>