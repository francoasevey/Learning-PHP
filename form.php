
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener las edades ingresadas desde el formulario
        $edad1 = $_POST['edad1'];
        $edad2 = $_POST['edad2'];
        $edad3 = $_POST['edad3'];

        // Calcular el promedio
        $promedio = ($edad1 + $edad2 + $edad3) / 3;

        // Mostrar el resultado en pantalla
        echo "<p>El promedio de las edades ingresadas es: " . $promedio . "</p>";
    }
    ?>