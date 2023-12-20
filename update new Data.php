<?php
include_once 'conn.php';
$result = mysqli_query($conn,"SELECT * FROM student_basic_info");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>S No</td>
		<td>Student Name</td>
		<td>Father Name</td>
		<td>Program</td>
		
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["S.No"]; ?></td>
		<td><?php echo $row["Std_Name"]; ?></td>
		<td><?php echo $row["Father_Name"]; ?></td>
		<td><?php echo $row["Discipline"]; ?></td>
		<td><a href="update_process.php?id=<?php echo $row["S.No"]; ?>">Update</a> |</td>
		<td><a href="delete.php?id=<?php echo $row["S.No"]; ?>">Delete</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>