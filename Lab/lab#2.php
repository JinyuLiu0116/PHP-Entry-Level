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
