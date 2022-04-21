<?php


include("database.php");

    $uname=$_GET['username'];
    $password=$_GET['password'];


    $result = mysqli_query($conn, "SELECT * FROM account where username='$uname' and pass='$password'");
    
    if(mysqli_num_rows($result) == 1){
        // if pass correct with start a session
        if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
        $_SESSION['user'] = $uname;
        $_SESSION["loggedin"] = true;
        // Redirect user to welcome page
        header("location: welcome");
        exit();
    }
    else{
        echo " login fail !";
        exit();
    }
    
        

?>