












<!--worked-->

<?php
include('dbcon.php');

if (isset($_POST['sign'])) {
    $email = $_POST['user_email'];
    $password = $_POST['user_pass'];


    // $_SESSION['Eemail'] = $email;
    // $_SESSION['Epass'] = $password;


    $sql = "SELECT Eposition FROM employee WHERE Eemail='$email' AND Epass='$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $Eposition = $row['Eposition'];

            if ($Eposition == 'Admin') {
                header("Location: ../index1.php");
                exit();
            } else {
                header("Location: ../index.php");
                exit();
            }
        } else {
         //   echo "Invalid email or password";
          
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>



<?php<?php
// include('dbcon.php');

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $Eemail = filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL); // Sanitize email input
//     $Epass = $_POST['user_pass'];   // Password does not need sanitization

//     // Prepare your SQL statement to prevent SQL injection
//     $stmt = $con->prepare("SELECT Epass, Eposition FROM employee WHERE Eemail = ?");
//     $stmt->bind_param("s", $Eemail);

//     // Execute the statement and check for errors
//     if (!$stmt->execute()) {
//         echo "Error executing query: " . $stmt->error;
//         exit();
//     }

//     $result = $stmt->get_result();

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $hashedPassword = $row['Epass'];
//         $Eposition = $row['Eposition'];

//         // Verify the password
//         if (password_verify($Epass, $hashedPassword)) {
//             // Password is correct
//             echo "Login successful. Position: " . htmlspecialchars($Eposition);
            
//             // Optionally start a session here
//             session_start();
//             $_SESSION['email'] = $Eemail; // Store email in session
//             $_SESSION['position'] = $Eposition; // Store position in session
            
//             // Redirect based on position
//             if ($Eposition === 'Admin') {
//                 header('Location: ../index1.php');
//             } else {
//                 header('Location: ../index.php');
//             }
//             exit();
//         } else {
//             // Invalid password
//             echo "Invalid password.";
//         }
//     } else {
//         // No user found with that email
//         echo "No user found.";
//     }

//     $stmt->close();
// }

// $con->close();
?>
