<?php
require_once('common.php');
require_once('connect.php');

date_default_timezone_set("UTC"); 

$setDebug = false; // debugging on/off
$debug = "";

if(!isset($_POST['product_ID'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(!isset($_POST['product_name'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(!isset($_POST['product_desc'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(!isset($_POST['product_img'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(!isset($_POST['product_price'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}else{
// Variabler i POST

    $prodID = $_POST['product_ID'];
    $debug .= "ProduktID: " . $prodID . ".<br>";
    $prodName = $_POST['product_name'];
    $debug .= "Produktnamn: " . $prodName . ".<br>";
    $prodDesc = $_POST['product_desc'];
    $debug .= "Produktnamn: " . $prodDesc . ".<br>";
    $prodImg = $_POST['product_img'];
    $debug .= "Produktnamn: " . $prodImg . ".<br>";
    $prodPrice = $_POST['product_price'];
    $debug .= "Produktpris: " . $prodPrice . " SEK.<br><br>";
}

// Skapar en query för kund

$dateTime = date('Y-m-d H:i:s');
$debug .= "Datum-Tid: " . $dateTime . ".<br>";


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
    <link rel="icon" href="logo_250x250_TP.png type="image/x-icon">

    <title>Tansag</title>
</head>

<body>
    <!-- Nav tabs -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img id="logo" src="./images/logo_250x250_TP.png" alt="Logga">
        </a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Hem
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- slut Nav tabs -->


    <!-- Köpt produkt -->
    <br>
    <div class="container" id="order">
        <h1>Du har valt att beställa ...</h1>
        <div class="col-md-4" id="order_col">
        </div>
        <div class="col-md-4" id="order_col">
            <h3>{$prodName}</h3>
            <img src="images/$prodImg"  alt = "Bild på $prodName" width="250px">
            <p>{$prodDesc}</p><br>
            <h3>{$prodPrice} SEK </h3>
        </div>
        <div class="col-md-4" id="order_col">
        </div>
    </div>
    <br>
    <!-- Slut köp -->


    <!-- Kontaktformulär -->

    <div class="container">
    <h2>Slutför!</h2>
    <p>
        Fyll i dina uppgifter och tryck sedan på knappen <strong>Skicka</strong>.
    </p>
        <form class="mr-auto" action="./confirm.php" method="post" target="_self" >
            <div class="form-group row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Förnamn</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputName" placeholder="Name" name="first_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Efternamn</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputName2" placeholder="Name" name="second_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Telefon</label>
                <div class="col-sm-10">
                    <input type="telefon" class="form-control" id="exampleFormControlInput1" placeholder="phone" name="phone">
                </div>
                </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Adress</label>
                <div class="col-sm-10">
                    <input type="adress" class="form-control" id="exampleFormControlInput1" placeholder="Gatuadress" name="street_adress"><br>
                    <input type="adress" class="form-control" id="exampleFormControlInput1" placeholder="Postadress" name="postal_adress">
                    <input type="adress" class="form-control" id="exampleFormControlInput1" placeholder="Postnummer" name="postalNr">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Meddelande</label>
            <div class="col-sm-10">
                
                <input type="message" class="form-control" id="inputMessage" placeholder="Message" name="message">
            </div>
            <input type="hidden" name="product_ID" value="{$prodID}">
            <input type="hidden" name="product_name" value="{$prodName}">
            <input type="hidden" name="product_price" value="{$prodPrice}">
            <input type="hidden" name="datetime" value="{$dateTime}">
            <input type="hidden" name="product_desc" value="{$prodDesc}">
            <input type="hidden" name="product_img" value="{$prodImg}">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" value="Skicka">
                </div>
            </div>
        </form>
    </div>
    <!-- Slut Kontaktformulär -->



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

?>

