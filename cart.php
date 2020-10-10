<?php
session_start();
require_once('db_connection01.php');
$db_handle = new DBcontroller();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="shopping-cart">
    <div class="txt-heading">Shopping Cart</div>
    <a href="index.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart-item"])){
    $total_quantity = 0;
    $total_price = 0;

?>

    <table class="tbl-cart" cellpadding="10" cellspacing="1">
    <tbody>
    <tr>
    <th style="text-align:left;">Name</th>
    <th style="text-align:left;">Brand</th>
    <th style="text-align:left;">RAM</th>
    <th style="text-align:left;">Storage</th>
    <th style="text-align:right;">Quantity</th>
    <th style="text-align:right;">Price</th>
    <th style="text-align:center;" width="5%">Remove</th>
    </tr>
<?php 
foreach($_SESSION['cart-item'] as $item){
    $item_price=$item["quantity"] * $item["price"]

?>
    <tr>
    <td><img src="<?php echo $item["image"]; ?>" alt="" class="cart-item-image"><?php echo $item["name"]; ?></td>

    <td><?php echo $item["brand"]; ?></td>

    <td style="text-align: right"><?php echo $item["ram"]; ?></td>
    <td style="text-align: right"><?php echo $item["storage"]; ?></td>
    <td style="text-align: right"><?php echo $item["quantity"]; ?></td>
    <td style="text-align: right"><?php echo $item["price"]; ?></td>
    <td style="text-align: center"><a href="index.php?action=remove&if=<?php echo $item["id"]; ?>" class="btnRemoveAction">Remove</a></td>
    </tr>

<?php
$total_quantity +=$item["quantity"];
$total_price += ($item["price"] * $item["quantity"]);
}
?>

    <tr>
    <td></td>
    <td></td>
    <td colspan="2" align="right">Total: </td>
    <td align="right"><?php echo $total_quantity ?></td>
    <td align="right" colspan="2"><?php echo "$" . number_format($total_price, 2); ?></td>
    </tr>
    </tbody>
    

    </table>
    <?php 

}else{
    ?>
    <div class="txt-norecord">your cart is empty</div>

<?php 
        }
?>
    
    </div>
</body>
</html>