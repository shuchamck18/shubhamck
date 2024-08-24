<?php

include_once("db_connection.php");


$email = $_POST['email'];
$pswd = $_POST['pswd'];



if(isset($_POST['submit']))
{
   $sql = "select * from registered_names where email='$email' and pswd='$pswd'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   if($count > 0)
   {
    header("location:welcome_page.php");
   }
   else{

    header("location:login.php?mode=uns");

   }
}



?>