<!DOCTYPE html>
<html>
<style>
    
</style>
<head>
    <title>add</title>
    <link rel="stylesheet" a href="site/css/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php echo "";?>
<div class="container">
  <form action="addVerif" method="get" enctype="multipart/form-data">
      <h1>Ajout d'une microbrasserie</h1>
    <div class="row">
      <h4>Information sur la microbrasserie</h4>
      <div class="input-group input-group-icon">
        <input type="text" name="name" placeholder="Nom de la microbrasserie"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="address" placeholder="Adresse"/>
        <div class="input-icon"><i class="fa fa-address-card"></i></div>
        <div class="input-group input-group-icon">
        <input type="text" name="city" placeholder="Ville"/>
        <div class="input-icon"><i class="fa fa-address-card"></i></div>
        <div class="input-group input-group-icon">
        <input type="text" name="pc" placeholder="Code postal"/>
        <div class="input-icon"><i class="fa fa-address-card"></i></div>
      </div>
      </div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="permis" placeholder="#Permis"/>
        <div class="input-icon"><i class="fa fa-ticket"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" name="email" placeholder="Email Adress"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <button type="submit">Ajouter à la liste des microbrasseries</button>
    
    </div>
</body>
</html> 
