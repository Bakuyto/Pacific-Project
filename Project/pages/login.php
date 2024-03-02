<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <form class="login container-fluid border" action="login.php" method="POST" id="login-user">
        <div class="form">
            <div class="mb-3">
                <div class="form-header"><h1 class="text-center mb-3">Login Form</h1></div>
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" >
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <div class="bottom-but w-100 d-flex align-content-center justify-content-center">
                <button class="btn btn-primary mt-2" type="submit" value="login">SIGN IN</button>
            </div>
        </div>
      </form>

</body>

<script src="../js/bootstrap.min.js"></script>
<script src="../js/style.js"></script>
</html>