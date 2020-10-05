<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET">
Enter A Character<input type="text" name="ch"/><br/>
<input type="submit"/>
<hr/>

</form>
</body>
</html>


<?php

if(isset($_GET['ch'])){
$char=$_GET['ch'];

switch ($char) {
    case 'a':
    case 'A':    
        echo 'Vowel : A';
        break;
    case 'e':
    case 'E':    
        echo 'Vowel : E';
        break; 
    case 'i':
    case 'I':
        echo 'Vowel : I';            
        break;
    case 'o':
    case 'O':    
        echo 'Vowel : O';
        break; 
    case 'u':
    case 'U':    
        echo 'Vowel : U';
        break;       
    default:
        echo 'Consonant.';
        break;
}
}
?>