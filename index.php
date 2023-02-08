<?php

$con = mysqli_connect("localhost", "root","","Forever");

if($con) {
  echo "The connection is successfully created";
} else {
  echo "No database selected";
}


?>