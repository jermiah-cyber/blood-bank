
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
include('../includes/sidebar1.php');
?>
<?php include('../includes/navbar.php'); ?>

<br>
<div class="container">
  <div class="row-md-4">
    <div class="col-md-4">
      <h4>Doners Detail</h4>
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
      <th scope="col">Glood Grop</th>
      <th scope="col">Gender</th>
      <th scope="col">E-mail</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
  		<?php 
			include('dbcon.php');
			$check=mysqli_query($con,"select * from address");
			while ($row=mysqli_fetch_array($check)) {
			  $id=$row['id'];
  		 ?>

    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <th scope="row"><?php echo $row['firstname']; ?></th>
      <th scope="row"><?php echo $row['middlename']; ?></th>
      <th scope="row"><?php echo $row['lastname']; ?></th>
      <th scope="row"><?php echo $row['mothername']; ?></th>
      <th scope="row"><?php echo $row['birthdate']; ?></th>
      <th scope="row"><?php echo $row['mobnum']; ?></th>
      <th scope="row"><?php echo $row['bloodgroup']; ?></th>
      <th scope="row"><?php echo $row['gender']; ?></th>
      <th scope="row"><?php echo $row['email']; ?></th>
      <th scope="row"><?php echo $row['city']; ?></th>
    </tr>
  <?php 
}
 ?>
  </tbody>
</table>

</body>
</html>
<?php include('../includes/footer.php'); ?>