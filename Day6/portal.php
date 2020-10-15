<?php
	include 'school_connect.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>RESULT PORTAL</title>
</head>
<body align="center">
	<h1>Result of <?php echo $_SESSION['username'];?></h1>
	
	<button><a href="logout.php">LOGOUT</a></button> 


<?php
$roll=$_SESSION['username'];


$result="SELECT * FROM `student` WHERE `roll`='$roll'";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);
	
	while($res = mysqli_fetch_array($query)){
?>
	<table align="center">
		<tr><th>Name</th><td><?php echo $res['name'];?></td></tr>
		<tr><th>Std & Div</th><td><?php echo $res['standard']."-".$res['division'];?></td></tr>
		<tr><th>Roll No.</th><td><?php echo $res['roll'];?></td></tr>
		<tr><th>PHP</th><td><?php echo $res['PHP'];?></td></tr>
		<tr><th>MySQL</th><td><?php echo $res['MySQL'];?></td></tr>
		<tr><th>HTML</th><td><?php echo $res['HTML'];?></td></tr>
		<tr><th>Total obtained</th><td><?php echo $res['total'];?></td></tr>
		<tr><th>Out of</th><td><?php echo $res['out of'];?></td></tr>
		<tr><th>Percentage</th><td><?php echo $res['percent'];?></td></tr>
		<tr><th>Status</th><td><?php echo $res['status'];?></td></tr>
		

	</table>
		

<?php
	}
	?>
</body>
</html>