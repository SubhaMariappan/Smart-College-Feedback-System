<?php

include 'includes/db.php';

if(isset($_POST['register'])){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check password match
    if($password != $confirm_password){
        echo "<script>alert('Passwords do not match');</script>";
    }
    else{

        // Check duplicate email
        $check = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

        if(mysqli_num_rows($check) > 0){

            echo "<script>alert('Email already exists');</script>";

        }else{

            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert student
            $sql = "INSERT INTO users(name,email,password,role)
                    VALUES('$name','$email','$hashedPassword','Student')";

            if(mysqli_query($conn,$sql)){

                echo "<script>
                        alert('Registration Successful');
                        window.location='login.php';
                      </script>";

            }else{

                echo "<script>alert('Registration Failed');</script>";

            }

        }

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register |Smart College Feedback & Survey Management System </title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<nav>

<div class="logo">
<i class="fa-solid fa-square-poll-vertical"></i> PollSurvey
</div>

<ul>
<li><a href="index.php">Home</a></li>
<li><a href="login.php">Login</a></li>
</ul>

</nav>

<section class="form-section">

<div class="form-container">

<h2>Student Registration</h2>

<p>Register using your college email to participate in feedback surveys.</p>

<form action="" method="POST">

<div class="input-box">

<label>Student Name</label>

<input type="text" name="name" placeholder="Enter your full name" required>

</div>

<div class="input-box">

<label>Email Address</label>

<input type="email" name="email" placeholder="Enter your email" required>

</div>

<div class="input-box">

<label>Password</label>

<input type="password" name="password" placeholder="Create password" required>

</div>

<div class="input-box">

<label>Confirm Password</label>

<input type="password" name="confirm_password" placeholder="Confirm password" required>

</div>

<button type="submit" name="register" class="register-btn">

Create Account

</button>

</form>

<p class="login-link">

Already Registered?

<a href="login.php">Login Here</a>

</p>

</div>

</section>

</body>
</html>