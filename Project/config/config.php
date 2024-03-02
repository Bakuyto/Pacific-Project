<?php

  session_start();
  include '../connection/connect.php'; 

  // Handling form submission for creating a new department
  if(isset($_POST['submit_department']) && isset($_POST['department_name']) && !empty($_POST['department_name'])) {
      $department_name = $conn->real_escape_string($_POST['department_name']);
      $sql = "CALL Insert_department('$department_name')";

      if ($conn->query($sql) === TRUE) {
          echo "<script>alert('Data inserted successfully');</script>";
          // Redirect to avoid form resubmission
          header("Location:".$_SERVER['REQUEST_URI']);
          exit();
      } else {
        echo "<script>alert('Department name cannot be empty');</script>";
      }
  }

    // Handling form submission for creating a new transaction
    if(isset($_POST['submit_transaction']) && isset($_POST['column_name']) && !empty($_POST['column_name'])) {
      $column_name = $conn->real_escape_string($_POST['column_name']);
      $sql = "CALL Insert_Column('$column_name')";

      if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data inserted successfully');</script>";
        // Redirect to avoid form resubmission
        header("Location: ".$_SERVER['REQUEST_URI']);
        exit();
    }
  }

  // Handling form submission for creating a new user
if(isset($_POST['submit_user'])) {
  // Retrieve form data
  $user_full_name = $conn->real_escape_string($_POST['user_full_name']);
  $user_log_name = $conn->real_escape_string($_POST['user_log_name']);
  $user_log_password = $conn->real_escape_string($_POST['user_log_password']);
  $user_level_fk = $conn->real_escape_string($_POST['user_level_fk']);
  $department_pk = $conn->real_escape_string($_POST['user_department_fk']);

  // Insert user into the database
  $sql = "CALL Insert_User('$user_full_name', '$user_log_name', '$user_log_password', '$user_level_fk', '$department_pk')";
  $stmt = $conn->prepare($sql);

  if ($stmt->execute()) {
      // User inserted successfully
      echo "<script>alert('User inserted successfully');</script>";
      // Redirect to avoid form resubmission
      header("Location: ".$_SERVER['REQUEST_URI']);
      exit();
  } else {

    echo "Error: " . $conn->error;
  }
}

// Handling column deletion
if(isset($_POST['submit_delete_transaction']) && isset($_POST['transactionToDelete']) && !empty($_POST['transactionToDelete'])) {
  $transaction_id = $conn->real_escape_string($_POST['transactionToDelete']);
  $sql1 = "CALL Delete_Column('tblproduct_transaction','$transaction_id')";
  $sql2 = "DELETE From tblproductadjustpermission where product_tran_name_str = '$transaction_id'";

  echo $transaction_id;

  if ($conn->query($sql1) === TRUE) {
      echo "<script>alert('Transaction data deleted successfully');</script>";
      // Redirect to avoid form resubmission or reload the current page
      header("Location: ".$_SERVER['REQUEST_URI']);
      exit();
  } else {
  }
  if ($conn->query($sql2) === TRUE) {
    echo "<script>alert('Transaction data deleted successfully');</script>";
    // Redirect to avoid form resubmission or reload the current page
    header("Location: ".$_SERVER['REQUEST_URI']);
    exit();
} else {
}
}

// if(isset($_POST['save_multiple_checkbox'])) {
//   // Validate department_pk
//   if(isset($_POST['department_pk']) && !empty($_POST['department_pk']) && is_numeric($_POST['department_pk'])) {
//       $department_pk = intval($_POST['department_pk']);
//   } else {
//       // Handle the case where department_pk is missing or empty
//       $_SESSION['status'] = "Error: department_pk is missing or empty.";
//       header("Location: create-user.php");
//       exit();
//   }

  // Check if brands array is set and not empty
//   if(isset($_POST['brands']) && !empty($_POST['brands'])) {
//       $brands = $_POST['brands'];

//       // Use prepared statements to prevent SQL injection
//       $insert_sql = "CALL Insert_Multiple_Checkbox(?, ?)";
//       $insert_stmt = $conn->prepare($insert_sql);

//       if ($insert_stmt) {
//           // Bind parameters
//           $insert_stmt->bind_param("is", $department_pk, $brand);

//           // Loop through brands array and execute the prepared statement for each brand
//           foreach($brands as $brand) {
//               if ($insert_stmt->execute()) {
//                   continue; // Move to the next iteration if successful
//               } else {
//                   // Handle insertion failure
//                   $_SESSION['status'] = "Insertion failed: " . $insert_stmt->error;
//                   header("Location: create-user.php");
//                   exit();
//               }
//           }
//           // Close the prepared statement
//           $insert_stmt->close();
//       } else {
//           // Handle statement preparation failure
//           $_SESSION['status'] = "Statement preparation failed: " . $conn->error;
//           header("Location: create-user.php");
//           exit();
//       }
      
//       // Set success message and redirect
//       $_SESSION['status'] = "Inserted Successfully";
//       header("Location: create-user.php");
//       exit();
//   } else {
//       // Handle the case where brands array is missing or empty
//       $_SESSION['status'] = "Error: brands array is missing or empty.";
//       header("Location: create-user.php");
//       exit();
//   }
// } else {
//   // Handle case where save_multiple_checkbox is not set
//   $_SESSION['status'] = "Error: save_multiple_checkbox is not set.";
//   header("Location: create-user.php");
//   exit();
// }

// Close the database connection
$conn->close();
?>