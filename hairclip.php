<?php 
include 'includes/header.php';
$name = "Abygale";
$greeting = "Hello, ";
$cost = 10;
?>

<h2><?$greetings?></h2>
<p>Product: <?= $product ?></p>
<h2>Flower Clip</h2>
<img src= "img/flower_clip.jpg" alt= flower>

<table border_all="1" cellpaddings="10" cellspacing="0">
    <tr>
        <th>Quantity</th>
        <th>Total Price with discount</th>
    </tr>

    <?php foreach ($totals as $quantity => $price) : ?>
        <tr>
            <td>
                <? $quantity ?>
                pack <?= ($quantity == 1)? " ": "s"?>
            </td>
            <td><? number_format($price, 2)?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Our Special NABI Collections</h2>
<ul>
    <li>White Flower Clip- $ <?php echo $cost; ?>/pack</li>
    <li>Sunflower Clip- $ <?php echo $cost; ?>/pack</li>
    <li>Rainbow Clip- $ <?php echo $cost; ?>/pack</li>
    <li>Cloud dream Clip- $ <?php echo $cost; ?>/pack</li>
    <li>Butterfly special Clip- $ <?php echo $cost; ?>/pack</li>
</ul>
<?php include 'includes/footer.php'?>



