<?php
                    include '../connection/connect.php';
                    $sql = "CALL Load_All_department"; // SQL query to select data from the table
                    $result = $conn->query($sql); // Execute the query
    
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          $department_name = $row['department_name']; // Fetch department name
                          $option = $row['department_pk'];// Fetch department pk
                          // Output data row by row
                  ?>
                          <option value="<?php echo $option; ?>"><?php echo $department_name; ?> </option>
                  <?php
                      }
                  } else {
                      echo "<option value='' selected>No departments found</option>"; // Output if no results found
                  }
                    $conn->close(); // Close the database connection
                  ?>