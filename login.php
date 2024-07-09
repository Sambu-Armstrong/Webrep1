<?php
    include_once("Templates/header.php");
    include_once("Templates/nav.php");
?>

<body style=" background: url(Images/avenue.jpg) no-repeat;
              background-size: cover ;
              background-position: center;">


    <div class = "wrapper">
        <form action = "">
        <h1> Login</h1>
        <div class = "input-box">
                <input type = "text" placeholder = "Username " required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="rememberforgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password</a>
            </div>
            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p> Don't have an account? <a href="Register.php">Register</a>

                </p>
            </div>
        </form>
    </div>
</body>
</html>