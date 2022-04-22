<?php 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" a href="./css/welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    </style>
</head>
<body>
    <div class="row">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["user"]); ?></b>. Welcome to our site.</h1>
    <div>
        <a href="./logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
      <div class="input-group input-group-icon" id="table">
        <a class= "button" href="./table.php">Consulter la table de microbrasseries</a>
      </div>
      <div class="input-group input-group-icon" id="table">
        <a class= "button" href="./map_view.php">Consulter les microbrasseries sur la carte</a>
      </div> 
      <div class="input-group input-group-icon" id="table">
        <a class= "button" href="./doc.php">Consulter la documentation</a>
      </div>    
      <?php 

      if($_SESSION["user"] == "admin" && $_SESSION["loggedin"] === true){
      include("menu.php");;
}


      ?>
    </div>
</body>
</html>
