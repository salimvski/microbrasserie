<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
//header('Content-Type: application/json');
// include database and object f
include("database.php");
// get url
$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);


  
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
      
// Display result
//$parameter = $_SERVER['QUERY_STRING'];
//echo $parameter;
$nom = $params['nom'];
$adr = $params['adresse'];
$ville = $params['ville'];
$cp = $params['cp'];
$permis = $params['permis'];
$courriel = $params['mail'];

// sql query test
$path = 'api-rest/add?nom=DELICEduMAGREB&adresse=Barcklay&ville=montreal&cp=H3G1C2&permis=AB105&mail=salim.elrhilani@gmail.com';

$sql = "INSERT INTO microbrasseries (Nom_raison_sociale, Adresse, Ville, Code_Postal, Permis, Courriel)
VALUES ('$nom', '$adr', '$ville', '$cp', '$permis', '$courriel')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>