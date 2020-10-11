<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>input{
        margin :5px;
    }</style>
</head>
<body>
    <form action="" method="post">
    Enter Username <input type="text" name="name">
    <br>
    Enter Password <input type="password" name="password">
    <br>
    <input type="submit" name="submit">
    </form>

    <?php
    require ("connect.php");

    if(isset($_POST['submit'])){

        $name=(isset($_POST['name']) ? $_POST['name'] : null );
        $password=(isset($_POST['password']) ? $_POST['password'] : null );
        
        
        if(!empty($name && $password)){

            $compare = "SELECT * FROM users where username='$name'";
            $result = mysqli_query($conn, $compare);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $stored_name=$row["username"];
                    if($stored_name === $name){
                        die ("Username already taken");
                        // mysqli_close($conn);
                    }            
                }
            }
            $password=md5($password);
            $sql="INSERT into users (username,enc_password) VALUES('$name','$password')";
            if (mysqli_query($conn, $sql)) {
                echo "<br>";
                echo "New User has been added successfully !";
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
            mysqli_close($conn);
            
        }
        else echo "Input Values";
        // mysqli_close($conn);

        
    }   


    
    
    ?>
    
</body>
</html>