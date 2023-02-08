<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "forever";

    // Create Connection 

    $conn = mysqli_connect($servername, $username, $password, $databasename);

    // Get Connection 


    if ($conn === false) {
            echo "no database is selected";
    }

    $a = $_REQUEST['name'];
    $b = $_REQUEST['address'];

    $sql = "INSERT INTO student(sname, saddress) VALUES ('$a', '$b')";


    if(mysqli_query($conn, $sql)){
        
    }




?>