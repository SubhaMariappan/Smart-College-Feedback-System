<?php
session_start();

include 'includes/db.php';

if(isset($_POST['login'])){

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){

        $user = mysqli_fetch_assoc($result);

        
        if (
            password_verify($password, $user['password']) ||
            $password === $user['password']
        ){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            if($user['role'] == 'Admin'){

                header("Location: admin.php");
                exit();

            }else{

                header("Location: dashboard.php");
                exit();

            }

        }else{

            echo "<script>alert('Incorrect Password');</script>";

        }

    }else{

        echo "<script>alert('Email not found');</script>";

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Smart College Feedback & Survey Management System</title>

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
<li><a href="register.php">Register</a></li>
</ul>

</nav>

<section class="form-section">

<div class="form-container">

<h2>Student Login</h2>

<p>Login to access active college feedback forms.</p>

<form action="" method="POST">

<div class="input-box">

<label>Email Address</label>

<input type="email" name="email" placeholder="Enter your email" required>

</div>

<div class="input-box">

<label>Password</label>

<input type="password" name="password" placeholder="Enter password" required>

</div>

<button type="submit" name="login" class="login-btn">

Student Login

</button>

</form>

<p class="login-link">

Don't have an account?

<a href="register.php">Register Here</a>

</p>

</div>

</section>

</body>
</html>