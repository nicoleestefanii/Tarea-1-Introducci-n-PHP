<html>

<head>
    <title>Calculadora en PHP</title>
</head>

<body>
    <form method="post" action="calculadora.php">
        Ingrese el primer número:
        <input type="text" name="num1" id="num1">
        <br><br>

        Ingrese el segundo número:
        <input type="text" name="num2" id="num2">
        <br><br>

        Seleccione la operación:
        <br>
        <input type="radio" name="operacion" value="sumar" checked> Sumar
        <input type="radio" name="operacion" value="restar"> Restar
        <input type="radio" name="operacion" value="multiplicar"> Multiplicar
        <input type="radio" name="operacion" value="redondear"> Redondear decimales
        <br><br>

        Cantidad de decimales a redondear (solo si eligió "Redondear decimales"):
        <input type="text" name="decimales" id="decimales" value="2">
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
        // Solo se calcula si el formulario ya fue enviado
        if (isset($_POST['num1'])) {

            $num1 = (float) $_POST['num1'];
            $num2 = (float) $_POST['num2'];
            $operacion = $_POST['operacion'];
            $decimales = (int) $_POST['decimales'];

            echo "<br><hr>";

            if ($operacion == "sumar") {
                $resultado = $num1 + $num2;
                echo "La suma de $num1 y $num2 es: $resultado";

            } elseif ($operacion == "restar") {
                $resultado = $num1 - $num2;
                echo "La resta de $num1 y $num2 es: $resultado";

            } elseif ($operacion == "multiplicar") {
                $resultado = $num1 * $num2;
                echo "La multiplicación de $num1 y $num2 es: $resultado";

            } elseif ($operacion == "redondear") {
                $resultado = round($num1, $decimales);
                echo "El número $num1 redondeado a $decimales decimales es: $resultado";
            }
        }
    ?>
</body>

</html>