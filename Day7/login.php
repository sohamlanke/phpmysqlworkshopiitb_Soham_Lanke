<?php
require 'school_connect.php';

?>

<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		form{
			margin-top: 10%;
		}
		a{
			color: #000000;
			text-decoration: none;
		}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body align="center" >
	<form  method="post" align="center">

		<h1>LOGIN PAGE</h1><br><br>
	
		<div class="form-group">
		<label>Username: </label><input type="text" name="username" placeholder="Username"><br>
		<label>Password: </label><input type="password" name="pass" placeholder="Password"><br>
		
		<label>Usertype: </label><select name="usertype">
			<option value="select">Select User Type</option>
			<option value="admin">Admin</option>
			<option value="student">Student</option>
		</select>
	</div>

		<br><br>
		<input class="btn btn-primary" type="submit" value="Login">
	   <a class="btn btn-primary" href="registrer.php" role="button">Register</a>


	</form>
<?php
if (isset($_POST['submit'])) {
session_start();
$uname=trim($_POST['username']);
$pass =trim($_POST['pass']);

$utype=$_POST['usertype'];
if ($utype=='select'||$uname==""||$pass=="") {
echo "<br>Some fields are empty";
}
else if($utype=='admin'&&$uname=='admin' && $pass=='admin'){
	$_SESSION['username'] = $uname;
    header('Location: admin.php');
	
}
else{
	$result = "SELECT `roll`,`pass` FROM student WHERE `roll`='$uname'";
    $query = mysqli_query($conn,$result);
    $count = mysqli_num_rows($query);

    if($count != 0)
    {
      while($row= mysqli_fetch_assoc($query)){
      $roll = $row['roll'];
      $password = $row['pass'];
  }

      if($uname== $roll && $pass==$password)
      {
        $_SESSION['username'] = $uname;
        header('Location: portal.php');
      }
      else
        echo "<br>Incorrect password ..Try again";
    }
    else
      die("<br>User does not exist");
}
}
?>
</body>
</html>