<?php
// Etiqueta de apertura '<?php' y cierre '?>'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Variables </title>
</head>
<body>
    <h1> Funcion echo y print</h1>
    <?php
    echo "Hola Mundo";
    echo "Matthias Duarte";
    echo "Estoy realiznado el Curso de PHP en Open BootCamp";
    ?>
    <?php
    $a = "mundo";
    echo "Hola" . $a . "<br>";
    echo "Hola $a <br>";
    ?>
    <?php
    $txt = "Hola Mundo";
    $x = 5;
    $y = 10.5;
    echo "$txt <br> $x <br> $y";

    $nombre_del_coche = "fiat 700";

    /*Una variable comienza con el signo '$', seguido del nombre de la Variables
    **Un nombre de variable debe comenzar con una letra o el caracter de un subtayado '_'
    **El nombre de una variable **NO** puede comenzar con un numero
    **Un nombre de variable solo puede contenercaracteres alfanumericos y guiones bajos 'A-z', '0-9', '_'
    Los nombres de las variables distinguen entre mayusculas y minusculas y serian dos variables diferentes '$age' y '$AGE'
    */
    //PHP es un lenguaje de tipado libre 

    $a = 5;
    $a = "5";
    $a = 5.0;
</body>
</html>