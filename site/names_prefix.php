<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
// include database and object f
include("database.php");
// get url
$url = $_SERVER['REQUEST_URI'];
$tokens = explode('/', $url);
$prefix = $tokens[sizeof($tokens)-1];
//echo $prefix;
$tmp = "LE";

// sql avec prefix
$res = mysqli_query($conn,"SELECT Nom_raison_sociale FROM microbrasseries WHERE Nom_raison_sociale LIKE '%".$prefix."'");

//echo $prefix;
$emparray = array();
while($row =mysqli_fetch_assoc($res))
    {
        $emparray[] = $row;
    }

echo json_encode($emparray);




?>
