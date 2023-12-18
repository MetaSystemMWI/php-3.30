<?php 

include("conn.php");

if(count($_POST) > 0){
    mysqli_query($con, "UPDATE student_basic_info SET S.No='".$_POST['userid']."'
    ,Std_Name='".$_POST['std_name']."'
    ,Father_Name='".$_POST['f_name']."'
    ,Discipline='".$_POST['program']."' 
    WHERE S.No='".$_POST['userid']."'");
    $message = "Record Modify Successfully";
}

$result = mysqli_query($con, "SELECT * FROM student_basic_info
WHERE S.No = '".$_GET['id']."'");

$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" name="frmUser">
    <div>
        <?php if(isset($message)){ echo $message; } ?>
    </div>
    S.No  : <br>
       <input type="text" name="userid" value="<?php echo $row['userid']; ?>">
       Student Name : <br>
       <input type="text" name="std_name" value="<?php echo $row['std_name']; ?>">
       <br>
       Father Name : <br>
       <input type="text" name="f_name" value="<?php echo $row['f_name']; ?>">
       <br>
       Program : <br>
       <input type="text" name="program" value="<?php echo $row['program']; ?>">
       <br><br>
       <input type="submit" name="save" value="Submit">
    </form>
</body>
</html>