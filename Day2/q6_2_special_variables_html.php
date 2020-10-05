<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form input{
        margin: 5px;
        
    }
</style>
<body>
    
<form action="" method="get">
Name : <input type="text" name="name"/><br/>
Subject 1 : <input type="text" name="Subject1"/><br/>
Subject 2 : <input type="text" name="Subject2"/><br/>
Subject 3 : <input type="text" name="Subject3"/><br/>
Subject 4 : <input type="text" name="Subject4"/><br/>
Subject 5 : <input type="text" name="Subject5"/><br/>
<input type="submit"/>
<hr/>
</form>
</body>
</html>



<?php
$name = (isset($_GET['name']) ? $_GET['name'] : null);
$Subject1 = (isset($_GET['Subject1']) ? $_GET['Subject1'] : null);
$Subject2 = (isset($_GET['Subject2']) ? $_GET['Subject2'] : null);
$Subject3 = (isset($_GET['Subject3']) ? $_GET['Subject3'] : null);
$Subject4 = (isset($_GET['Subject4']) ? $_GET['Subject4'] : null);
$Subject5 = (isset($_GET['Subject5']) ? $_GET['Subject5'] : null);

if(!empty($name || $Subject1 || $Subject2 || $Subject3 || $Subject4 || $Subject5))
{   
    if(is_numeric($Subject1) && is_numeric($Subject2) && is_numeric($Subject3) && is_numeric($Subject4) && is_numeric($Subject5) && $Subject1<=100 && $Subject2<=100 && $Subject3<=100 && $Subject4<=100 && $Subject5<=100 )
    {
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
        echo "Subject 5 : " ,$Subject5;
        echo "<br>";
        $totalObtained = $Subject1 + $Subject2 + $Subject3 + $Subject4 + $Subject5;
        echo "Total Marks Obtained : " ,$totalObtained;
        echo "<br>";
        $total = 500;
        echo "Total Marks  : ",$total;
        echo "<br>";
        $percentage = ($totalObtained / $total) * 100 ;
        echo "Percentage : ",$percentage;
    }    
    else{
        echo "Enter Numeric Values less than 100 for The Subject Marks";
    }
}
else
{
    echo "Please Enter all the values";
}


?>