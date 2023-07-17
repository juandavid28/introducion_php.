<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables y constantes</h1>
    <!--script php-->
    <?php
        /*1. La forma de representar las variables en php es anteponiendo el simbolo  $ a la palabra que utilizaremos omo variables. Ejemplo:$edad*/

        /*2. Debemos presentar atencion a las mayusculas y minusculas, ya que PHP reconoce la diferencia entre las dos. $valores es diferente de $VALOR */

        /*3. ¿Para que se utilizan las variables? Gracias aellas podremos realizar operaciones aritmeticas y operaciones con cadenas, etc.*/

        /*4. Las variables las utilizaremos como y cuando queremos en una misma pagina, ya que no existe limitacion en cuanto a su uso */

        /*5. Hay que prestar atencion a no provocar errores por utilizar como variables palabras reservadas por el lenguaje. Ejemplo: sos se genera error, porque es una variable predefinida */

        /*6. Tambien se debe evitar el error de empezar una variable por un numero. Ejemplo: $35var = 45 es un error */

        /*En PHP no es necesario especificar el tipo de variable, pero si debemos saber cuando utilizar las comillas a la hora de definirlas, ya que su uso indicaria que se esta hablando de una cadena Ejemplo: $cuanta = 7, $nombre = "nestor"*/

        /*Podemos mostrar las variables en pantalla de varias maneras: una de ellas puede ser utilizando la opcion echo(); otra puede ser mendiante print(); */

        Sa = 5;
        Sb = "7";
        echo "<b><h1>";
        echo($a);
        echo"<br>";
        echo "</b></h1>"

        //Constantes
        //La forma de definr una constante es mediante la funcion define
        //Sintaxis: define("nombre_variables, "valor_variables")

        define("capital_colombia", "Bogota");
        define("habitantes", 700000);
    ?>
</body>
</html>