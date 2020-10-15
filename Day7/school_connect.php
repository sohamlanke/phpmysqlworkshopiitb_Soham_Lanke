<?php

$conn = mysqli_connect("localhost:3307","root","root") or die(mysqli_connect_error());
mysqli_select_db($conn,"school") or die(mysqli_error($conn));

echo "Connected!! <br>";
?>