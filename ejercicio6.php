<h2>Ejercicio 6</h2>
<?php 

    // create months array and display each value with a for 
    $meses = array(
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre",
    );

    for($i = 0;$i<count($meses);$i++) {
        echo "<p>".$meses[$i]."</p>";
    }

?>