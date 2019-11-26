<?php
include "include/header.php";
include "include/connect.php";
?>
<!-- Log In -->
<div id="loginbox">
	<hr>
	<form action="login.php" method="post">
  <div class="form-group">
  	<h1 style="text-align: center;">Login</h1>
    <label for="email">Email:</label>
    <input name="email" type="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input name="password" type="password" class="form-control">
  </div>
  <button name="login" type="submit" class="btn btn-default">Submit</button>
  <div class="container register">
    <p>Don't have an account? <a href="register.php">Register</a>.</p>
  </div>
</form>
<hr>
<?php

      if(isset($_POST['login'])){
         //echo '<script type="text/javascript"> alert("Logged in xD !!")</script>';
         $email=$_POST['email'];
         $password=$_POST['password'];

         $query = "SELECT * FROM login WHERE email = '$email' AND password = ('$password')";

         $query_run = mysqli_query($con,$query);

         if (mysqli_num_rows ($query_run) > 0) {
            //vaild
            $_SESSION['email']=$email;
            header('location:reghome.php');
         }
         else {
            //Invaild
            echo '<script type="text/javascript"> alert("Invaild User")</script>';
         }


      }

mysqli_close($con);

    ?>
  </div>
