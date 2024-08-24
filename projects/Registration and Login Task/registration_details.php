<?php

include_once("db_connection.php");


$username = $_POST['username'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];

if(isset($_POST['submit']))
{
    $sql = "INSERT INTO registered_names VALUES ('$username', '$email', '$pswd')";
    if(mysqli_query($conn,$sql))
    {
        //echo "Data submited successufully";
       
        header("location:login.php?mode1=suc");
    }
    else
    {
        echo "Data is not sumbited";
       
    }
}

 

?>