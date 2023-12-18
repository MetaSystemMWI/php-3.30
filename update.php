<?php
    include("conn.php");
    $res = mysqli_query($con, "SELECT * FROM student_basic_info");
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
        if(mysqli_num_rows($res) > 0){
    ?>

    <table>
        <tr>
            <td>S.No</td>
            <td>Student Name</td>
            <td>Father Name</td>
            <td>Program</td>
        </tr>
    <?php $i =0;
        while($row = mysqli_fetch_array($res)){
    ?>

    <tr>
        <td><?php echo $row["S.No"]; ?> </td>
        <td><?php echo $row["Std_Name"]; ?> </td>
        <td><?php echo $row["Father_Name"]; ?> </td>
        <td><?php echo $row["Discipline"]; ?> </td>
        <td><a href="Update_process.php?id=<?php echo $row["S.No"]; ?>">Update</a></td>
    </tr>
    <?php $i++;
        }
    ?>
    </table>
<?php }
else {
    echo "No Result Found";
    }
?>

</body>
</html>