<?php
require_once("dbconnect.php");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the necessary fields are set and not empty
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['username'], $_POST['message'])) {
        // Retrieve form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $message = $_POST['message'];

        // Prepare the SQL statement
        $update_message = "UPDATE contactm SET first_name='$first_name', last_name='$last_name', message='$message' WHERE username='$username'";

        // Execute the statement
        if ($conn->query($update_message) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $update_message . "<br>" . $conn->error;
        }
    } else {
        echo "Error: Missing required form fields.";
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



