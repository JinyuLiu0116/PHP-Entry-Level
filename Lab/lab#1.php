
<?php
    //1.Create a PHP script that prints "Welcome to PHP Programming!". 
    $question1 = "Welcome to PHP Programming!";
    echo $question1."<br>";
    //2.Create a PHP script that declares and initializes five different variables 
    $str_type = "string";
    $int_type = 1000;
    $float_type = 1.999;
    $boolean_type = true;
    $None = null;
    echo var_dump($str_type)."<br>";
    echo var_dump($int_type)."<br>";
    echo var_dump($float_type)."<br>";
    echo var_dump($boolean_type)."<br>";
    echo var_dump($None)."<br>";
    //3.	Write a PHP script that creates two string variables "10" and "20" and adds them.
    $num_1="10";
    $num_2="20";
    echo $num_1 + $num_2 ."<br>"; 
    //4.	Define a constant SITE_NAME with the value "MyWebsite", and display it on a webpage.
    //define("SITE_NAME", "MyWebsite")
    const SITE_NAME = "MyWebsite";
    echo SITE_NAME."<br>";
    //5.	Write a PHP script to check if a variable (once you created it) is set using isset(), unset the variable, and then check again
    if (isset($str_type)){
        echo "Variable is set.<br>";
    }
    else{
        echo "Variable is not set.<br>";
    }
    //6.	Declare a variable $testVar with an empty string. Use empty() to check if it is empty and display the result.
    $testVar ="";
    if(empty($testVar)){
        echo "String is empty.<br>";
    }
    else{
        echo "String is not empty.<br>";
    }
    //7.	Write a script where: 
    // o	You declare a variable $num = 42.5.
    // o	Use gettype() to check its data type.
    // o	Use var_dump() to display detailed information about it.
    $num = 42.5;
    echo "The type is:".gettype($num)."<br>";
    echo var_dump($num)."<br>";


?>
