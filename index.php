<!-- 
    INCOGNITO, Rich Cristoff C.
    WD - 201
    DECEMBER 4, 2025
    DWEB
    PART 1
-->

<?php 
    $Store_Name = "Stop The Cap";

    $user = "Dear Customer"; // #1

    $pagbati = "Hello, " . $user . "!"; // #2

    $offer = [ // #3
        'Item' => "4 Caps",
        'Quantity' => 4,
        'Normal Price' => 300,
        'Promo' => 200
    ];

    $reg_price = $offer['Normal Price'] * $offer['Quantity']; //#4

    $offer_price = $offer['Quantity'] * $offer['Promo']; // #5

    $saving = ($reg_price - $offer_price); // #6


?>


<!DOCTYPE html> 
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $Store_Name; ?></title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <?php include "header.php"; ?>
        <h1>Welcome to <?= $Store_Name;?>!</h1>
        <h2>Your Favorite Cap Seller</h2>
        <h3><?= $pagbati; ?></h3> <!-- #7 -->

        <p>Limited Offer: Save PHP 100 off each cap for buying <?= $offer['Item']; ?>!!!</p> <!-- #9 -->    
        <p>Purchase <?= $offer['Item']; ?> for only <?= $offer_price; ?> (Save PHP <?= $saving;?>)</p> <!-- #8 -->
        <p>Discounted Price is <?= "PHP " . $offer_price ?> (Usual Price is <?= "PHP " . $reg_price; ?>)</p> <!-- #10 -->

    </body>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
</html>