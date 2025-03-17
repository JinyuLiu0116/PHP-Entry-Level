<!DOCTYPE html>
<html>
    <body>
        <form action="practice01.php" method="post">
            <label>Quantity</label><br>
            <input type="text" name="quantity"><br>
            <input type="submit" value="Total"><br>
        </form>
    </body>
</html>
<?php
    $price = 3.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $price * $quantity;

    echo "You have {$quantity}/s iteam with price:\${$price}<br>";
    echo "Your total is:\${$total}";

?>
