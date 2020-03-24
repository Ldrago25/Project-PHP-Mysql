<?php

require_once 'Usuario.php';
require_once 'Conectar.php';

$objs=new Usuario();
$all=$objs->Admin();

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
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cedula</th>
    <th>Evento</th>
    <th>Ubicacion</th>
    <th>Action</th>
    <th>Action</th>
    <th>Action</th>
    </tr>
    </div>
    
    <?php foreach ($all as $aux) { ?>
    <tr>
    
    <td><?php echo $aux[0]; ?></td>
    <td><?php echo $aux[1]; ?></td>
    <td><?php echo $aux[2]; ?></td>
    <td><?php echo $aux[3]; ?></td>
    <td><?php echo $aux[4]; ?></td>
    <td><a href='editar.php?idBoleto=<?php echo $aux[5]?>' title="Editar"><i class="fas fa-edit"></i>  </a> </td>
    <td><a href='borrar.php?idBoleto=<?php echo $aux[5]?>'title="Eliminar"><i class="fas fa-trash-alt"></i> </a> </td>
    <td><a href='detalles.php?idBoleto=<?php echo $aux[5]?>'title="Detalles"><i class="fas fa-info-circle"></i> </a> </td>
    </tr>
    <?php } ?>
    
    </table>
    
    </div>
    
    </div>
    <div class="links">
    
        <a href='zonas.php'>Ver registro por zonas</a>

    </div>
    
</body>


</html>