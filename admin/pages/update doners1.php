
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
      <h4>Update Doners By Id</h4>
    </div>
  </div>
</div>

<br>



 <form class="row g-3 needs-validation" method="post" novalidate>
 <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Updated by ID</label>
    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="inter ID" name="id" required> 
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>


  <div class="col-md-2">
    <input class="btn btn-primary" type="submit" name="serch" value="Search">
    <!-- <button class="btn btn-primary" type="submit" name="insert">Submit form</button> -->
  </div>


  <div class="col-md-2">
      <input class="btn btn-primary" type="submit" name="Clear" value="Clear">
    <!-- <button class="btn btn-primary" type="submit" name="Clear">Clear</button> -->
  </div>
</form>
<br><br>

<?php 
include('dbcon.php');
if (isset($_POST['serch'])) {
  $id=$_POST['id'];
  $check=mysqli_query($con,"select * from address where id='$id'");
  // $row=mysqli_fetch_array($check);
  while ($row=mysqli_fetch_array($check)) {
    
    
 ?>



<form class="row g-3 needs-validation" method="post" novalidate>

   <div class="col-md-4">
    <label for="validationCustom01" class="form-label">ID</label>
    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $row['id'] ?>" placeholder="inter first name" name="id" required>
   <!--  <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>


  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $row['firstname'] ?>" placeholder="inter first name" name="firstname" required>
   <!--  <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Middle Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['middlename'] ?>" placeholder="inter middle name" name="middlename" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['lastname'] ?>" placeholder="inter last name" name="lastname"required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Mother Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['mothername'] ?>" placeholder="inter mother name" name="mothername" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">birth date</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['birthdate'] ?>" placeholder="inter last name" name="birthdate"required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Mobile Nomber</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['mobnum'] ?>" placeholder="inter mobile Nomber" name="mobnum" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

<div class="col-md-4">
  <select class="form-select" aria-label="Default select example" name="bloodgroup" value="<?php echo $row['bloodgroup'] ?>">
  <option selected>Blood group</option>
  <option >A-</option>
  <option >A+</option>
  <option >B+</option>
  <option >B-</option>
  <option >AB+</option>
  <option >AB-</option>
  <option >O+</option>
  <option >O-</option>
</select>
</div>


<div class="col-md-4">
    <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="flexRadioDisabled" value="Male" value="<?php echo $row['gender'] ?>" >
    <label class="form-check-label" for="flexRadioDisabled">
     male
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="flexRadioCheckedDisabled" value="Female" value="<?php echo $row['gender'] ?>" >
    <label class="form-check-label" for="flexRadioCheckedDisabled">
      female
    </label>
  </div>
</div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">E-mail</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['email'] ?>" placeholder="inter e-mail" name="email" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">city</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['city'] ?>" name="city" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>

  <div class="col-6">
    <input class="btn btn-primary" type="submit" name="insert" value="Submit form">
    <!-- <button class="btn btn-primary" type="submit" name="insert">Submit form</button> -->
  </div>

  <div class="col-6">
      <input class="btn btn-primary" type="submit" name="Clear" value="Clear">
    <!-- <button class="btn btn-primary" type="submit" name="Clear">Clear</button> -->
  </div>
</form>



 <?php  
}
}
?>
</body>
</html>
<?php include('../includes/footer.php'); ?>

<?php 
if (isset($_POST['insert'])) {
  include('dbcon.php');
  $id=$_POST['id'];
  $firstname=$_POST['firstname'];
  $middlename=$_POST['middlename'];
  $lastname=$_POST['lastname'];
  $mothername=$_POST['mothername'];
  $birthdate=$_POST['birthdate'];
  $mobnum=$_POST['mobnum'];
  $bloodgroup=$_POST['bloodgroup'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $city=$_POST['city'];

  mysqli_query($con,"update address set firstname='$firstname', middlename='$middlename', lastname='$lastname', mothername='$mothername', birthdate='$birthdate', mobnum='$mobnum', bloodgroup='$bloodgroup', gender='$gender', email='$email' where id='$id'"); 
  
  //echo "information id updated";
  //header('location:updatedoners.php');
}
if(isset($_POST['Clear'])){
//header('location:updatedoners.php');

  }

 ?>