<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $Gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
     $query = "INSERT INTO project (fname, lname, gender, cnum, address, email, pass) VALUES ('$firstname', '$lastname', '$Gender', '$num', '$address', '$gmail', '$password')";

        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Registration Failed')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Please Enter some valid Information')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="signup">
          <h1>Signup</h1>
          <h4>It's free and only takes a minute</h4>
          <form method="POST">
             <label>First Name</label>
             <input type="text" name="fname" required>
             <label>Last Name</label>
             <input type="text" name="lname" required>
             <label>Gender</label>
             <input type="text" name="gender" required>
             <label>Contact Number</label>
             <input type="tel" name="number" required>
             <label>Address</label>
             <input type="text" name="add" required>
             <label>Email</label>
             <input type="email" name="mail" required>
             <label>Password</label>
             <input type="password" name="pass" required>
             <input type="submit" value="Submit">
          </form>
          <p>By clicking the Sign Up button, you agree to our
          <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a>
          </p>
          <p>Already have an account? <a href="login.php">Login here</a></p>
     </div>
</body>
</html>
