<?php
    include_once("Templates/header.php");
    include_once("Templates/nav.php");
    include_once("Templates/background.php")
?>
<body  >
    
           
    <div class = "wrapcover">
        <form action = "">
        <h1> Register</h1>
        <div class = "inputbox">
                <input type = "text" placeholder = "First name " required>
                
            </div>
            <div class = "inputbox">
                <input type = "text" placeholder = "Last name " required>
                
            </div>

            <div class="inputbox">
                <input type="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>

            
            <button type="submit" class="btn">Register</button>

            <div class="login-link">
                <p> Don't have an account? <a href="login.php">Login</a>

                </p>
            </div>
        </form>
    </div>
    


</body>
</html>