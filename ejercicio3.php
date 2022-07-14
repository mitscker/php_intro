<h2>Ejercicio 3</h2>
<?php 

    // print on display square of natural numbers
    // assing if conditional
    for($i = 1;$i<=30;$i++) {
        $par = false;
        $cuadrado = $i*$i;
        if($i%2 == 0) {
            $par = true;
        }
        echo "El cuadrado de ".$i." es:".$cuadrado." ".($par == true ? "es par" : "es impar")."<br/>";
    }

?>