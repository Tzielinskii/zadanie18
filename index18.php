<?php

//zadanie 1
 
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
 

//zadanie 2
 
for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}
 

//zadanie 3
 
$suma = 0;
 
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}
 
echo "Suma = " . $suma;
 

//zadanie 4
 
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}
 

//zadanie 5
 
$x = 12;
$y = 1000;
$kwota = 0;
 
for ($i = 1; $i <= $x; $i++) {
    $kwota += $y;
    $kwota *= 1.08;
}
 
echo "Zgromadzona kwota: " . round($kwota, 2) . " zł";
 

//zadanie 6
 
$a1 = 5;
$r = 10;
$n = 100;
 
$suma = 0;
 
for ($i = 0; $i < $n; $i++) {
    $suma += $a1 + ($i * $r);
}
 
echo "Suma ciągu = " . $suma;
 

//zadanie 7
 
$suma = 0;
 
for ($i = 10; $i >= 1; $i--) {
    $suma += $i * $i;
}
 
echo "Ilość cegieł = " . $suma;
 

//zadanie 8
 
$x = 20;
$y = 5;
$z = 2;
 
$suma = 0;
$aktualnyRzad = $x;
 
for ($i = 1; $i <= $y; $i++) {
    $suma += $aktualnyRzad;
    $aktualnyRzad -= $z;
}
 
echo "Ilość cegieł = " . $suma;
 
//zadanie 9
 
$x = 20;
$y = 5;
$z = 2;
$k = 3.5;
 
$suma = 0;
$aktualnyRzad = $x;
 
for ($i = 1; $i <= $y; $i++) {
    $suma += $aktualnyRzad;
    $aktualnyRzad -= $z;
}
 
$waga = $suma * $k;
 
echo "Waga ściany = " . $waga . " kg";
 

//zadanie 10
 
$a = 10;
$b = 5;
$operator = "+";
 
switch ($operator) {
    case "+":
        echo $a + $b;
        break;
 
    case "-":
        echo $a - $b;
        break;
 
    case "*":
        echo $a * $b;
        break;
 
    case "/":
        if ($b != 0) {
            echo $a / $b;
        } else {
            echo "Nie można dzielić przez 0";
        }
        break;
 
    default:
        echo "Nieznany operator";
}
 

//zadanie 11
 
$n = 10;
$x = 5;
$y = 3;
 
for ($i = 0; $i < $n; $i++) {
    echo ($x + ($i * $y)) . "<br>";
}
 

//zadanie 12
 
 
$a = 5;
$b = -5;
 
$suma = $a + $b;
 
echo "Liczba 1 = $a <br>";
echo "Liczba 2 = $b <br>";
echo "Suma = $suma <br>";
 

//zadanie 13
 
$n = 5;
$silnia = 1;
 
for ($i = 1; $i <= $n; $i++) {
    $silnia *= $i;
}
 
echo "Silnia liczby $n = $silnia";
 

//zadanie 14
 
$n = 5;
$liczba = 2;
 
echo $liczba . "<br>";
 
for ($i = 1; $i < $n; $i++) {
    $liczba = $liczba * $liczba;
    echo $liczba . "<br>";
}
 

//zadanie 15
 
$suma = 0;
 
for ($i = 1; $i <= 10; $i++) {
    $losowa = rand(50, 100);
 
    echo $losowa . "<br>";
 
    $suma += $losowa;
}
 
$srednia = $suma / 10;
 
echo "<br>Suma = " . $suma . "<br>";
echo "Średnia = " . $srednia;
 
?>