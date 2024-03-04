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
  $transaction_value = $conn->real_escape_string($_POST['transactionToDelete']);
  $sql = "CALL Delete_Column('tblproduct_transaction','$transaction_value')";
  $sql1 = "DELETE FROM tblproductadjustpermission WHERE product_tran_name_str = '$transaction_value'";

  if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
      echo "<script>alert('Transaction data deleted successfully');</script>";
      // Redirect to avoid form resubmission or reload the current page
      header("Location: ".$_SERVER['REQUEST_URI']);
      exit();
  } else {
      echo "Error: " . $conn->error;
  }
}
if(isset($_POST['save_multiple_checkbox'])) {
  $department_fk = $_POST['department_fk']; // Get the department_pk from the form
  $brands = $_POST['brands']; // Get the selected brands array from the form

  // Check if any brand is selected
  if(!empty($brands)) {
      // Prepare the stored procedure call
      $stmt = $conn->prepare("CALL Insert_Multiple_Checkbox(?, ?)");

      // Bind parameters
      $stmt->bind_param("is", $department_fk, $brand);

      // Execute the stored procedure for each selected brand
      foreach($brands as $brand) {
          $stmt->execute();
      }

      // Close the statement
      $stmt->close();

      // Redirect or output success message
      echo "Data inserted successfully!";
      // You can redirect the user to another page or show a success message here
  } else {
      // No brands selected, handle this case
      echo "Please select at least one brand!";
      // You can redirect the user back to the form or show an error message
  }
}

// Close the database connection
$conn->close();
?>