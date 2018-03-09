<?php
require_once('common.php');
require_once('connect.php');

$setDebug = false; // debugging on/off
$debug = "";


$sats = "SELECT Produkt_ID, ProduktNamn, Kortbeskrivning, bild, pris FROM produkt";

$table = mysqli_query($connection, $sats) or die(mysqli_error($connection));

$array = array();
while($row=$table->fetch_assoc()){
    $array[] = $row;
}


$cards="<div class='container'>";
for($i=0; $i < count($array); $i++){
    
    $prodID = $array[$i]['Produkt_ID'];
    $titel=$array[$i]['ProduktNamn'];
    $besk=$array[$i]['Kortbeskrivning'];
    $bild=$array[$i]['bild'];
    $pris=$array[$i]['pris'];

    $debug .= "i= " . $i . ": Mod= " . ($i % 3) . "<br>" ;
    if(($i % 3) == 0){
        $debug .= "Är inne i if <br>";
        $cards.= "<div class='row'>";
    }
    $cards.=<<<EOD
    <div class='col-sm-4 d-flex'>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">$titel</h3>
                <img src="images/$bild"  alt = "Bild på $titel" width="250px">
                <p class="card-text">$besk</p>
                <h3 class="card-prize">$pris SEK</h3>
                <form id="bye" action="./order.php" method="post" target="_self" >
                    <input type="hidden" name="product_ID" value="$prodID">
                    <input type="hidden" name="product_name" value="$titel">
                    <input type="hidden" name="product_desc" value="$besk">
                    <input type="hidden" name="product_img" value="$bild">
                    <input type="hidden" name="product_price" value="$pris">
                    <input type="submit" value="köp">
                </form>
            </div>
        </div>
    </div>
EOD;
    if(($i % 3) == 2){
        $cards.= "</div>";
    }
}   
$cards .= "</div>";  




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
            <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Hem
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#products">Produkter</a>
                </li>
            </ul> 
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    <br>

    <div class='container'>
    <div class="vid">
        <video autoplay loop>
            <source src="./images/tansag.mp4" type="video/mp4">Din browser kan inte visa filmen!</video>
    </div>

    <br>
{$cards}
</div></div>

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