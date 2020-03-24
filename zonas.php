<?php

require_once 'Boleto.php';

$obj=new Boleto();

$obj->Set_Ubicacion('ALTOS');
$Altos=$obj->login_z();

$obj->Set_Ubicacion('MEDIOS');
$Medios=$obj->login_z();

$obj->Set_Ubicacion('VIP');
$Vip=$obj->login_z();

$obj->Set_Ubicacion('PLATINO');
$PLATINO=$obj->login_z();

?>



<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listado De ventas</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style2.css" />
    <link href="font-awesome/css/fontawesome.css" rel="stylesheet">
    <link href="font-awesome/css/brands.css" rel="stylesheet">
    <link href="font-awesome/css/solid.css" rel="stylesheet">


</head>


<body>

    <div class="ventas"> 

    <div class="pn">
    <img src="bole.png" text="Eventos" width="300" height="100" > </img>
    </div>


    <div class="listado">

    <h1> RESUMEN DE EVENTOS!!</h1>

    </div>
    </div>    

    <div class="resumen" >

    <h2>Listado de ventas</h2>
    
    <table style="width: 100%">
    <div class="columnas">
    <tr class="tr">
    <th>Serial</th>
    <th>Nombre</th>
    <th>Fecha</th>
    <th>Ubicacion</th>
    </tr>
    </div>


    <?php foreach ($Altos as $aux) { ?>
    <tr>
    <td><?php echo $aux[1]; ?></td>
    <td><?php echo $aux[3]; ?></td>
    <td><?php echo $aux[4]; ?></td>
    <td><?php echo $aux[5]; ?></td>
    </tr>
    <?php } ?>

    <?php foreach ($Medios as $aux) { ?>
    <tr>
    <td><?php echo $aux[1]; ?></td>
    <td><?php echo $aux[3]; ?></td>
    <td><?php echo $aux[4]; ?></td>
    <td><?php echo $aux[5]; ?></td>
    </tr>
    <?php } ?>
    
    <?php foreach ($Vip as $aux) { ?>
    <tr>
    <td><?php echo $aux[1]; ?></td>
    <td><?php echo $aux[3]; ?></td>
    <td><?php echo $aux[4]; ?></td>
    <td><?php echo $aux[5]; ?></td>
    </tr>
    <?php } ?>

    <?php foreach ($PLATINO as $aux) { ?>
    <tr>
    <td><?php echo $aux[1]; ?></td>
    <td><?php echo $aux[3]; ?></td>
    <td><?php echo $aux[4]; ?></td>
    <td><?php echo $aux[5]; ?></td>
    </tr>
    <?php } ?>
    
    </table>
    
    </div>
    
    </div>
    <div class="links">
    
        <a title="Volver" href='Admin.php'><i class="fas fa-arrow-alt-circle-left fa-5x" ></i></a>

    </div>
    
</body>


</html>