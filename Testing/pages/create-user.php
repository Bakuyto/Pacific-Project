<?php
include 'create.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User Page</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <div class="conatiner_fluid">
    <nav class=" sticky-top top-0" style="background-color:white; z-index:999;">
      <ul>
        <li>
          <a href="main.php">Main</a>
        </li>
        <li>
          <a href="test.php">Test</a>
        </li>
        <li>
          <a class="active" href="#">Create</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row m-auto border text-center">
        <div class="box1 col-sm-12 col-lg-4 border">
          <div class="box-header">
            <div class="h1 mt-5">New Department</div>
            <form method="POST">
              <input name="department_name" class="form-control m-auto mt-5 border-black" style="width:80%;">
              <div class="save-but d-flex justify-content-center m-auto mt-5">
                <button type="submit" name="submit_department" style="background-color: var(--blue);"
                  class="btn fw-bolder mb-5 w-50">Save</button>
              </div>
            </form>
          </div>
          <div class="container">
            <div class="table-container tbl-fixed" style="height:90vh;">
              <table class="table table-bordered">
                <thead>
                  <tr class=" sticky-top top-0" style="z-index:1;">
                    <th class="border text-center" scope="col" style="background-color: var(--blue); height:50px;">
                      Department
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php include 'department.php' ?>  

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="box2 col-sm-12 col-lg-4 border">
          <div class="box-header">
            <div class="h1 mt-5">New Transaction</div>
            <form method="POST">
              <input name="column_name" class="form-control m-auto mt-5 border-black" style="width:80%;">
              <div class="save-but d-flex justify-content-center m-auto mt-5">
                <button type="submit" name="submit_transaction" style="background-color: var(--blue);"
                  class="btn fw-bolder mb-5 w-50">Save</button>
              </div>
            </form>
          </div>
          <div class="container">
            <div class="table-container tbl-fixed" style="height:90vh;">
              <table class="table table-bordered">
                <thead>
                  <tr class=" sticky-top top-0" style="z-index:1;">
                    <th class="border text-center" scope="col" style="background-color: var(--blue); height:50px;">
                      Transation
                    </th>
                  </tr>
                </thead>
                <tbody>

                    <?php include 'transaction.php' ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="box3 col-sm-12 col-lg-4 border">
          <div class="h1 mt-5">New User</div>
          <form method="POST">
            <label for="exampleInputEmail1" class="form-label text-start w-75">FullName</label>
            <input name="user_full_name" class="form-control m-auto mb-3 border-black" style="width:80%;" required>
            <label for="exampleInputEmail1" class="form-label text-start w-75">Username</label>
            <input name="user_log_name" class="form-control m-auto mb-3 border-black" style="width:80%;" required>
            <label for="exampleInputEmail1" class="form-label text-start w-75">Password</label>
            <input name="user_log_password" class="form-control m-auto mb-3 border-black" style="width:80%;" required>
            <label for="exampleInputEmail1" class="form-label text-start w-75">User Level</label>
            <input name="user_level_fk" class="form-control m-auto mb-3  border-black" style="width:80%;" required>
            <select name="user_department_fk" class="form-select m-auto mb-3"
              style="width:80%;max-height:20vh; overflow-y:scroll;" aria-label="Default select example">
              <option class="text-dark" selected>Select Department</option>

              <?php
                    include 'connect.php';
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

            </select>
            <div class="save-but d-flex justify-content-center m-auto">
              <button type="submit" name="submit_user" style="background-color: var(--blue);"
                class="btn fw-bolder mb-5 w-50">Save</button>
            </div>
          </form>

          <div class="container">
            <div class="table-responsive" style="height:40vh;">
              <table class="table table-bordered">
                <thead>
                  <tr class="sticky-top top-0" style="z-index:1;">
                    <th class="border text-center" scope="col" style="background-color: var(--blue); height:50px;">
                      User List
                    </th>
                  </tr>
                </thead>
                <tbody>

                    <?php include 'user-list.php'?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>



  </div>


 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method='POST' action="code.php">
                <?php
                include 'connect.php';
                
                $departmentPk = '9';
                // Query to fetch checked department names from the database
                $checked_values_query = "SELECT product_tran_name_str,department_fk FROM tblproductadjustpermission where department_fk = $departmentPk";
                $checked_values_result = $conn->query($checked_values_query);

                // Initialize $checked_values array
                $checked_values = array();

                // Check if the query was successful and rows were returned
                if ($checked_values_result && $checked_values_result->num_rows > 0) {
                    // Loop through the fetched rows and populate $checked_values array
                    while ($row = $checked_values_result->fetch_assoc()) {
                        $checked_values[] = $row['product_tran_name_str'];
                    }
                }

                $sql = "CALL Load_All_Transaction"; 
                $result = $conn->query($sql); // Execute the query

                if ($result && $result->num_rows > 0) {
                    // Output the hidden input field for department_pk
                    echo "<input type='hidden' name='department_pk' id='department_pk_input' value='department_pk'>";

                    // Loop through your checkboxes and output them
                    while ($row = $result->fetch_assoc()) {
                        $checkbox_value = $row["department_name"];
                        $checked = in_array($checkbox_value, $checked_values) ? 'checked' : ''; // Check if the checkbox value exists in the checked values array

                        echo "<div class='form-group mb-3 d-flex justify-content-between'>
                                  <label>$checkbox_value</label>
                                  <input class='form-check-input' type='checkbox' name='brands[]' value='$checkbox_value' $checked>
                              </div>";
                    }
                } else {
                    echo "<label>No results found</label>"; // Output if no results found
                }
                ?>

                            <div class='form-group mb-3 d-flex justify-content-end'>
                                <button type='button' class='btn btn-secondary mx-2' data-bs-dismiss='modal'>Close</button>
                                <button type='submit' name='save_multiple_checkbox' class='btn btn-primary'>Submit</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="deleteModalLabel">Confirm Transaction Deletion</h5>
          <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this transaction?</p>
          <form id="deleteTransactionForm" class="d-flex justify-content-center" method="POST">
            <input type="hidden" name="transactionToDelete" id="transactionToDelete">
            <button type="button" class="btn btn-secondary mx-1" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="submit_delete_transaction" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/create-user.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  document.querySelectorAll('.plus-btn').forEach(button => {
    button.addEventListener('click', function () {
      var departmentName = this.getAttribute('data-department-name');
      var modalTitle = document.querySelector('#exampleModal .modal-title');
      modalTitle.textContent = departmentName;
      modalTitle.id = ""; // Clear the ID first
      modalTitle.id = this.parentNode.id; // Set the ID based on the department ID
    });
  });
</script>
<script>
  $(document).ready(function () {
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var department_pk = button.data('department-pk');
      var modal = $(this);
      modal.find('#department_pk_input').val(department_pk);
    });
  });
</script>

</html>