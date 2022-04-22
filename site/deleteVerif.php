<?php


include("database.php");

if(isset($_GET['submit'])){
    //execute mysql query
    }

    $nom=$_GET['name'];
    $adr=$_GET['address'];
    $ville=$_GET['city'];
    $code=$_GET['code'];
    $permis=$_GET['permis'];
    $courriel=$_GET['email'];



    $sql = "DELETE FROM microbrasseries WHERE Nom_raison_sociale = '$nom'";
    
    if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>