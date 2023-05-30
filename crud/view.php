<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>All registered candidates list</title>
</head>
<body>

<div class="container-sm">
  <h2 class="text-center">All registered candidates list</h2>
  <p class="text-center">Registration is the process of signing up or enrolling in something.:</p> 
  <p class="text-center">Go Back for new registration: <a href="index.php";>Click Here.</a> </p>
  <?php
    $con=mysqli_connect("localhost","root","","crud");
    $query="select * from crud_tbl";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0)
    {
    ?>
  <table class="table table-bordered border-primary table-sm table-responsive-sm table-hover border=1">
    <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Country</th>
        <th>Pin Code</th>
        <th>qualification</th>
        <th>Photo</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
    <?php
        while($row=mysqli_fetch_assoc($res))
        {
        ?>
      <tr>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["fname"]; ?></td>
        <td><?php echo $row["mname"]; ?></td>
        <td><?php echo $row["gender"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["mobile"];?></td>
        <td><?php echo $row["address"];?></td>
        <td><?php echo $row["country"];?></td>
        <td><?php echo $row["pincode"];?></td>
        <td><?php echo $row["qualification"];?></td>
        <td><img src="upload/<?php echo $row['pic_name']; ?>" height="60px"></td>
        <td><?php echo $row["password"];?></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash btn btn-danger" aria-hidden="true"> Delete</i></a></td>
        <td><a href="update.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash btn btn-primary" aria-hidden="true"> Update</i></a></td>
      </tr>
      <?php
        }
        ?>
    </tbody>
  </table>

  <?php
        
    }
    ?>
</div>


</body>
</html>