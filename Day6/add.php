<?php
include 'school_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD STUDENT DETAILS</title>
	<style type="text/css">
		button a{
			text-decoration: none;
			color:#000000;
		}
	</style>
</head>
<body align="center">
	<form method="POST">
	<table align="center">
	<tr>	<th><label>Full Name:</label></th><td><input type="text" name="name"></td></tr>
	<tr>	<th><label>    Age  :</label></th><td><input type="number" name="age"></td></tr>
	<tr>	<th><label>Standard :</label></th><td><input type="number" name="std"></td></tr>
	<tr>	<th><label>Division :</label></th><td><input type="text" name="div"></td></tr>
	<tr>	<th><label>Roll no. </label></th><td><input type="text" name="roll"></td></tr>
	<tr> 	<th><label>PHP</label></th><td><input type="number" name="php"></td></tr>
	<tr> 	<th><label>MySQL</label></th><td><input type="number" name="mysql"></td></tr>
	<tr> 	<th><label>HTML</label></th><td><input type="number" name="html"></td></tr>
	

	</table>
	<br><br>
	<input type="submit" name="add" value="Add">
	<button><a href="admin.php">Back</a></button>
</form>
<?php
if (isset($_POST['add'])) {
$name=$_POST['name'];
$age=$_POST['age'];
$std=$_POST['std'];
$div=$_POST['div'];
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
$result = mysqli_query($conn,"INSERT INTO `student`(`name`, `age`, `standard`, `division`, `roll`, `pass`, `PHP`, `MySQL`, `HTML`,`total`, `out of`, `percent`,`status`) VALUES ('$name','$age','$std','$div','$roll','$roll','$php','$mysql','$html','$sum','$out','$per','$status')");
if($result){
	echo "<br>Details Added Successfully..";
}	
else{
	echo "<br>Add details Failed..";
}

}
?>
</body>
</html>