<?php
include 'school_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE STUDENT DETAIL</title>
</head>
<body align="center">
<h1>Update</h1>
<form align="center" method="POST">
<table align="center">
<tr>	<th><label>Roll no. </label></th><td><input type="text" name="roll"></td></tr>
	<tr> 	<th><label>PHP</label></th><td><input type="number" name="php"></td></tr>
	<tr> 	<th><label>MySQL</label></th><td><input type="number" name="mysql"></td></tr>
	<tr> 	<th><label>HTML</label></th><td><input type="number" name="html"></td></tr>
</table>
	<br><br>
	<input type="submit" name="update" value="Update">
	<button><a href="admin.php">Back</a></button>

<?php
if (isset($_POST['update'])) {
$roll=$_POST['roll'];
$php=$_POST['php'];
$mysql=$_POST['mysql'];
$html=$_POST['html'];
$sum=$php+$mysql+$html;
$out=300;
$per=($sum/$out)*100;

if($per>60){
	$status="DISTINCTION";
}
elseif($per<35){
	$status="FAIL";
}
else{
	$status= "PASS";
}
$sql = mysqli_query($conn,"UPDATE `student` SET `PHP`='$php',`MySQL`='$mysql',`HTML`='$html',`total`='$sum',`out of`='$out',`percent`='$per',`status`='$status' WHERE `roll`='$roll'");

if($sql){
	echo "<br>Record Updated Successfully";
}
else{
	echo "<br>Not Updated";
}

}
?>
</form>
</body>
</html>