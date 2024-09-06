<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.min.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
<?php
include('../includes/sidebar1.php');
?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<?php 
//include('../includes/header.php');
include('../includes/sidebar1.php');
 ?>
<?php include('../includes/navbar.php'); ?>
<br>
<div class="container">
	<div class="row-md-4">
		<div class="col-md-4">
			<h4>Employee Detail</h4>
		</div>
	</div>
</div>

<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Mobile Nomber</th>
      <th scope="col">Employee Position</th>
      <th scope="col">Gender</th>
      <th scope="col">E-mail</th>
      <th scope="col">Password</th>
      <th scope="col">City</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
      <?php 
      include('dbcon.php');
      $check=mysqli_query($con,"select * from employee");
      while ($row=mysqli_fetch_array($check)) {
        $id=$row['id'];
       ?>

    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <th scope="row"><?php echo $row['Efirstname']; ?></th>
      <th scope="row"><?php echo $row['Emiddlename']; ?></th>
      <th scope="row"><?php echo $row['Elastname']; ?></th>
      <th scope="row"><?php echo $row['Emothername']; ?></th>
      <th scope="row"><?php echo $row['Ebirthdate']; ?></th>
      <th scope="row"><?php echo $row['Emobnum']; ?></th>
      <th scope="row"><?php echo $row['Eposition']; ?></th>
      <th scope="row"><?php echo $row['Egender']; ?></th>
      <th scope="row"><?php echo $row['Eemail']; ?></th>
      <th scope="row"><?php echo $row['Epass']; ?></th>
      <th scope="row"><?php echo $row['Ecity']; ?></th>
       <th scope="row"><a href="edit_1.php?id=<?php echo $row['id']; ?> " class="btn btn-primary">Edit</a></th>
       <th scope="row"><a href="#" class="btn btn-danger">Delete</a></th>
    </tr>
  <?php 
}
 ?>
  </tbody>
</table>


</body>
</html>

<?php include('../includes/footer.php'); ?>