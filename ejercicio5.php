<h2>Ejercicio 5</h2>
<?php 

    $parameter = null;
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["numero"])) {
        $parameter = $_GET["numero"];
    }

    // print on display mutiplicate table for a parameter passing to GET method
    $numero = isset($parameter) ? $parameter : 5;
    echo "<h2>Tabla de multiplicar ".$numero."</h2>";

    for($i = 1;$i<=10;$i++) {
        $multiplicacion = $numero * $i;
        echo "<p>".$i." x ".$numero.": ".$multiplicacion."</p>";
    }
?>