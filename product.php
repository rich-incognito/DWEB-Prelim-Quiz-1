<!-- 
    INCOGNITO, Rich Cristoff C.
    WD - 201
    DECEMBER 4, 2025
    DWEB
    PART 2
-->

<?php 
    $user = "Dear Customer"; // #1


    $product = "Fashionable Caps"; // #5

    $cost = 10; // #6 with modification a

    for ($counter = 1; $counter <= 15; $counter++) { // #7 with modification b
        $subtotal = $cost * $counter; // #8
        $discount = ($cost / 100) * ($counter * 4); // #9
        $totals = [ // #10
            $counter => ($subtotal - $discount)
        ];

    } // #11

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
        <?php require "header.php"; ?> <!-- #12 -->
        <h1>
            <?php $greet = "Greetings"; // #2
            if ($user){ // #3
                echo $greet . ", " . $user . "!"; // #4
            } ?>
        </h1> <!-- #13 -->
        <p><?=$product?></p> <!-- #14 -->
        <table> <!-- #15 -->
            <th>Packs</th>
            <th>Price</th>
            <?php 
            foreach ($totals as $items){

            }
            ?>
        </table>
    </body>
    <footer>
        <?php include "footer.php"; ?> <!-- #21 -->
    </footer>
</html>

