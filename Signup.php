<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['psw'])){
        $user_name = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['psw'];

        if(!empty($email) && !empty($pass) && !is_numeric($email)){
            
            $query = "INSERT INTO form (username, email, psw) VALUES ('$user_name', '$email', '$pass')";

            mysqli_query($con, $query);
            echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Please Enter Valid Information')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Please Fill in All Fields')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing In and Sing Up</title>
    <link rel="stylesheet" href="Login.css">
    <script src="https://kit.fontawesome.com/6fb8408690.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form  onsubmit="return validateForm()" method="POST">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="username" name="username" placeholder="username">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="email">
                    </div>

                    <div class="input-field">
                        <i class="fa-saolid fa-lock"></i>
                        <input type="password" id="password" name="psw" placeholder="password">
                    </div>
                    <p>Lost password <a href="#">Click Here</a></p>
                    <p>Already a member?<a href="Login.php">Login</a></p>
                </div>
                <div class="btn-field">
                    <button type="submit" id="signupBtn">Sign Up</button>
                    
                </div>
            </form>
        </div>

    </div>

    
    <script src="Login.js"></script>
</body>
</html>