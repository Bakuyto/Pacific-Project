<?php include '../connection/redirect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="contain-fluid">
<nav class=" sticky-top top-0" style="background-color:white; z-index:999;">
      <ul>
        <li>
          <a class="active" href="#">Main</a>
        </li>
        <li>
          <a href="test.php">Test</a>
        </li>
        <li>
          <a href="create-user.php">Create</a>
        </li>
      </ul>
    </nav>
      <div class="main-header px-3 sticky-top bg-light" style='top:60px;'>
        <form class="d-flex">
          <input class="form-control me-1 w-50" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        
        

        <div class="form-inline d-flex flex-row gap-1">
          <button type="button" class="btn btn-primary" onclick="$('#addModal').modal('show')">Create</button>
          <input type="number" id="row" style="width:60px; height: 40px;" class="form-control"/>
          <button type="button" class="btn btn-success" id="filter">Filter</button>
        </div>
        
      </div>
      
    <section>
      <div class="tables container-fluid tbl-container d-flex flex-column justify-content-center align-content-center">
        <div class="row tbl-fixed">
          <table class="table-striped table-condensed"  style="width:1920px !important;" id="myTable">
            <thead>
              <tr>
              <?php
                  include '../connection/connect.php';

                  $sql = "SELECT
                  COLUMN_NAME AS department_name
                  FROM INFORMATION_SCHEMA.COLUMNS
                   WHERE TABLE_NAME = 'tblproduct_transaction';";
                  $result = $conn->query($sql); // Execute the query

                  if ($result && $result->num_rows > 0) {
                  // Fetch column names from the database
                  $columns = array();
                  while ($row = $result->fetch_assoc()) {
                   $columns[] = $row["department_name"];
                  echo "<th class='text-center'>" . $row["department_name"] . "</th>";
                  }
                  echo "<th class='text-center'>Tool</th>";
                  } else {
                  echo "<th>No results found</th>"; // Output if no results found
                  }
                  
                  ?>
              </tr>
            </thead>
            <tbody id="table-body">
              <?php
                include '../connection/connect.php';

                $sql = "SELECT * FROM tblproduct_transaction";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Fetch column names dynamically
                    $columns = array();
                    $row = $result->fetch_assoc();
                    foreach ($row as $key => $value) {
                        $columns[] = $key;
                    }
                    // Reset the result pointer back to the beginning
                    $result->data_seek(0);
                    // Output data row by row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        foreach ($columns as $column) {
                            echo "<td>" . $row[$column] . "</td>";
                        }
                        // Add Edit and Delete buttons
                        echo "<td><button class='btn btn-primary mx-2'><i class='fa-solid fa-pen-to-square'></i></button>
                                  <button type='button' class='btn btn-danger'><i class='fa-solid fa-trash-can text-light'></i></button>
                             </td>";
                        echo "</tr>";
                    }
                    
                } else {
                    echo "<tr><td colspan='" . count($columns) . "'>0 results</td></tr>"; // Output if no results found
                }

                $conn->close(); // Close the database connection
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
      
    <div class="buttons d-flex align-content-end justify-content-end mt-3 px-2">
      <div class="page-of">Page <span id="current-page">1</span> of <span id="total-pages">1</span></div>
      <button id="prev-btn">Prev</button>
      <input type="number" id="page-number" min="1" max="1">
      <button id="next-btn">Next</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" style="--bs-modal-width: 1000px !important;" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header px-5">
                <h2 class="modal-title" id="addModalLabel">Create</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="process_form.php"> <!-- Specify the PHP script to handle form submission -->
                    <div class="tables container-fluid tbl-container d-flex flex-column justify-content-center align-content-center">
                        <div class="row tbl-fixed">
                            <table class="table-striped table-condensed" id="myTable">
                                <thead>
                                    <tr>
                                    <?php
                                      include '../connection/connect.php';

                                      $sql = "SELECT
                                      COLUMN_NAME AS department_name
                                      FROM INFORMATION_SCHEMA.COLUMNS
                                       WHERE TABLE_NAME = 'tblproduct_transaction'
                                       AND ORDINAL_POSITION >= 2;";
                                      $result = $conn->query($sql); // Execute the query

                                      if ($result && $result->num_rows > 0) {
                                          // Fetch column names from the database
                                          $columns = array();
                                          while ($row = $result->fetch_assoc()) {
                                              $columns[] = $row["department_name"];
                                              echo "<th class='text-center'>" . $row["department_name"] . "</th>";
                                          }
                                      } else {
                                          echo "<th>No results found</th>"; // Output if no results found
                                      }
                                    ?>
                                   </tr>
                                </thead>
                                <?php
                                  // Output empty input fields in the tbody
                                  echo "<tbody><tr>";
                                  if ($result && $result->num_rows > 0) {
                                      foreach ($columns as $index => $column) {
                                          // Check if it's the first column
                                          if ($index === 0) {
                                              echo "<td><input type='text' name='" . $column . "' required></td>";
                                          } else {
                                              echo "<td><input type='text' name='" . $column . "'></td>";
                                          }
                                      }

                                      
                                  } else {
                                      // Output a single cell spanning all columns if no results found
                                      echo "<td colspan='" . count($columns) . "'>No data available</td>";
                                  }
                                  echo "</tr></tbody>";
                                ?> 

                            </table>
                        </div>
                    </div>
                    <div class='form-group mb-3 mt-3 d-flex justify-content-end'>
                        <button type='button' class='btn btn-secondary mx-2' data-bs-dismiss='modal'>Close</button>
                        <button type='submit' name='submit_input' class='btn btn-primary'>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</html>