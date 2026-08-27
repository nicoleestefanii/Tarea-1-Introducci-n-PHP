<h1>Operaciones Matemáticas</h1>
<?php

// Suma
echo "Suma <br>";
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;

echo "La suma de $num1 y $num2 es: $suma <br>"; 

// Resta
echo "Resta <br>";
$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;

echo "La resta de $num1 y $num2 es: $resta <br>"; 

// Multiplicación
echo "Multiplicación <br>";
$num1 = 5;
$num2 = 6;
$multiplicacion = $num1 * $num2;

echo "La multiplicación de $num1 y $num2 es: $multiplicacion <br>";

// División
echo "División <br>";
$num1 = 20;
$num2 = 4;
$division = $num1 * $num2;

echo "La división de $num1 y $num2 es: $division <br>";

// Potenciación
echo "Potenciación <br>";
$base = 5;
$exponente = 6;
$potencia = $base ** $exponente;

echo "La potencia de $base elevado a $exponente es: $potencia <br>";

// Módulo
echo "Módulo <br>";
$num1 = 15;
$num2 = 4;
$modulo = $num1 * $num2;

echo "La módulo de $num1 y $num2 es: $modulo <br>";

// Redondeo
echo "Redondeo <br>";
$numero = 4.6;

$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);

echo "El número redondeado es: $redondeado <br>";
echo "El número redondeado hacia arriba es: $redondeado_arriba <br>"; 
echo "El número redondeado hacia abajo es: $redondeado_abajo <br>";

// Operador módulo %
echo "Operador Módulo % <br>";
echo (5 % 3). "\n <br>";
echo (5 % -3). "\n <br>";
echo (-5 % 3). "\n <br>";
echo (-5 % -3). "\n <br>";

// Valor absoluto
echo "Valor absoluto <br>";
$numero = -7;
$valor_absoluto = abs ($numero);

echo "El valor absoluto de $numero es: $valor_absoluto";

?>