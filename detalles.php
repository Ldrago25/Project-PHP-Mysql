<?php
require_once 'Boleto.php';
$obj=new Boleto();

if(isset($_GET["idBoleto"]))
{

    $obj->Set_Id($_GET["idBoleto"]);


    $aux=$obj->login_b();


}

?>



<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boletos Ventas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style2.css" />


</head>


<body>


    <div class="Detalle">
    <h2><?php require_once 'Usuario.php'; echo 'Bienvenido(a) Administrador '.$_SESSION["usuario"]["Nombre"]; ?> </h2>
    <h2>Detalles del evento</h2>
    </div>


    <div class="tabla">
    <table style="width: 100%">

    <tr class="tr">
    <th>Serial</th>
    <th>Nombre</th>
    <th>Fecha</th>
    <th>Ubicacion</th>
    </tr>

    <tr>
    <th><?php echo $aux["Seria"]; ?></th>
    <th><?php echo $aux["Nombre"]; ?></th>
    <th><?php echo $aux["Fecha"]; ?></th>
    <th><?php echo $aux["Ubicacion"]; ?></th>
    </tr>



    </table>
    
    </div>
<div class="lin">
<a href="Admin.php">Regresar</a>
</div>
    

</body>


</html>