<?php
    $servername = "localhost";
    $username = "id13698978_angelreyes";
    $password = "m]sT1DO*/$?v5(])";
    $dbname = "id13698978_granos";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
?>