<?php
    include_once("Templates/header.php");
    include_once("Templates/nav.php");
    include_once("Templates/background.php");
?>
<body>
    <div class="wrapper">
        <form action="includes/insertdetails.php" method="post">
            <h1>Contact us</h1>
            <div class="input-box">
                <input type="text" id="first" name="first_name" placeholder="First name" required>
            </div>
            <div class="input-box">
                <input type="text" id="last" name="last_name" placeholder="Last name" required>
            </div>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <textarea rows="3.5" cols="50" name="message" class="form-control" id="message" placeholder="Write here ..." required></textarea>
            </div>
            
            <button type="submit" class="btn">Send</button>
        </form>

        <form action="includes/updatemessage.php" method="post">
            <h3>Update Message</h3>
            <div class="input-box">
                <input type="text" id="first" name="first_name" placeholder="First name" >
            </div>
            <div class="input-box">
                <input type="text" id="last" name="last_name" placeholder="Last name" >
            </div>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <textarea rows="3.5" cols="50" name="message" class="form-control" id="message" placeholder="Write here ..." required></textarea>
            </div>
            <button type="submit" class="btn">Update</button>
        </form>

        <form action="includes/deletedetails.php" method="post">
            <h3>Delete Message</h3>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <button type="submit" class="btn">Delete</button>
        </form>
        
    </div>
</body>
</html>
