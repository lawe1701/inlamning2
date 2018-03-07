<?php
$setDebug = true; // debugging on/off
$debug = "";


if($setDebug){
    echo $debug;
    $debug = "";
}


$dbHost = "localhost" ;
$dbUser = "root" ;
$dbPwd = "";
$dbName = "smycken_db" ;
$charset = "utf8";

$debug .= "Host: " . $dbHost . "<br>";
$debug .= "dbName: " . $dbName . "<br>";
$debug .= "dbUser: " . $dbUser . "<br>";
$debug .= "charset: " . $charset . "<br><hr>";


$connection = mysqli_connect($dbHost, $dbUser, $dbPwd, $dbName);
mysqli_set_charset($connection, $charset);

if (!$connection) {
    echo "Error: Unable to connect to MySQL<br>";
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}

?>