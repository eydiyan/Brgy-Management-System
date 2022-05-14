
<?php 
  session_start();
  include_once('db_connect.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin|Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
   <div class="card-header text-center">
  <p class="centered"><a href="../admin/profile/register.php"><img src="mainindex/logo/talisayan.png" class="img-circle" width="200"></a></p>
</div>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>ADMIN</b>&nbspLOGIN</h1>
    </div>
    <div class="card-body">
      <div class="text-center">
              <br />
              <br />
                                 
          </div>



 <?php 
  if(isset($_POST['login_btn']))
  {
        $email = $_POST["email_1"];
        $password = md5($_POST["passw_1"]);
        $query = " SELECT * FROM admin_barangay WHERE email='$email' AND password='$password'";
        $result = mysqli_query($db, $query);
        if ($result->num_rows >0)
        {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['email'] = $email;
            header('location: index.php');
        }
        else
        {
          $_SESSION['status'] = "ACCESS DENIED";
            header('Location: login.php');
        }
  }
  ?>


      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="email" name="email_1" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="passw_1" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <div class="card-header text-center">
      <button type="submit" name="login_btn" class="btn btn-primary btn-block text-center">Login</button>
    </div>
          <div class="col-4 text-center">
            
          </div>
          <!-- /.col -->

      </form>

  
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
