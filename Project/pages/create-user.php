<?php include '../config/config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User Page</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/create-user.css">
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

                  <?php include '../partitial/department.php' ?>


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

                <?php include '../partitial/transaction.php' ?>

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

              <?php include '../partitial/select_department.php' ?>

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

                <?php include '../partitial/user-list.php' ?>
                
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
            <form method='POST'>
              <?php include '../partitial/modal-department.php';?>
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
            <input type="text" name="transactionToDelete" id="transactionToDelete">
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
<script src="../js/style.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>





