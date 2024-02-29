<?php
  include 'connect.php'; 
  include 'redirect.php';

  // Handling form submission for creating a new department
  if(isset($_POST['submit_department']) && isset($_POST['department_name']) && !empty($_POST['department_name'])) {
      $department_name = $conn->real_escape_string($_POST['department_name']);
      $sql = "CALL Insert_department('$department_name')";

      if ($conn->query($sql) === TRUE) {
          echo "<script>alert('Data inserted successfully');</script>";
          // Redirect to avoid form resubmission
          header("Location: ".$_SERVER['REQUEST_URI']);
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

// Handling column deletion
if(isset($_POST['submit_delete_transaction']) && isset($_POST['transactionToDelete']) && !empty($_POST['transactionToDelete'])) {
  $transaction_id = $conn->real_escape_string($_POST['transactionToDelete']);
  $sql = "CALL Delete_Column('tblproduct_transaction','$transaction_id')";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Transaction data deleted successfully');</script>";
      // Redirect to avoid form resubmission or reload the current page
      header("Location: ".$_SERVER['REQUEST_URI']);
      exit();
  } else {
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

// Close the database connection
$conn->close();
?>