<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "";

    try{
        $conn = new mysqli($servername, $username, $password, $db_name);
    }catch( mysqli_sql_exception){
        echo"Couldn't connect";
    }
    
?>