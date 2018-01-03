<?php
 
$server = "localhost";
$user_name = "root";
$password = "";
$database = "pmi_indramayu";
 
$kon=mysqli_connect($server, $user_name, $password);
 
$find_db=mysqli_select_db($kon, $database);
 
if ($find_db) {
 
 echo "";
 
}
else {
 
 echo "Database Tidak Ada";
 
}
 
?>