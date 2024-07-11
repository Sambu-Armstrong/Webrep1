<?php
    require_once("dbconnect.php");

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $message = $_POST['message'];

        // Prepare the SQL statement
        $insert_message = "INSERT INTO contactm (first_name, last_name, username, message) VALUES ('$first_name', '$last_name', '$username', '$message')";

        // Execute the statement
        if ($conn->query($insert_message) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert_message . "<br>" . $conn->error;
        }

        // Close the connection
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button onclick="history.back()">Back</button>
</body>
</html>
