<?php include 'database.php';

//Check if te form is submitted 
//Argument passed in $_POST is the type
if(isset($_POST['submit'])){
    //mysqli_real_escape_string is a to sanitize the input and for security purposes, but still it's debatable, it's some thing you use at one pace and not the other.
    $user = mysqli_real_escape_string($con, $_POST['name']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    //Set timezone
    date_default_timezone_set('Asia/Kuala_Lumpur');
    //h:i:s is a formatting for date in PHP
    $time = date('h:i:s a', time());

    //Validate input
    if(!isset($user) || $user == '' || !isset($message) || $message == ''){
        $error = "fill in your name and message, pretty please.";
        //urlencode is to make the url friendly
        header("Location: index.php?error=".urlencode($error));
        exit();
    } else {
        $query = "INSERT INTO shouts (name, message, time) 
            VALUES ('$user', '$message', '$time')";
        
        //Making sure that it actually works
        if(!mysqli_query($con, $query)) {
            die('Error:'.mysqli_error($con));
        } else {
            header("Location: index.php");
        }
    }
}
?>