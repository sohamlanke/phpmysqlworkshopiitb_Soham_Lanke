<?php
require 'school_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<style>
		form{
			margin-top: 5%;
		}
		a{
			text-decoration: none;
			color: #000000;
		}
	</style>
</head>
<body align="center">
	<form  method="post">
		<h1>Student Registration</h1>
		<table align="center">

	<tr>	<th><label>Full Name:</label></th><td><input type="text" name="name"></td></tr>
	<tr>	<th><label>    Age  :</label></th><td><input type="number" name="age"></td></tr>
	<tr>	<th><label>Standard :</label></th><td><input type="number" name="std"></td></tr>
	<tr>	<th><label>Division :</label></th><td><input type="text" name="div"></td></tr>
	<tr>	<th><label>Roll no.(eg.D301) </label></th><td><input type="text" name="roll"></td></tr>
		
		</table><br><br>
		<input type="submit" name="submit" value="Submit">
		<button>
		<a href="login.php">Back</a></button>
	</form>

<?php
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$age=$_POST['age'];
$std=$_POST['std'];
$div=$_POST['div'];
$roll=$_POST['roll'];
$result = mysqli_query($conn,"INSERT INTO `student`(`name`, `age`, `standard`, `division`, `roll`,`pass`) VALUES ('$name','$age','$std','$div','$roll','$roll')");
if($result){
	echo "<br>Regsitration Successful..";
}	
else{
	echo "<br>Registration failed..";
}

}
?>
</body>
</html>