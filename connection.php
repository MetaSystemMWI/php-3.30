<?php

$userName = "root";
$localhost = "localhost";
$password = "";
$database = "students_information_college";
$con = mysqli_connect($localhost, $userName, $password,$database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $query = "SELECT * FROM `student_basic_info`";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)){
            echo $row['S.No']."<br>";
            echo $row['Std_Name']."<br>";
            echo $row['Father_Name']."<br>";
            echo $row['Discipline']."<br>";
        }
    ?>
</body>
</html>