<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    include('../Assignment1/connection.php');
   //  session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($db, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($db, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ../homepage/index2.html");
        } else {
             header("Location: error.php");
        }
    } else {



?>
    <form class="form" method="post" name="login">
        <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
       <div class="sidenav">
         <div class="login-main-text">
            <img src="codered.jpg" >
            <h4>   Application <br> Login page </h4>
            <br>
            <p style="text-align:center">Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" name="username" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password"  class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" name="submit" class="btn btn-black">Login</button>
                  <button1  onclick="location.href='registration.php'" name="submit2" class="btn btn-secondary">Register</button>

               </form>
            </div>
         </div>
      </div>
    </div>
  </form>
<?php
    }
?>
</body>
</html>

