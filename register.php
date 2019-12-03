<?php
include "include/header.php";
include "include/connect.php";
?>
	<!-- Form -->
	<h1 style="text-align: center; ">Register</h1>

	<form action="register.php" method="post">
  	<div class="container">
    <p>Please fill this form</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input name="register" type="submit" class="btn btn-primary" value="Register">
	</div>
  <div class="container login">
    <p>Already have an account? <a href="login.php">Log In</a></p>
  </div>
  </form>

<?php

   if (isset($_POST['register'])) {
     //echo '<script type="text/javascript"> alert("review button click")</script>';

     $query = "INSERT INTO login(name,email,password) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')";

     $query_run = mysqli_query ($con, $query) ;

     if ($query_run) {
        echo '<script type="text/javascript"> alert("Thank You for your registration.")</script>';
     }
     else {
        echo '<script type="text/javascript"> alert("!! ERROR !!")</script>';
     }
   }

mysqli_close($con);

    ?>
