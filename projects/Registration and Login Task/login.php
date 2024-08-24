<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

<?php

if(isset($_REQUEST['mode']))
{
    if('$message==uns')
    {
        echo "<script type='text/javascript'>
        alert ('Invalid Username and Password')
        </script>";
    }
    

}

if(isset($_REQUEST['mode1']))
{
    if('$message==suc')
    {
        echo "<script type='text/javascript'>
        alert ('Data submited successfulluy')
        </script>";
    }
    

}

?>


<section>

<div class="registration">
    <div class="reg">
        <form action="login_details.php" method="POST">
            <div>Login</div>
            <hr>
            <br>
            <div><input type="Email" name="email" placeholder="Enter Email" required></div>
            <div><input type="password" name="pswd" placeholder="Enter Password" required></div>
            <div><input type="submit" name="submit" value="Log-In" style="width:150px;background-color:green;color:white;border:none;padding:10px;cursor:pointer;font-size:18px"></div>
            <div><a href="index.php" style="text-decoration:none; cursor:pointer;color:#1877F2;font-size:18px">click here for Sign-Up</a></div>

        </form>
    </div>
</div>

    

</section>




    
</body>
</html>