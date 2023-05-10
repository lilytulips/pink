<?php
//Connect to DB, MySQL (the most simplest way)
$con = mysqli_connect("localhost", "root", "root", "pinkshoutbox");

//Test Connection (!$con same as mysqli_connect_errno)
if(mysqli_connect_errno()){
    echo 'Failed to Connect to MySQL:'.mysqli_connect_error();
}
?>