<?php
include_once 'conn.php';
if(count($_POST)>0) {
    $sn= $_POST['userid'];
    $stdn = $_POST['first_name'];
    $fname = $_POST['last_name'];
    $prog = $_POST['city_name'];
mysqli_query($conn,"UPDATE `student_basic_info` 
SET `S.No`='$sn',
`Std_Name`='$stdn',
`Father_Name`='$fname',
`Discipline`='$prog' 
WHERE `S.No`='$sn'");
$message = "Record Modified Successfully";
}
$sn = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM student_basic_info WHERE `S.No`='$sn'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="update.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['S.No']; ?>">
<input type="text" name="userid"  value="<?php echo $row['S.No']; ?>">
<br>
First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['Std_Name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row['Father_Name']; ?>">
<br>
City:<br>
<input type="text" name="city_name" class="txtField" value="<?php echo $row['Discipline']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>