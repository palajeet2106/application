<?php
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="container login-container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form method = "post" action="function.php" id = "form">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name ="username" id="username" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name ="password" id="password" placeholder="Password">
              </div>
              <input type="submit" class="btn btn-primary" value="Login">
              <input type="hidden" class="btn btn-primary" name = "login" value="Login">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
</body>
<script>
        $(document).ready(function() {
            $('#form').submit(function(e) {
                e.preventDefault();
                let username = $('#username').val();
                let password = $('#password').val();

                $.ajax({
                    type: 'POST',
                    url: 'function.php',
                    data: {
                        username: username,
                        password: password,
                        cmd: "login"
                    },
                    success: function(res) {

                        if(res=='success'){
                            alert(res)
                            window.location.href = 'index.php';
                        }else {
                            alert(res);
                        }
                        $("#loginForm").trigger('reset');
                    }
                });
            });
        });
    </script>
</html>
