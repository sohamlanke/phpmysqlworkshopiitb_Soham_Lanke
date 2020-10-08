<?php

require ("connect.php");

$sql = "SELECT * FROM class1  where name='Rohan'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $name=$row["name"];
    $Subject1=$row["sub1"];
    $Subject2=$row["sub2"];
    $Subject3=$row["sub3"];
    $Subject4=$row["sub4"];
    $olds5=$row["sub5"];
    $marksobtain=$row["totalobtained"];
    
    $s5=99;
    $totalObtained=$marksobtain+$s5-$olds5;
    $percentage=($totalObtained/500 )*100;
    $sql = "UPDATE class1 SET sub5=$s5 ,totalobtained=$totalObtained,percent=$percentage WHERE name='Rohan'";

    echo "Name of Student : " ,$name;
    echo "<br>";
    echo "Marks in Each Subject";
    echo "<br>";
    echo "Subject 1 : " ,$Subject1;
    echo "<br>";
    echo "Subject 2 : " ,$Subject2;
    echo "<br>";
    echo "Subject 3 : " ,$Subject3;
    echo "<br>";
    echo "Subject 4 : " ,$Subject4;
    echo "<br>";
    echo "Subject 5 : " ,$s5;
    echo "<br>";
    echo "Total Marks Obtained : " ,$totalObtained;
    echo "<br>";
    echo "Total Marks  : 500";
    echo "<br>";
    echo "Percentage : ",$percentage;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "Record updated successfully";
    } 
    else {
        echo "Error updating record: " . mysqli_error($conn);
    }
  }
} 
else {
  echo "No results";
}

mysqli_close($conn);




?>