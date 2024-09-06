<?php  ?>
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
			<h4>Update Employee</h4>
		</div>
	</div>
</div>

<br>

<!-- 
<form class="row g-3 needs-validation" method="post" novalidate>
 

 <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Updated by First Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="inter First Name" name="Efirstname" required> 
   
  </div>


  <div class="col-md-2">
    <input class="btn btn-primary" type="submit" name="serch" value="Search">
  </div> 


  <div class="col-md-2">
      <input class="btn btn-primary" type="submit" name="Clear" value="Clear">
  </div>
</form>-->
<!-- <br><br> -->

<?php 
 include('dbcon.php');
//if (isset($_POST['edit'])) {
  $id=$_GET['id'];
  $check=mysqli_query($con,"select * from employee where id='$id'");
  // $row=mysqli_fetch_array($check);
  while ($row=mysqli_fetch_array($check)) {
    
    
    
 ?>




<form class="row g-3 needs-validation" method="post" novalidate>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">employee ID</label>
    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $row['id'] ?>" placeholder="inter first name" name="id" required>
   <!--  <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>




  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">employee first name</label>
    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $row['Efirstname'] ?>" placeholder="inter first name" name="Efirstname" required>
   <!--  <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">employee middle Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['Emiddlename'] ?>" placeholder="inter middle name" name="Emiddlename" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">employee last Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['Elastname'] ?>" placeholder="inter last name" name="Elastname"required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">employee mother Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['Emothername'] ?>" placeholder="inter mother name" name="Emothername" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">employee birth date</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['Ebirthdate'] ?>" placeholder="inter last name" name="Ebirthdate"required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">employee mobile Nomber</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['Emobnum'] ?>" placeholder="inter mobile Nomber" name="Emobnum" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

<div class="col-md-4">
  <select class="form-select" aria-label="Default select example" name="Eposition" value="<?php echo $row['Eposition'] ?>">
  <option >employee position</option>
  <option >Admin</option>
  <option selected>registor</option>
  <option >nurs</option>
  <option >driver</option>
</select>
</div>


 <div class="col-md-4">
    <div class="form-check">
    <input class="form-check-input" type="radio" name="Egender" id="flexRadioDisabled" value="male" checked>
    <label class="form-check-label" for="flexRadioDisabled" checked>
     male
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="Egender" id="flexRadioCheckedDisabled" value="female" >
    <label class="form-check-label" for="flexRadioCheckedDisabled">
      female
    </label>
  </div>
</div> 

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">E-mail</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['Eemail'] ?>" placeholder="inter e-mail" name="Eemail" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>


  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="text" class="form-control" id="validationCustom02" name="Epass" value="<?php echo $row['Epass'] ?>" placeholder="inter e-mail"  required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>


  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">city</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $row['Ecity'] ?>" name="Ecity" required>
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
 //}
?>

</body>
</html>
<?php include('../includes/footer.php'); ?>




<?php 
if (isset($_POST['insert'])) {
  include('dbcon.php');
  $id=$_POST['id'];
  $Efirstname=$_POST['Efirstname'];
  $Emiddlename=$_POST['Emiddlename'];
  $Elastname=$_POST['Elastname'];
  $Emothername=$_POST['Emothername'];
  $Ebirthdate=$_POST['Ebirthdate'];
  $Emobnum=$_POST['Emobnum'];
  $Eposition=$_POST['Eposition'];
  $Egender=$_POST['Egender'];
  $Eemail=$_POST['Eemail'];
  $Epass=$_POST['Epass'];
//  $Epass=md5($Epass);
  $Ecity=$_POST['Ecity'];

  mysqli_query($con,"update employee set Efirstname='$Efirstname', Emiddlename='$Emiddlename', Elastname='$Elastname', Emothername='$Emothername', Ebirthdate='$Ebirthdate', Emobnum='$Emobnum', Eposition='$Eposition',Egender='$Egender', Eemail='$Eemail',Epass='$Epass', Ecity='$Ecity' where id='$id'");
 // echo "information id saved";
  //header('location:adddoners.php');
}
if(isset($_POST['Clear'])){
//header('location:adddoners.php');

  }
 ?>