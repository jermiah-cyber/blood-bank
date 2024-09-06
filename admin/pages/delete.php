<?php
//  include('dbcon.php'); 
// if (isset($_POST['delete'])) {
// $user_id=$_POST['user_id'];
// $delete_query =  "delete from employee where user_id='$user_id'";
// $delete_query_run = mysqli_query($con, $delete_query);
// 	if ($delete_query_run) {
// 		$_SESSION['status'] = "Data deleted sucessfully";
// 		$_SESSION['status_code'] = "sucess";
// 		header('location: deleteEmployee.php');
// 	}
// 	else{
// 		$_SESSION['status'] = "Data deletion failed";
// 		$_SESSION['status_code'] = "error";
// 		header('location: deleteEmployee.php');
// 	}

// // mysqli_query($con, "delete from employee where id='$id'");
// // header("location:deleteEmployee.php");
// }
 ?>



 <?php
 include('dbcon.php'); 
if (isset($_POST['delete'])) {
$id=$_POST['user_id'];

 $delete_query_run = mysqli_query($con, "delete from employee where id='$id'");
 header("location:deleteEmployee.php");


// $delete_query =  "delete from employee where user_id='$user_id'";
// $delete_query_run = mysqli_query($con, $delete_query);
	if ($delete_query_run) {
		$_SESSION['status'] = "Data deleted sucessfully";
		$_SESSION['status_code'] = "sucess";
		header('location: deleteEmployee.php');
	}
	else{
		$_SESSION['status'] = "Data deletion failed";
		$_SESSION['status_code'] = "error";
		header('location: deleteEmployee.php');
	}

}
 ?>