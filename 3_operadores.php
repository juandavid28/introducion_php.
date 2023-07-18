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
     //Suma: +
     //Resta: -
     //Multiplicacion: *
     //Divicion: /
     //Modulo: %
     //Incremento: ++1
     //Decremento: --1
     //Exponenciacion: **

     $num1 = 1;
     echo ("x = ".$num1."<br>");
     $num2 = 5;
     echo ("x = ".$num2."<br>");
     $num3 = 4;
     echo ("x = ".$num3."<br>");

     $suma = $num1 + $num2;
     echo ("suma = ".$suma."<br>");
     $resta = $num1 - $num3;
     echo ("resta = ".$resta."<br>");
     $multiplicacion = $suma*$resta;
     echo ("multiplicacion = ".$multiplicacion."<br>");
     $final = $multiplicacion++;
     echo("final =".$final."<br>");
    ?>
    
    <?php
    /*Si se compara un número con un string o la comparación implica strings numéricos, entonces cada string es convertido en un número y 
    la comparación realizada numéricamente. Estas reglas también se aplican a la sentencia switch. La conversión de tipo no tiene lugar 
    cuando la comparación es === o !== ya que esto involucra comparar el tipo así como el valor.*/
    echo "<h1>Operadores de comparacion</h1><br>";
    Sx = 5;
    Sy = 5;
    echo ($x == Sy);
    echo ($x <= $y);

    ?>

    <?php
    // Operadores logicos
    // AND 0 &&: $a && sb es True si $a y sb son verdaderos
    // OR 0 ||: $a || $b es true si $a o $b son verdaderos
    // XOR: $a XOR $b es true si $a es verdadero o $b es verdadero, pero no los dos
    // !: !$a es true si $a es false
    echo "<h1>Operadores logicos</h1><br>"
    $x = 4;
    $y = 5;
    
    if(($x==4) && ($y==5))
    {
        print("Estas en lo correcto");
    }
    echo"<br>";
    if(($x==4) && ($y==3))
    {
        print("La segunda operacion tambien es correcta");
    }

    //Operadores de union (concatenacion) de cadenas
    // Para la union de cadenas se emplea el pnto (.)
    echo "<h1>Operadores de union de cadenas</h1><br>"
    $t = "Ejemplo";
    $w = 'union';
    $x = "de";
    $y = "cadenas";
    $z = ' ';
    $resultado1 = $t;
    $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
    echo '<b><h1>';
    echo $resultado1;
    echo "<hr>";
    echo $resultado2;
    echo "</b></hr>";

    ?>
    
</body>