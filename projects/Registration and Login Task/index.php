<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<section>

<div class="registration">
    <div class="reg">
        <form action="registration_details.php" method="POST">
            <div>Sign Up</div>
            <div>Please fill the form to create an account!</div>
            <hr>
            <br>
            <div><input type="text" name="username" placeholder="Enter your Username" pattern="\w{3,16}" title="username should be contain atleast 3 to 16 characters" required></div>
            <div><input type="Email" name="email" placeholder="Enter your Email" required></div>
            <div><input type="password" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Create Password" required></div>
            <div><input type="submit" name="submit" value="Register" style="width:100px;background-color:green;color:white;border:none;padding:10px;cursor:pointer;"></div>
            <div><a href="login.php" style="text-decoration:none; cursor:pointer;color:#1877F2;font-size:18px;">Already have an account? Click here</a></div>
        </form>
    </div>
</div>

    

</section>






    
</body>
</html>