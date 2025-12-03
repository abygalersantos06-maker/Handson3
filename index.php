<?php 
include 'includes/header.php';
$name = "Abygale";

$greeting = "Hello, ". $username . "Welcome to our Hairclip Shop. You can now find everything you desire!";

$offer = array (
    "Butterfly Hairclip",
    5,
    50,
    35
);

$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $usual_price - $offer_price;

?>
<h1><?= $greeting ?></h1>
<div class="saving-cirle">
    Save <?= $saving ?>!
</div>

<div class="offer-box">
    <p>Buy <?= $offer[1] ?> packs of <?=$offer[0] ?> to avail our BIG Nabi Discount!</p>
    <p>
        Discounted Total Price: <?= $offer_price ?><br>
        Regular price: P<?= $usual_price ?>
    </p>
    <img src= "img/hairclip.jpg" alt= hairclips>
    <p>
        That means you save P<?= $saving ?> on this hairclip bundle!
    </p>
</div>
<?php include 'includes/footer.php';?>
    
</body>
</html>