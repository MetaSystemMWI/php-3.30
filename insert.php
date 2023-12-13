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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
       Student Name : <br>
       <input type="text" name="std_name">
       <br>
       Father Name : <br>
       <input type="text" name="f_name">
       <br>
       Program : <br>
       <input type="text" name="program">
       <br><br>
       <input type="submit" name="save" value="Submit">
    </form>


    <?php
        if(isset($_POST['save'])){
            $std_nam = $_POST['std_name'];
            $f_name = $_POST['f_name'];
            $prog = $_POST['program'];
            $query = "INSERT INTO `student_basic_info`(Std_Name, Father_Name, Discipline) 
            VALUES ('$std_nam','$f_name','$prog')";  
            if(mysqli_query($con, $query)){
                echo "New Record Inserted Successfully";
            }else{
                echo "Error :".mysqli_error($con);
            }
            mysqli_close($con);
        }
    ?>

</body>
</html>