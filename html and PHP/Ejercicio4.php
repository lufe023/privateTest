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
    
    <h3>datos de la persona con la mayor edad encontrada</h3>
<?php

// 4. Dado el siguiente array de objetos obtener los datos de la persona con la mayor edad encontrada.

$personas = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
print_r($personas);

echo "<p><h4>La Persona con mayor edad es: ".array_search(max($personas), $personas)." </h4></p>";

?>
</article>
</body>
</html>