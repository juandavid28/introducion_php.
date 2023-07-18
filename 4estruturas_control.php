<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //if, if.else
    echo "<h1>if</h1>";
    //Ejemplo 1
    $color = "rojo";
    if($color = "rojo")
    {
        print("Efectivamente, el color es rojo");
    }

    echo "<br>";

    //Ejemplo 2
    $x = 10;
    $y = 15;
    if($x == $y)
    {
        print("x e y son iguales");
    }
    elseif($x > $y)
    {
        print("x es mayor que y");
    }
    elseif($x < $y)
    {
        print("x es mayor que y");
    }

    echo "<br>";
    echo "<h1>while</h1>";
    //while
    // Indica qeu mientra no se cumpla una determinada condicion, no se saldra del bucle y no
    // Saltara a la siguiente linea de codigo
    $x = 10;
    while(--$x)
    {
        echo "<big>";
        echo "<b>";
        print("Numero: ".$x);
        echo "<br>";
        echo "<hr>";

    }
    //do.while

    //for
    //sera utilizado para ejecutar un bucle eterminado numero de veces, hasta que se cumpla una
    // condicion
    echo "<br>";
    echo "<h1>for</h1>";
    for($x=5; $x<=10; $x++)
    {
        print("Numero: ".$x."<br>");
    }
    //require
    //Sirve para incluir archivos en nuestras paginas y solo sera necesario hacer referencia
    //a este archivo con la instrucion requiere. se usa principalmente para definir variables, 
    //y estas estaran listas una vez hagamos una llamada al archivo donde esten guardadas.

    //include
    // El funcionamiento es igual que el de la instruccion requiere(), con la diferencia de que si
    // puede procesar el codigo tanto veces como la llamemos a esa pagina externa.
    echo "<br>";
    echo "<h1>Include</h1>";
    include("variables.php");
    echo "<br>";
    print("$x", "$z", "$y");

    //swit
    // Se utiliza para comprobar un dato entre varias pasibilidades
    echo "<br>";
    echo "<h1>swite</h1>";
    $color = "negro";
    switch($color)
    {
        case "blanco";
           $sector = "claro";
           break;
        case "naranja";
           $sector = "normal";
           break;
        case "negor";
           $sector = "oscuro";
           break;
    }
    print($sector);
    ?>
</body>
</html>