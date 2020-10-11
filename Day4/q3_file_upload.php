<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post" enctype="multipart/form-data">  
    Upload File<input type="file" name="file">
    <br/>
    <input type="submit" value="submit">
    <hr/>
<?php
    if(!empty($_FILES))
    {
    $name= $_FILES["file"]["name"];
    $type= $_FILES["file"]["type"];
    $size= $_FILES["file"]["size"];
    $temp= $_FILES["file"]["tmp_name"];
    $error= $_FILES["file"]["error"]; 
    echo "Name : ".$name;
    echo "<br/>";
    echo "Type : ".$type;
    echo "<br/>";
    echo "Size : ".$size;
    echo "<br/>";
    if ($error > 0)
        die("Error uploading file! code $error.");
    else
    {
        if($size > 2000000)
        {
        die("File size too big!");
        }
        else
        {
        move_uploaded_file($temp, "uploaded/" .$name);
        echo "Upload complete!"; 
        }
    }
    }
    else echo "Please Upload a File";

?>    


</body>
</html>