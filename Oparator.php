<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oparator</title>
</head>

<body>
    <?php

    $number1 = 12;
    $number2 = 2;

    $sum = $number1 + $number2;
    $sub = $number1 - $number2;
    $mul = $number1 * $number2;
    $div = $number1 / $number2;

    $mod = $number1 % $number2;
    $exp = $number1 ** $number2;

    $number1++;
    $number2--;

    echo "Sum : ", $sum ;
    echo '<br>';
    echo "Sub : ", $sub;
    echo '<br>';
    echo "Mul : ", $mul;
    echo '<br>';
    echo "Div : ", $div;
    echo '<br>';
    echo "Mod : ", $mod;
    echo '<br>';
    echo "Exp : ", $exp;
    echo '<br>';

    echo "Number-1 : ", $number1;
    echo '<br>';
    echo "Number-2 : ", $number2;


    ?>
</body>

</html>