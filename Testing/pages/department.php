<?php
    include 'connect.php';
    $sql = "CALL Load_All_department"; // SQL query to select data from the table
    $result = $conn->query($sql); // Execute the query

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output data row by row
            echo "<tr>
                    <td class='d-flex justify-content-between border' name='" . $row["department_name"] . "' id='" . $row["department_pk"] . "'>" . $row["department_name"] . "
                    <button 
                        data-department-name='" . $row["department_name"] . "' 
                        data-department-pk='" . $row["department_pk"] . "' 
                        class='btn btn-primary plus-btn fw-bolder' 
                        data-bs-toggle='modal' 
                        data-bs-target='#exampleModal'>
                        +
                    </button>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='1'>0 results</td></tr>"; // Output if no results found
    }
    $conn->close(); // Close the database connection
?>