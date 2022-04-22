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



    $sql = "DELETE FROM microbrasseries
    WHERE Nom_raison_sociale = '$nom' AND Adresse = '$adr' AND Ville = '$ville' AND Code_Postal = '$cp' AND Permis = '$permis' AND Courriel = '$courriel'";
    
    if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>