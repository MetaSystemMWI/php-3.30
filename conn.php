<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "students_information_college";
    $con = mysqli_connect($localhost, $username, $password, $dbname);
    if(!$con){
        die("Could not connect my sql:". mysql_error());
    }
?>