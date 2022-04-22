 <?php

 $host = "www-ens.iro.umontreal.ca";
 $user = "elrhilas";
 $password = "lasp122E";
 $database = "elrhilas_projet3";
 $conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}

?>



 
