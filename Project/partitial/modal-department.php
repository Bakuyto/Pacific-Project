<?php 
              
              include '../connection/connect.php';


              $sql = "CALL Load_All_Transaction"; 
              $result = $conn->query($sql); // Execute the query

              if ($result && $result->num_rows > 0) {
                  // Output the hidden input field for department_pk
                  echo "<input type='hidden' name='department_pk' id='department_pk_input' value='department_pk'>";
                  
                  // Loop through your checkboxes and output them
                  while ($row = $result->fetch_assoc()) {
                      echo "<div class='form-group mb-3 d-flex justify-content-between'>
                              <label>" . $row["department_name"] . "</label>
                              <input class='form-check-input' type='checkbox' name='brands[]' value='" . $row["department_name"] . "'>
                            </div>";
                  }
                  echo "<div class='form-group mb-3 d-flex justify-content-end'>
                          <button type='button' class='btn btn-secondary mx-2' data-bs-dismiss='modal'>Close</button>
                          <button type='submit' name='save_multiple_checkbox' class='btn btn-primary'>Submit</button>
                      </div>";
              } else {
                  echo "<label>No results found</label>"; // Output if no results found
              }

              ?>