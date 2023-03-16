<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<article>
    
    <h3>Funcion que cuenta los caracteres</h3>
<?php

$texto = "Crea una función llamada “cantidad_caracteres” que retorne el número de caracteres de un texto.";

function cantidad_caracteres($words)
{
   
    return strlen($words);
}

echo 'el texto: "'.$texto.'", tiene un total de: <b>'. cantidad_caracteres($texto). "</b> Caracteres.";
?>
</article>
</body>
</html>
