<?php

//creating a connection

$conn = mysqli_connect('localhost' ,'root', '','registration');

if(!$conn)
{
    die("Sorry we failed to connect". mysqli_connect_error());
}
else{
    echo "";
}

?>