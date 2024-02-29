<?php
         include 'connect.php';
         $sql = "CALL Load_All_Transaction"; // SQL query to select data from the table
         $result = $conn->query($sql); // Execute the query
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output data row by row
            echo "<tr>
                    <td class='d-flex justify-content-between border'>" . $row["department_name"] . " 
                        <button type='button' class='btn btn-danger delete-btn' 
                            onclick='setTransactionToDelete(\"" . $row["department_name"] . "\")' 
                            data-bs-toggle='modal' data-bs-target='#deleteModal'>
                            <i class='fa-solid fa-trash-can text-light'></i>
                        </button>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='1'>0 results</td></tr>"; // Output if no results found
    }
    $conn->close(); // Close the database connection
?>