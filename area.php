<?php
    $radio = (float) $_POST['radio'];
    $area = pi() * pow($radio, 2);
    echo "El área de la circunferencia con radio $radio es: $area";

    $radio = (float) $_POST['radio'];

    $area = pi() * pow($radio, 2);
    $perimetro = 2 * pi() * $radio;

    echo "El área de la circunferencia con radio $radio es: $area <br>";
    echo "El perímetro de la circunferencia con radio $radio es: $perimetro";
?>