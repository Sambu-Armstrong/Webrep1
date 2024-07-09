<?php
    include_once("Templates/header.php");
    include_once("Templates/nav.php");
?>
<body style="background: url('Images/avenue.jpg') no-repeat ;
            background-size: cover ;
            background-position: center;">
            
    <div class="wrapper">
    <form action="">
        <h1>Contact us</h1>
        <div class = "input-box">
            <input type = "text" placeholder = "First name " required>
            
        </div>
        <div class = "input-box">
            <input type = "text" placeholder = "Last name " required>
        </div>
        <div class = "input-box">
            <input type = "email" placeholder = "Email " required>
            
        </div>
        <div class="tarea">
            <textarea name="Message" class="from-control" placeholder="Write here ..." required></textarea>
        </div>
        
        <button type="submit" class="btn">Send</button>
        
    </form>
    </div>
</body>
</html>