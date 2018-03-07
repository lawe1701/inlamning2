<?php

require_once('connect.php');
require_once('connect.php');


$setDebug = false; // debugging on/off
$debug = "";

// Kollar om data finns att skicka i tabell order
if(!isset($_POST['first_name'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(!isset($_POST['second_name'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(!isset($_POST['email'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(!isset($_POST['street_adress'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(!isset($_POST['postal_adress'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(!isset($_POST['postalNr'])){
    header('Location: http://localhost/backend/inlamning2/');
    die();
}elseif(isset($_POST['pris'])) {
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
    $debug .= "Produktpris: " . $prodPrice . " SEK.<br>";
    $orderDate = $_POST['datetime'];
    $debug .= "Orderdatum: " . $orderDate . ".<br><br>";

    $first_name = $_POST['first_name'];
    $debug .= "Förnamn: " . $first_name . " .<br>";    
    $second_name = $_POST['second_name'];
    $debug .= "Efternamn: " . $second_name . " .<br>";    
    $email = $_POST['email'];
    $debug .= "Email: " . $email . " .<br>";    
    $street_adress = $_POST['street_adress'];
    $debug .= "Gatuadress: " . $street_adress . " .<br>";    
    $postal_adress = $_POST['postal_adress'];
    $debug .= "Postadress: " . $postal_adress . " .<br>";    
    $postalNr = $_POST['postalNr'];
    $debug .= "Postadress: " . $postalNr . " .<br>";    
    $phone = $_POST['phone'];
    $debug .= "Telefon: " . $phone . " .<br>"; 
    $message = $_POST['message'];
    $debug .= "Meddelande: " . $message . " .<br>"; 
}


$html =<<<EOD
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./images/logo.ico" type="image/x-icon">

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
EOD;

if(empty($_POST)){
$html .= <<<EOD
    <div class="alert alert-danger" role="alert">
        <h1> Du måste välja en produkt</h1>
        <p>Följ länken <a href="index.php">här</a> för att beställa</p>
    </div>
    </body>
</html>

EOD;

}else{

    $sats = "INSERT INTO `kund` VALUES (null, '$first_name', '$second_name', '$street_adress', '$postal_adress', '$postalNr', '$phone', '$email')";
    $table = mysqli_query($connection, $sats) or die(mysqli_error($connection));
    
    $customerID = mysqli_insert_id($connection) or die(mysqli_error($connection));
    $debug .= "KundID: " . $customerID . "<br>";

    $sats = "INSERT INTO `order` (`Kund_ID`, `Produkt_ID`) VALUES ('$customerID', '$prodID')";
    $table = mysqli_query($connection, $sats) or die(mysqli_error($connection));

    $orderID = mysqli_insert_id($connection) or die(mysqli_error($connection));
    $debug .= "OrderID: " . $orderID . "<br>";



$html.=<<<EOD
    
    <!-- Bekräftelse -->

    <div class="container">
    <h1>Bekräftelse</h1>
    <h2>Tack!<br>Din beställning är mottagen!</h2>
    <p>
        Följande information har mottagits och skickas till din adress.<br>
    </p>
    
    <h5>OrderNr: {$orderID}</h5>
    <p>
        Namn: {$_POST['first_name']} {$_POST['second_name']} <br>
        Adress: {$_POST['street_adress']} <br>
        Postadress:{$_POST['postal_adress']} <br>
        Artikel: {$_POST['product_name']} <br>
        Pris: {$_POST['product_price']} SEK <br>
        Meddelande: <br>
        {$_POST['message']}
    </p>
    <a class="nav-link" href="index.php">Fortsätt handla
        <span class="sr-only">(current)</span>
    </a>
    </div>

    <!-- Slut Bekräftelse -->



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
EOD;
}
echo $html;
if($setDebug){
    echo $debug;
}
exit;
?>
