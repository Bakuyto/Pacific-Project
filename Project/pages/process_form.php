<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_input"])) {
    // Include your database connection script
    include '../connection/connect.php';

    // Assuming your form fields are named after database columns
    // You can retrieve the values submitted in the form like this:
    $values = array();
    foreach ($_POST as $key => $value) {
        // Prevent SQL injection by using prepared statements
        $values[$key] = $conn->real_escape_string($value);
    }

    // Now, you can process the submitted data, for example, inserting it into the database
    // Assuming 'tblproduct_transaction' is your table name
    $columns = implode(", ", array_keys($values));
    $columnValues = "'" . implode("', '", $values) . "'";

    $sql = "INSERT INTO tblproduct_transaction ($columns) VALUES ($columnValues)";
    if ($conn->query($sql) === TRUE) {
        // Insertion successful
        echo "New record created successfully";
    } else {
        // Error occurred
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
