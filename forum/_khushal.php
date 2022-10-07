<?php

//creating a database

$servername = "localhost";
$username = "root";
$password = "";
$database = "kproject";

//creating a connection 

$conn = mysqli_connect($servername,$username,$password,$database);

//checcking the connection

if(!$conn)
{
    echo "fail";
}
else 
{
    //echo "success";
}

?>