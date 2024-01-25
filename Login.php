<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_name = $_POST['username'];
        $passw = $_POST['psw'];

        if(!empty($user_name) && !empty($passw) && !is_numeric($user_name)){
            $query= "Select * From form where username = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result){

                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);



                    if($user_data['psw'] == $passw){
                        session_start();
                        $_SESSION['name'] = $user_data['username'];
                        $_SESSION['roli'] = $user_data['roli'];

                        header("location:home-page.php");
                        die;

                    }
                }
            }
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
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
            <h1 id="title">LOGIN</h1>
            <form action="Projekti.html" onsubmit="return validateForm2()">
                <div class="input-group">
                    <div class="input-field" id="nameField" >
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="username" placeholder="username" >
                    </div>
                    
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="psw" placeholder="password" >
                    </div>
                    <p>Lost password <a href="#">Click Here</a></p>
                    <p>Not a member? <a href="Signup.html">Sign Up</a></p>
                </div>
                <div class="btn-field">
                    <button type="submit" id="signupBtn">Login</button>
                    
                </div>
            
        </div>
    </div>
    
    <script src="Login.js"></script>
    
</body>
</html>
