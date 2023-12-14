<?php 
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:2px solid black;
            width:100%;
        }
        td{
            border:2px solid black;
            padding:8px; 
        }
    </style>
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
          
        }
    ?>

<?php 
    $result = mysqli_query($con, "SELECT * FROM student_basic_info");
    if(mysqli_num_rows($result)>0){
?>
    <table>
        <tr>
            <td>S.No</td>
            <td>Student Name</td>
            <td>Father Name</td>
            <td>Program</td>
         </tr>  
         <?php 
            $i=0;
            while($row = mysqli_fetch_array($result)){
         ?>  
         <tr>
            <td><?php echo $row['S.No']; ?></td>
            <td><?php echo $row['Std_Name']; ?></td>
            <td><?php echo $row['Father_Name']; ?></td>
            <td><?php echo $row['Discipline']; ?></td>
        </tr>
        <?php 
        $i++;
         }
        ?>
    </table>
<?php } else{
    echo "No Result Found";
}
mysqli_close($con);
?>

</body>
</html>