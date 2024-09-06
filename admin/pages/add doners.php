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
  <style type="text/css">
    .form-control{
      border: 1px solid red;
    }
  </style>
  <link id="pagestyle" href="../assets/css/material-dashboard.min.css" rel="stylesheet" />
  <script src="../assets/js/jquery.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
<?php
include('../includes/sidebar.php');
?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<?php
include('../includes/navbar.php');
?>


<?php 
//include('../includes/header.php');
include('../includes/sidebar.php');
 ?>

 <br><br>
<div class="container">
  <div class="row-md-4">
    <div class="col-md-4">
      <h4>Add Doners</h4>
    </div>
  </div>
</div>

<br>

<!-- <div class="container">
	<div class="row"> -->
		
	<!-- 	<form>	




  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>


  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>




  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" >Check me out</label>
  </div>

   <button type="submit" class="btn btn-primary">Submit</button> 


</form> -->

<form class="row g-3 needs-validation" method="post" id="myForm" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label" id="myInput">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="" placeholder="inter first name" name="firstname" required>
   <!--  <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" id="myInput">Middle Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="inter middle name" name="middlename" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" id="myInput">Last Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="inter last name" name="lastname"required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label" id="myInput">Mother Name</label>
    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="inter mother name" name="mothername" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">birth date</label>
    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="inter last name" name="birthdate"required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Mobile Nomber</label>
    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="inter mobile Nomber" name="mobnum" id="pn" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

<div class="col-md-4">
  <select class="form-select" aria-label="Default select example" name="bloodgroup" required>
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
    <input class="form-check-input" type="radio" name="gender" id="flexRadioDisabled" value="Male" checked>
    <label class="form-check-label" for="flexRadioDisabled" checked>
     male
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="flexRadioCheckedDisabled" value="Female" >
    <label class="form-check-label" for="flexRadioCheckedDisabled">
      female
    </label>
  </div>
</div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">E-mail</label>
    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="inter e-mail" name="email" required>
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">city</label>
    <input type="text" class="form-control" id="validationCustom02" value="" name="city" required>
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
    <input class="btn btn-primary" type="submit" name="insert" value="Submit form" id="test">
    <!-- <button class="btn btn-primary" type="submit" name="insert">Submit form</button> -->
  </div>

  <div class="col-6">
      <input class="btn btn-primary" type="submit" name="Clear" value="Clear" >
    <!-- <button class="btn btn-primary" type="submit" name="Clear">Clear</button> -->
  </div>
</form>







<!-- <script>
  $("#test").click(function () {
   alert("the data is submited");
  });
</script> -->







<!-- <script>
$(document).ready(function() {
    $('#myForm').on('submit', function(event) {
        // Clear previous error message
        $('#error-message').hide().text('');

        // Get the value of the input
        var inputVal = $('#myInput').val();

        // Check the length of the input
        if (inputVal.length < 3) {
          alert("Input name must be at least 3 characters long.");
            // Prevent form submission
            event.preventDefault();

            // Show error message
            $('#error-message').text('Input must be at least 3 characters long.').show();
        }

        if (inputVal.length < 3) {
          alert("Input name must be at least 3 characters long.");
            // Prevent form submission
            event.preventDefault();

            // Show error message
            $('#error-message').text('Input must be at least 3 characters long.').show();
        }


    });
});
</script> -->







<!-- worked -->
<!-- 
 <script>
$(document).ready(function() {
    $('#myForm').on('submit', function(event) {
        let isEmpty = false;

        // Check each input field in the form
        $(this).find('input').each(function() {
            if ($(this).val().trim() === '') {
                isEmpty = true;
                $(this).css('border', '1px solid red'); // Highlight empty fields
            } else {
                $(this).css('border', ''); // Reset border if filled

            }
        });

        // If any field is empty, prevent form submission and alert user
        if (isEmpty) {
            event.preventDefault(); // Prevent form submission
            alert('Please fill out all fields.');
        }
        else{
         // isEmpty = false;
          alert('Data inserted sucessfully');
        }




        //   $(this).find('input').each(function() {
        //     if (value === '' || value.length < 3) {
        //       $(this).addClass('error');
        //        // isEmpty = true;
        //        // $(this).css('border', '1px solid red'); // Highlight empty fields
        //     } else {
        //         $(this).css('border', ''); // Reset border if filled
        //     }
        // });

    });
});
</script> -->
 	













<!-- <script>
$(document).ready(function() {
    $('#myForm').on('submit', function(event) {
        let isValid = true;

        // Clear previous error styles
        $(this).find('input').removeClass('error');

        // Check each input field in the form
        $(this).find('input').each(function() {
            const value = $(this).val().trim();
            
            // Check if the input is empty or less than 3 characters
            if (value === '' || value.length < 3) {
                isValid = false; // Mark as invalid
                $(this).addClass('error'); // Highlight the invalid field
            }
        });

        // If any field is invalid, prevent form submission and alert user
        if (!isValid) {
            event.preventDefault(); // Prevent form submission
            alert('Please fill out all fields and ensure each has at least 3 characters.');
        }
    });
});
</script> -->







<!-- 
<script>
$(document).ready(function() {
    $('#myForm').on('submit', function(event) {
        let isValid = true;

        // Clear previous error styles and messages
        $(this).find('input').removeClass('error');
        $(this).find('.error-message').hide();

        // Check each input field in the form
        $(this).find('input').each(function() {
            const value = $(this).val().trim();
            
            // Check if the input is empty or less than 3 characters
            if (value === '' ) {
                isValid = false; // Mark as invalid
                $(this).css('border', '1px solid red'); // Highlight empty fields
                 $(this).addClass('error'); // Highlight the invalid field
                 $(this).siblings('.error-message').show(); // Show error message

            }

        });



        // If any field is invalid, prevent form submission and alert user
        if (!isValid) {
            event.preventDefault(); // Prevent form submission
            alert('Please fill out all fields and ensure each has at least 3 characters.');
        }
    });







});
</script> -->





<!-- 	</div>
</div> -->


</body>
</html>
<?php include('../includes/footer.php'); ?>

 <?php 
if (isset($_POST['insert'])) {
  include('dbcon.php');
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

  $mysqli_query_row= mysqli_query($con,"insert into address(firstname,middlename,lastname,mothername,birthdate,mobnum,bloodgroup,gender,email,city) values('$firstname','$middlename','$lastname','$mothername','$birthdate','$mobnum','$bloodgroup','$gender','$email','$city')");
  // echo "information id saved";
  //header('location:adddoners.php');

        // if ( $mysqli_query_row) {
        //   $_SESSION['status'] = "Data inserted sucessfully";
        //   $_SESSION['status_code'] = "sucess";
        // }
        // else{
        //   $_SESSION['status'] = "Data is not inserted sucessfully";
        //   $_SESSION['status_code'] = "error";

        // }
}
if(isset($_POST['Clear'])){
//header('location:adddoners.php');

  }
 ?>