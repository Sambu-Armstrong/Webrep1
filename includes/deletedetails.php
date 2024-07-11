<?php
require_once("dbconnect.php");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the necessary fields are set and not empty
    if (!empty($_POST['username'])) {
        // Retrieve form data
        $username = $_POST['username'];

        // Prepare the SQL statement
        $delete_message = "DELETE FROM contactm WHERE username='$username'";

        // Execute the statement
        if ($conn->query($delete_message) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $delete_message . "<br>" . $conn->error;
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

