<!DOCTYPE html>
<html>
    <body>
        <?php
            $myName = "My name";
            $firstName = "Jinyu";
            $lastName = "Liu";
            echo "My first PHP script!<br>{$myName} is: {$firstName} {$lastName}<br>";
            echo gettype($myName);
                        //constain value
            define("PI", 3.14);
            echo "<br>";
            echo $firstName. " ". $lastName;
        ?>
        <br>
        <button>Click Me</button>
    </body>
</html>

