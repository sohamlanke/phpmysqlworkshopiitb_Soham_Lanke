<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    input{margin:5px;}</style>
</head>
<body>
    <form action="" method="post">
    
    Enter a String <input type="text" name="string">
    <br/>
    <input type="submit" value="submit">
    <hr/>
    <?php
    $string = (isset($_POST['string']) ? $_POST['string'] : null);
        // if (isset($_POST['submit'])) {

            if(!empty($string)){  
                $String=$_POST['string'];
                $len =strlen($String);
                $split=str_split($String,1);
                $reverse=strrev($String);
                $low=strtolower($String);
                $upper=strtoupper($String);
                $substring="_";
                $replace=str_replace(" ","$substring","$String");
                echo "The String entered is : " .$String;
                echo "<br/>";
                echo "Number of Characters are : ".$len;
                echo "<br/>";
                echo "String Split into array : ";
                print_r($split);
                echo "<br/>";
                echo "Reversed String : ".$reverse;
                echo "<br/>";
                echo "Alphabets present in String to lower case : ".$low;
                echo "<br/>";
                echo "Alphabets present in String to upper case : ".$upper;
                echo "<br/>";
                echo "Space is replaced with _ : ",$replace;
                }
            

                else echo "Input String";   
        // }
    
    
    
    
    
    ?>
    </form>

</body>
</html>