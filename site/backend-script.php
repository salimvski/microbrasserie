<?php

include("./database.php");
$res = mysqli_query($conn, "SELECT Nom_raison_sociale,Adresse,Ville,Code_Postal,Permis,Courriel,Année_fondation,Site_Web,Latitude,Longitude from microbrasseries");

while ( $range = mysqli_fetch_assoc ( $res) ) {
$nom = $range['Nom_raison_sociale'];
$adr = $range['Adresse'];
$ville = $range['Ville'];
$cp = $range['Code_Postal'];
$permis = $range['Permis'];
$courriel = $range['Courriel'];
$annee = $range['Année_fondation'];
$web = $range['Site_Web'];
$latitude = $range['Latitude'];
$longitude = $range['Longitude'];
echo "

<tr class='even'> 
<td id='salim' class='dt-control'></button></td>
<td>$nom</td>
<td>$adr</td>
<td>$ville</td>
<td>$cp</td>
<td>$permis</td>
<td>$courriel</td>
            <td class='first'>$nom</td>
            <td class='second'>$annee</td>
            <td class='third'>$web</td>
            <td class='fourth'>$courriel</td>
            <td class='fifth'>$latitude/$longitude</td>
</tr>
";

}
mysqli_free_result($res);


?>

