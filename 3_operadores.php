<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>operadores</h1>
    <?php
    //operadores aritmeticos
    //operadores de comparacion
    //operadores logicos
    //operadores de union de cadenas
    ?>
    <h1>operadores aritmeticos</h1>
    <?php
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
    echo"<h1>operadores de comparacion</h1><br>";
    $x = 5;
    $y = 5;
    echo ($x == $y);
    echo ($x <= $y);
    ?>
    <?php
    echo"<h1>operadores logicos</h1><br>";
    $x = 5;
    $y = 5;

    if(($x==4) && ($y==5));
    {
        print("estas en lo correcto");
    }
    echo"<br>";
    if(($x==4) OR ($y==3));
    {
        print("la segunda estas en lo correcto");
    }
    ?>
    <?php
    echo "<h1>Operadores de union de cadenas</h1><br>";
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
</html>