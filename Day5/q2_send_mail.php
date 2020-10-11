<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
    form{
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
    }
    </style>
</head>
<body>
    <form action="" method="post" name="feedbackform" id="ff">
    
    Enter Name : <input type="text" name="name"  >
    <br>
    Enter Your Email : <input type="email" name="email" >
    <br>
    Feedback : <textarea rows="4" cols="50" name="feedback" form="ff" ></textarea>
    <br>
    <input type="submit" name="submit">
    </form>

    <?php
    
    if(isset($_POST['submit'])){

        $name=(isset($_POST['name']) ? $_POST['name'] : null );
        $email=(isset($_POST['email']) ? $_POST['email'] : null );
        $message=(isset($_POST['feedback']) ? $_POST['feedback'] : null );
        
        if(!empty($name && $email && $message)){

            $to=$email;
            $subject="Thank You";
            $headers="From: nsdr2000@gmail.com";
            $body="Thank you for your Feedback  $name";
            mail($to,$subject,$body,$headers);
            
            $admin="nsdr2000@gmail.com";
            $subjectadmin="$name Details";
            $headersadmin="From : $name ,$email";
            $bodyadmin="Name : ".$name."\n Email : ".$email."\n Feedback : ".$message;
            mail($admin,$subjectadmin,$bodyadmin,$headersadmin);     
            echo "Your Feedback has been sent";        
        }
        else echo "Please input all the parameters";
    
    }
    
    ?>

</body>
</html>