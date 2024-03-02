<?php
                include '../connection/connect.php';
                $sql = "CALL Load_All_User"; // SQL query to select data from the table
                $result = $conn->query($sql); // Execute the query

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Output data row by row
                        echo "<tr>
                            <td class='d-flex justify-content-between border'>" . $row["user_full_name"] . " </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='1'>0 results</td></tr>"; // Output if no results found
                }
                $conn->close(); // Close the database connection
?>