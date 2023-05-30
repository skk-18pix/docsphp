<?php
$id=$_GET["id"];
//connection
$con=mysqli_connect("localhost","root","","crud");
$query="delete from crud_tbl where id='$id'";
mysqli_query($con,$query);
echo "<script>alert('Record is deleted');window.location.href='view.php';</script>";
?>