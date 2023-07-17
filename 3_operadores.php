<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores</h1>

    <?php
    //Operadores aritmeticos

    /* El operador de división ("/") devuelve un valor flotante a menos que los    dos operandos sean integers (o strings que se conviertan a integers) 
    y los números sean divisibles, en cuyo caso será devuelto un valor integer.
    
    Los operandos del módulo se convierten en integers (por extracción de la parte decimal) antes del procesamiento.
    
    El resultado del operador módulo % tiene el mismo signo que el dividendo — es decir, el resultado de $a % $b 
    tendrá el mismo signo que $a. Por ejemplo: */

     echo (5 % 3)."\n";           // muestra 2
     echo (5 % -3)."\n";          // muestra 2
     echo (-5 % 3)."\n";          // muestra -2
     echo (-5 % -3)."\n";         // muestra -2
    ?>

    <h2>Operadores de comparacion</h2>

    <?php

    /*Si se compara un número con un string o la comparación implica strings numéricos, entonces cada string es convertido en un número y la comparación realizada numéricamente. Estas reglas también se aplican 
    a la sentencia switch. La conversión de tipo no tiene lugar cuando la comparación es === o !== ya que esto involucra comparar el tipo así como el valor.*/

     var_dump(0 == "a"); // 0 == 0 -> true
     var_dump("1" == "01"); // 1 == 1 -> true
     var_dump("10" == "1e1"); // 10 == 10 -> true
     var_dump(100 == "1e2"); // 100 == 100 -> true
     
     switch ("a") {
     case 0:
         echo "0";
         break;
     case "a": // nunca alcanzado debido a que "a" ya ha coincidido con 0
         echo "a";
         break;
     }
    ?>
    
    <h3>Operadores logicos</h3>
    <?php
    /*La razón para tener las dos variaciones diferentes de los operadores "and" y "or" es que ellos 
    operan con precedencias diferentes. */
     
     $a = (false && foo());
     $b = (true  || foo());
     $c = (false and foo());
     $d = (true  or  foo());

     $e = false || true;

     $f = false or true;

     var_dump($e, $f);

     $g = true && false;

     $h = true and false;

     var_dump($g, $h);
    ?>


    /*Operadores de union de cades*/
</body>
</html>