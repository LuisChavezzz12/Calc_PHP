<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['operador'];

    switch ($operador) {
        case 'sumar':
        $resultado = $num1 + $num2;
        echo "<p>$num1 + $num2 = $resultado</p>";
        break;
        case 'restar':
        $resultado = $num1 - $num2;
        echo "<p>$num1 - $num2 = $resultado</p>";
        break;
        case 'multiplicar':
        $resultado = $num1 * $num2;
        echo "<p>$num1 * $num2 = $resultado</p>";
        break;
        case 'dividir':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            echo "<p>$num1 / $num2 = $resultado</p>";
        } else {
            echo "<p>Error: No se puede dividir por cero</p>";
        }
        break;
        default:
        echo "<p>Error: Operador no válido</p>";
        break;
}
?>

