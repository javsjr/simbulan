<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'crud';

$connection = mysqli_connect($host,$user,$password,$database);

if (mysqli_connect_error()){
    echo "error: unable to connet to mysql <br>";
    echo "Message: " .mysqli_connect_error()." <br>";  
}else {
    echo "Connected Successfully";
}

?>
