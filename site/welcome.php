<?php
// Initialize the session
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" a href="site/css/welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    </style>
</head>
<body>
    <div class="row">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["user"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    <div>
      <div class="input-group input-group-icon" id="table">
        <a class= "button" href="table">Consulter la table de microbrasseries</a>
      </div>
      <div class="input-group input-group-icon" id="add">
        <a class= "button" href="add">Ajouter à la liste des microbrasseries</a>
      </div>
      <div class="input-group input-group-icon" id="delete">
        <a class= "button" href="delete">Supprimer de la liste des microbrasseries</a>
      </div>

    
    </div>
</body>
</html>