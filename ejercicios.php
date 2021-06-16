<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <?php
    // 1)
    echo "Ejercicio 1: <br/><br/>";
    $integer = 0;
    $double = 2.2;
    $string = "string";
    $isBool = true;
    $bool = false;

    echo $integer;
    echo "<br/>";
    echo $double;
    echo "<br/>";
    echo $string;
    echo "<br/>";
    echo $bool;
    echo "<br/>";
    echo $isBool;
    echo "<hr/>";

    // 2)
    echo "Ejercicio 2: <br/> <br/>";
    $integer1 = 5;
    $integer2 = 4;
    $integer3 = 7;
    $stringWithIntegers = " ".$integer1." ".$integer2." ".$integer3." ";
    echo $stringWithIntegers;
    echo "<hr/>";

    // 3) 
    echo "Ejercicio 3: <br/> <br/>";
    $min = 1;
    $max = 3;
    $randomInt = random_int($min, $max);
    switch($randomInt) {
        case $randomInt == 1: 
            echo "uno";
            break;
        case $randomInt == 2:
            echo "dos";
            break;
        case $randomInt == 3:
            echo "tres";
            break;
    }
    echo "<hr>";

    // 4)
    echo "Ejercicio 4: <br><br>";
    $num1 = random_int(1, 10);
    $num2 = random_int(1, 10);
    echo "la suma de $num1 + $num2 es : ".$num1+$num2.".<br>la resta de $num1 - $num2 es : ".$num1-$num2.".<br>la multiplicacion de $num1 x $num2 es: ".$num1*$num2.".<br>la division de $num1 entre $num2 es: ".$num1/$num2.".<br>el modulo de $num1 y $num2 es: ".$num1%$num2.".";
    echo "<hr>";

    // 5)
    echo "Ejercicio 5: <br><br>";
    $n = 5;
    $a = 4.56;
    $c = "a";
    
    echo "variable N = ".$n."<br>";
    echo "variable A = ".$a."<br>";
    echo "variable C = ".$c."<br>";
    echo "$n + $a = ".$n+$a."<br>";
    echo "$a - $n = ".$a-$n."<br>";
    echo "el valor numerico del caracter $c es: ".ord($c);
    echo "<hr>";
    ?>
</body>
</html>