 <?php

 $host = "localhost";
 $user = "";
 $password = "";
 $database = "";
 $conn = mysqli_connect("127.0.0.1", $user, $password, $database);

if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}

?>



 
