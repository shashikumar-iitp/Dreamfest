<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css" >
    <script src="https://kit.fontawesome.com/0b784c4b49.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "header">
        <nav id="navbar" class="navbar-white">
            <img src="images/logo.png" class="logo">
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Popular Venues</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="#" class="register-btn">Register Now</a>
        </nav>

</div>
<div class="container">
    <form>
    <div class="form-box">
        <h1 id="title">Sign Up</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <p>Forgot Password <a href='#'>Click Here</a></p>
            </div>
            <div class="btn-field">
                <button type="button" id="signupBtn">Sign up</button>
                <button type="button" id="signinBtn" class="disable">Sign in</button>
            </div>
        </form>
    </div>

</div>
<script>
    let signupBtn = document.getElementById("signupBtn");
    let signipBtn = document.getElementById("signinBtn");
    let nameField = document.getElementById("nameField");
    let title = document.getElementById("title");


    signinBtn.onclick = function(){
        nameField.style.maxHeight = '0';
        title.innerHTML = "Sign In"
        signupBtn.classList.add("disable");
        signinBtn.classList.remove("disable");
    }
    signupBtn.onclick = function(){
        nameField.style.maxHeight = '60px';
        title.innerHTML = "Sign Up"
        signupBtn.classList.remove("disable");
        signinBtn.classList.add("disable");
    }
</script>

</body>
</html>
