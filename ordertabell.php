<?php
require_once('common.php');
require_once('connect.php');

$setDebug = false; // debugging on/off
$debug = "";



$sats = "SELECT `order`.`Order_ID`, `kund`.`Förnamn`, `kund`.`Efternamn`, `kund`.`Telefonnummer`, `kund`.`mail`, `produkt`.`ProduktNamn`, `produkt`.`Pris`
FROM `order`, `kund`, `produkt`
WHERE `order`.`Kund_ID`=`kund`.`Kund_ID`
AND `order`.`Produkt_ID` = `produkt`.`Produkt_ID`";

$table = mysqli_query($connection, $sats) or die(mysqli_error($connection));

$array = array();
while($row=$table->fetch_assoc()){
    $array[] = $row;
}
$tab = "";
$tab .= <<<EOD
<table class="table">
<thead>
    <tr>
        <th>Ordernr</th>
        <th>Förnamn</th>
        <th>Efternamn</th>
        <th>Telefon</th>
        <th>Mail</th>
        <th>Produktnamn</th>
        <th>Pris</th>
    </tr>
</thead>
<tbody>
EOD;

for($i=0; $i < count($array); $i++){

    $debug .= "i= " . $i . ": Mod= " . ($i % 7) . "<br>" ;
    if(($i % 7) == 0){
        $debug .= "Är inne i if <br>";
    }
    $tab .=<<<EOD
    <tr><td scope='row'>{$array[$i]['Order_ID']}</td>
            <td>{$array[$i]['Förnamn']}</td>
            <td>{$array[$i]['Efternamn']}</td>
            <td>{$array[$i]['Telefonnummer']}</td>
            <td>{$array[$i]['mail']}</td>
            <td>{$array[$i]['ProduktNamn']}</td>
            <td>{$array[$i]['Pris']} SEK</td></tr>
EOD;
}

$tab .= "</tbody></table>";

$html=<<<EOD
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        

    <title>Tansag</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img id="logo" src="./images/logo_250x250_TP.png" alt="Logga">
        </a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
       cd.
        </div>
    </nav>
    <br>

    <div class='container'>
    <h1>Ordertabell</h1>
        {$tab}
    </div>

{$footer}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
EOD;



echo $html;

if($setDebug){
    echo $debug;
}
exit;



?>