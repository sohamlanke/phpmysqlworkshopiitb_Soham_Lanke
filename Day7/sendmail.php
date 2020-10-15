<?php
include 'school_connect.php';
session_start();
$roll=$_SESSION['username'];

$result="SELECT * FROM `student` WHERE `roll`='$roll'";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);
	
	while($res = mysqli_fetch_array($query)){
		$name=$res['name'];
		$php=$res['PHP'];
		$mysql=$res['MySQL'];
		$html=$res['HTML'];
		$tot=$res['total'];
		$per=$res['percent'];
		$stat=$res['status'];
		echo "<br><center><h4> Mail sent successfully</h4></center>";
		$mailto=$_SESSION['email'];
		$adminmail ="example@gmail.com";
		$subject="Final Exam Result of your Ward";
		$msg="Hello Sir/Madam,\n Final Exam Results has been declared.Your Ward Mr./Ms. $name are as follows:\nMarks Obtained:\nPHP: $php/100\nMYSQL: $mysql/100\nHTML: $html/100\nTOTAL: $tot/300\nPERCNETAGE: $per\nFINAL STATUS: $stat";
		$msg= wordwrap($msg,200);
		$headers="From: example@gmail.com";
		$headers1 ="From : $mailto";
		mail($mailto, $subject,$msg,$headers);

}
?>