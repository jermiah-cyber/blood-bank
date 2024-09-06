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
include('../includes/sidebar.php');
?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<?php
include('../includes/navbar.php');
?>


<br>
<div class="container">
  <div class="row-md-4">
    <div class="col-md-4">
      <h4>Profile</h4>
       <h4>to change E-mail and password</h4>
    </div>
  </div>
</div>
<hr>





 <form class="row g-3 needs-validation" method="post" novalidate>
 <div class="col-md-12">
    <label for="validationCustom02" class="form-label"><h4>Search</h4></label>
    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="inter E-mail" name="Eemail" required> 
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>


  <div class="col-md-2">
    <input class="btn btn-primary" type="submit" name="serch" value="Search">
    <!-- <button class="btn btn-primary" type="submit" name="insert">Submit form</button> -->
  </div>


<?php 
include('dbcon.php');
if (isset($_POST['serch'])) {
  $Eemail=$_POST['Eemail'];
  $check=mysqli_query($con,"select * from employee where Eemail='$Eemail' ");
  // $row=mysqli_fetch_array($check);
  while ($row=mysqli_fetch_array($check)) {
   
    
 ?>
</form>










<form method="post">
                       <!--  <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Frist Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Efirstname" value="<?php //echo $row['Efirstname'] ?>">
                         
                        </div> -->

                       <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">E-mail</label>
                          <input type="Eemail" class="form-control" id="exampleInputPassword1" name="Eemail" value="<?php echo $row['Eemail'] ?>">
                        </div>


                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Old Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="Eoldpass" value="" placeholder="inter old password">
                        </div>


                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="ECpass" value="" placeholder="inter Confirm password">
                        </div>


                         <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">New Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="Epass" placeholder="inter your password">
                        </div>

                    <!--    <div class="col-md-4">
                          <select class="form-select" aria-label="Default select example" name="position">
                            <option >position</option>
                            <option >Admin</option>
                            <option selected>registor</option>
                            <option >other pos</option>
                          </select>
                        </div> -->


                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                       
                       <input type="submit" class="btn btn-primary" name="update">
                        <!-- <button type="submit" class="btn btn-primary" name="signin">Submit</button> -->

                      <?php }} ?>

                    </form>








</main>
</body>
</html>
<?php include('../includes/footer.php'); ?>



<?php 
if (isset($_POST['update'])) {
  include('dbcon.php');
 // $id=$_POST['id'];
 // $Efirstname=$_POST['Efirstname'];
  $Eemail=$_POST['Eemail'];
  $Eoldpass=$_POST['Eoldpass'];
  $ECpass=$_POST['ECpass'];
  $Epass=$_POST['Epass'];
 // $Epassword = "Epass";
  $Epass = password_hash($Epass, PASSWORD_BCRYPT);
 // $Epass=md5($Epass);
  if ($Eoldpass == $ECpass) {
    
  
  mysqli_query($con,"update employee set Epass='$Epass' where Eemail='$Eemail'"); 

  }
  else{
    echo "the password is not matched";
  }


  //echo "information id updated";
  //header('location:updatedoners.php');
}
if(isset($_POST['Clear'])){
//header('location:updatedoners.php');

  }

 ?>