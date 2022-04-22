<?php

 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title> Login microbrasserie</title>
    <link rel="stylesheet" a href="site/css/login.css">
</head>
<body>
    <div class="container">
        <form action="verif" method="get" enctype="multipart/form-data">
            <div class="form-input">
                <input type="text" id="username" name="username" placeholder="Enter the User Name"/>  
            </div>
            <div class="form-input">
                <input type="password" id="password" name="password" placeholder="password"/>
            </div>
            <input type="submit" type="submit" value="Login" class="btn-login"/>
        </form>
    </div>
</body>
</html>