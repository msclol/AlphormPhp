<?php
include('_config.php');
// Calcul du Total à payer
$total = $_POST['quantite'] * TARIF;
// Calcul du nouveau total à payer
$newTotal = $total - REMISE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <h1>Merci pour votre commande</h1>
        <ul>
            <li>Nombre de boîtes commandées: <span class="orangered"><?= $_POST['quantite']; ?></span></li>
            <li>Tarif unitaire: <span class="orangered"><?= TARIF; ?> euros</span></li>
            <li>Total à payer: <span class="orangered"><?= $total; ?> euros</span></li>
            <li>Remise: <span class="orangered"><?= REMISE; ?> euros</span></li>
            <li><strong>Nouveau Total:</strong> <span class="orangered"><?= $newTotal; ?> euros</span></li>            
        </ul>
        <p class="retour"><a href="index.php"><strong>Retour vers commande</strong> </a></p>
    </div>
</body>
</html>