<?php
    /*Questions#1: Create a PHP script that initializes variables with different data types 
    (integer, float, string, boolean, array, NULL). Use the var_dump() function 
    to display the data type and value of each variable.*/
    $intValue = 111;
    $floValut = 111.111;
    $strValue = "string";
    $boolValue = true;
    $nullValue = NULL;
    echo '$intValue:'.var_dump($intValue).'<br>';
    echo '$floValut:'.var_dump($floValut).'<br>';
    echo '$strValue:'.var_dump($strValue).'<br>';
    echo '$boolValue:'.var_dump($boolValue).'<br>';
    echo '$nullValue:'.var_dump($nullValue).'<br>';
    /*
    Questions#2: Create a script where you add an integer and a float. 
    Display the result and explain the type conversion that happens internally.
    */
    echo "----------------------------------------------<br>";
    $intNum = 100;
    $floatNum = 100.00;
    $result = $intNum + $floatNum;
    echo ' $result:'.var_dump($result).'<br>';
    //The value of $result is 200 and the type is float because the type of $intNum is converted to float
    echo "----------------------------------------------<br>";
    /*
    Questions#3: Write a PHP program that demonstrates type casting by performing the following tasks:
        • Define a variable x and assign its value to 10.
        • Type cast x to a float type and store the result in variable y.
        • Print values and types of x and y to the browser.
        • Type cast x to a bool type and store the result in z.
        • Print value and types of x and z to the browser.
    */
    $x = 10;
    $y = (float)$x;
    echo '$x:'.var_dump($x).'<br>';
    echo '$y:'.var_dump($y).'<br>';
    $z = (bool)$x;
    echo '$x:'.var_dump($x).'<br>';
    echo '$z:'.var_dump($z).'<br>';
    echo "----------------------------------------------<br>";
    /*
    Questions#4:  Initialize a string variable with a numeric value, then cast it into an 
    integer and a float.  Display the original and cast values using echo.
    */
    $strNum = "1000";
    $intNum = (integer)$strNum;
    $floatNum = (float)$strNum;
    echo '$strNum:'.var_dump($strNum).'<br>';
    echo '$intNum:'.var_dump($intNum).'<br>';
    echo '$floatNum:'.var_dump($floatNum).'<br>';
    echo "----------------------------------------------<br>";
     /*
    Questions#5:  Write a script that converts a string "123.45" into 
    an integer and a float. Print the values before and after conversion.
    */
    $floatStringNum = "123.45";
    $integerNum = (integer)$floatStringNum;
    $floatNum = (float)$floatStringNum;
    echo '$floatStringNum:'.var_dump($floatStringNum).'<br>';
    echo '$integerNum:'.var_dump($integerNum).'<br>';
    echo '$floatNum:'.var_dump($floatNum).'<br>';





?>
