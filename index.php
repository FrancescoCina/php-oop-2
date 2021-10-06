<?php

require_once __DIR__ . '/models/users/UserPremium.php';
require_once __DIR__ . '/models/products/TypeProduct.php';
require_once __DIR__ . '/models/cards/CreditCard.php';


function echoDiscountedPrice($price, $discount)
{
    $discount = $discount / 100;
    $priceCalculate = $price * $discount;
    $finalPrice = $price - $priceCalculate;
    echo round($finalPrice, 2);
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>

        <!-- Istanza user -->
        <?php
        $user3 = new UserPremium('Giancarlo', 'gian@mail.it', 35, 12); ?>
        <h4>
            L'utente
            <?php $user3->echoName() ?>

            in virtù della sua seniority di
            <?php $user3->echoSeniority()  ?>
            anni

            ha diritto ad uno sconto del <?= $user3->setDiscount() ?> %.
        </h4>
        <!-- Istanza Prodotto -->

        <?php
        $prod3 = new TypeProduct('Monitor', '100', 'tech'); ?>

        <p>
            Ha acquistato il prodotto:
            <?php $prod3->echoName() ?>
            della categoria
            <?php $prod3->echoType() ?>
            che ha un prezzo di:
            <?php $prod3->echoPrice() ?> €
        </p>

        <p>ma essendo
            <?php $user3->echoName() ?>


            un cliente da

            <?php $user3->echoSeniority()  ?>

            Anni.

            Il nuovo prezzo è:

            <?php
            echoDiscountedPrice($prod3->getPriceForIndex(), $user3->setDiscount());
            ?> €



        </p>


        <!-- Istanza Carta di Credito -->


        <?php

        $card1 = new CreditCard('10/2025');
        ?>

        <p>L'utente

            <?php $user3->echoName() ?>



            ha pagato

            <?php
            echoDiscountedPrice($prod3->getPriceForIndex(), $user3->setDiscount());
            ?>
            €

            con la carta di credito numero:
            <?= $card1->setCardNumber('14725836') ?>
            con il seguente CVV:

            <?php

            try {
                echo $card1->setCvv('225');
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            };
            ?>


            e scade il

            <?php $card1->echoExpiration() ?>

        </p>

    </main>
</body>

</html>