<?php
$empleados = [
    ["Nombre" => "Marcelo","Apellido" => "Velez","Edad" => 25,"Area" => "Administración", "Correo" => "marceloVelez@hotmail.com",],
    ["Nombre" => "Alberto","Apellido"=> "Unbertini","Edad" => 36,"Area" => "RRHH","Correo" => "albert.unbert@hotmail.com",],
    ["Nombre"=>"Isidora","Apellido" => "Gutierrez","Edad" => 33,"Area" => "Desarrollador","Correo" => "isi_gutie@gmail.cl",],
    ["Nombre" =>"Sebastian","Apellido" => "Jimenez","Edad" => 21,"Area" => "No Asignada","Correo" =>"s.jimenez@gmail.cl",],
    ["Nombre" => "Manuel","Apellido" => "Osorio","Edad" => 19,"Area" =>"Desarrollador","Correo" => "manu007@outlook.com",],
    ["Nombre" =>"Alonso","Apellido" => "Villa","Edad" => 47,"Area" => "Product Manager","Correo" =>"alvilla@hotmail.com",]
];

?>

<article>
    
    <h3>Lista de Empleados con indice impar</h3>

<table>
                  <thead>
                    <tr>
                      <th>Indice</th>
                      <th>Nombre Completo</th>
                      <th>Edad</th>
                      <th>Area</th>
                      <th>Correo</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
for ($i=0; $i < sizeof($empleados); $i++ ){
    if($i%2!=0){
        ?>
        <tr>
        <td> <?php  echo $i."</td>"; ?>
        <td> <?php  echo $empleados[$i]["Nombre"]." ".$empleados[$i]["Apellido"]."</td>"; ?>
        <td> <?php  echo $empleados[$i]["Edad"]."</td>"; ?>
        <td> <?php  echo $empleados[$i]["Area"]."</td>"; ?>
        <td> <?php  echo $empleados[$i]["Correo"]."</td>"; ?>
        </tr> 
    <?php   
    }
}
?></tbody>
</table>
</article>