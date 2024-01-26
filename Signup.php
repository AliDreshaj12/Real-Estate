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
            <form action="Projekti.html" onsubmit="return validateForm()">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="username" placeholder="username" >
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" placeholder="email">
                    </div>

                    <div class="input-field">
                        <i class="fa-saolid fa-lock"></i>
                        <input type="password" id="password" placeholder="password" >
                    </div>
                    <p>Lost password <a href="#">Click Here</a></p>
                    <p>Already a member?<a href="Login.html">Login</a></p>
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