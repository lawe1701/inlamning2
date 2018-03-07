<?php
require_once('common.php');
require_once('connect.php');


$setDebug = True; // debugging on/off
$debug = "";

// Skapar en query för kund
$customer = 1;
$supplyer = 0;
$firstName = "Christian";
$lastName = "Hall";
$adress = "Engatan 2";
$district = "Sollentuna";
$postalcode = "123 45";
$tel = "08-36 30 53";
$mail = "christian.hall@yh.nackademin.se";


$insert = "INSERT  INTO kund_lev VALUES(NULL, '$customer', '$supplyer', '$firstName', '$lastName', '$adress', '$district', '$postalcode', '$tel', '$mail')";
mysqli_query($connection, $insert) or die(mysqli_error($connection));

$retriev = "SELECT Kund_ID FROM kund_lev";
$customerID = mysqli_insert_id($connection) or die(mysqli_error($connection));

$debug .= "KundID: " . $customerID . "<br>";
$debug .= "Kund: " . $customer . "<br>Supplyer: " . $supplyer . "<br>Name: " . $firstName . " " . $lastName . "<br>";
$debug .= "Adress: " . $adress . "<br>Postort: " . $district . "<br>PostNr: " . $postalcode . " <br>Tel:" . $tel . "<br>Mail: " . $mail . "<br>";

if($setDebug){
    echo $debug;
}
?>