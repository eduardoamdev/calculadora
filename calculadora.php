<style>

  .blue{
    color: blue;
    font-size: 1.6rem;
    font-weight: bold;
    text-align: center;
  }

</style>

<?php

    function operar($num1, $num2, $op) {

      if(!strcmp("suma", $op)){

        echo "<p class='blue'>El resultado de la " . $op . " es: " . ($num1+$num2) . "</p>";

      } else if(!strcmp("resta", $op)){

        echo "<p class='blue'>El resultado de la " . $op . " es: " . ($num1-$num2) . "</p>";

      } else if(!strcmp("multiplicación", $op)){

        echo "<p class='blue'>El resultado de la " . $op . " es: " . ($num1*$num2) . "</p>";

      } else if(!strcmp("división", $op)){

        echo "<p class='blue'>El cociente de la " . $op . " es: " . round($num1/$num2) . "</p>";

        echo "<p class='blue'>El resto de la " . $op . " es: " . ($num1%$num2) . "</p>";

      } else if(!strcmp("incremento1", $op)){

        echo "<p class='blue'>El resultado del incremento del primer operador es: " . ($num1+1) . "</p>";

      } else if(!strcmp("decremento1", $op)){

        echo "<p class='blue'>El resultado del decremento del primer operador es: " . ($num1-1) . "</p>";

      } else if(!strcmp("incremento2", $op)){

        echo "<p class='blue'>El resultado del incremento del segundo operador es: " . ($num2+1) . "</p>";

      } else if(!strcmp("decremento2", $op)){

        echo "<p class='blue'>El resultado del decremento del segundo operador es: " . ($num2-1) . "</p>";

      }

    }

?>
