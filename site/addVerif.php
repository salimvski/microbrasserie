<?php


include("database.php");

if(isset($_GET['submit'])){
    //execute mysql query
    }

    $nom=$_GET['name'];
    $adr=$_GET['address'];
    $ville=$_GET['city'];
    $cp=$_GET['pc'];
    $permis=$_GET['permis'];
    $courriel=$_GET['email'];


    $sql = "INSERT INTO microbrasseries (Nom_raison_sociale, Adresse, Ville, Code_Postal, Permis, Courriel)
    VALUES ('$nom', '$adr', '$ville', '$cp', '$permis', '$courriel')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>