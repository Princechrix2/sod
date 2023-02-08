<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "Forever";

    // Create Connection 

    $conn = mysqli_connect($servername,$username,$password,$databasename);

    // Get Connection 


    if ($conn === false) {
            echo "no database is selected";
    }

    $a = $_REQUEST['name'];
    $b = $_REQUEST['address'];

    $ssql = "INSERT INTO student(sname, saddress) VALUES ('$a', '$b')";

    $run = mysqli_query($conn, $ssql);

    if($run){ 
        echo "<h3> data is successfully stored in database </h3>";

    } else {
        echo "Faild to insert!!";
    }




?>