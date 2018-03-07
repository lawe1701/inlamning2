<?php
require_once('../../connect.php');

// Skapar en query
$sats = "SELECT * FROM produkt";

// kör sats
$table = mysqli_query($connection, $sats) or die(mysqli_error($connection));

$array =array();
while($row = $table->fetch_assoc()){
    $array[] = $row;
}

// Fixar json att skick
// Får inte skicka med någon extra information typ html-taggar m.m.
$json_string = json_encode($array, JSON_PRETTY_PRINT);

echo $json_string;
?>