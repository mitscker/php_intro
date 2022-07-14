<h2>Ejercicio 4</h2>
<?php 

    // print the first 20 natural numbers using cicle while
    $numero = 1;
    $contador = 1;
    while($contador <= 20) {
        $numero *= $contador;
        echo $numero."<br/>";
        $contador++;
    }
    echo "El resultado de multiplicar los primeros 20 numeros es: ".$numero;
?>