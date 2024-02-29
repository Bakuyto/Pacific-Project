<?php
include 'redirect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
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
          <input type="number" id="row" style="width:60px; height: 40px;" class="form-control"/>
          <button type="button" class="btn btn-success" id="filter">Filter</button>
        </div>
        
      </div>
      
    <section>
      <div class="tables container-fluid tbl-container d-flex flex-column justify-content-center align-content-center">
        <div class="row tbl-fixed">
          <table class="table-striped table-condensed" id="myTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Hot Selling&Potential Models</th>
                <th>ETA </th>
                <th>RMA</th>
                <th>Consignment Stock</th>
                <th>Stock</th>
                <th>Show room</th>
                <th>Pre-Order</th>
                <th>Current Stock </th>
                <th>ATS</th>
                <th>Stock Level</th>
                <th>Av for Last 3or6 Mths</th>
                <th>2024.12 sales</th>
                <th>2024.11 sales</th>
                <th>2024.10 sales</th>
                <th>2024.09 sales</th>
                <th>2024.08 sales</th>
                <th>2024.07 sales</th>
                <th>2024.06 sales</th>
                <th>2024.05 sales</th>
                <th>2024.04 sales</th>
                <th>2024.03 sales</th>
                <th>2024.02 sales</th>
                <th>2024.01 sales</th>
              </tr>
            </thead>
            <tbody id="table-body">
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
              <tr>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
                <td contenteditable="true">1</td>
              </tr>
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

</body>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</html>