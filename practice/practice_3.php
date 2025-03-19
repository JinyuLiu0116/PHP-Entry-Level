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
<?php
$a = 5;
$b = 5.34;
$c = "25";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
echo "<br>";

echo strlen("Hello world!"); // Output: 12
echo "<br>";

echo str_word_count("Hello world!");  // Output: 2
echo "<br>";

echo strrev("Hello"); // Output: olleH
echo "<br>";

echo strpos("Hello World!", "World"); // Output: 6
echo "<br>";

$x = '25555x6';
$y = (integer) $x; // cast $x to int
var_dump($y);

?>
