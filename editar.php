<?php
require_once 'Boleto.php';

$obje=new Boleto();

if(isset($_GET["idBoleto"])){

    $obje->Set_Id($_GET["idBoleto"]);

    $ver=$obje->login_b();
    $id=$_GET["idBoleto"];
    
}

?>
<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boletos Eventos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />


</head>


<body>

    <div class="encabe">


    <h3><?php require_once 'Usuario.php'; echo 'Bienvenido(a) Administrador '.$_SESSION['usuario']['Nombre'];?></h3>    
    <h1>Boletos para Eventos!</h1>
    
    
    </div>


    <div class="Boleto">
    <form action="Completo.php" method="POST">

    <p> 
    Serial
    <br>
    <input name="Serial" type="number" value=<?php echo $ver["Seria"]?> required/>
    <br>
    Nombre
    <br>
    <input name="Nombre" type="text" value=<?php echo $ver["Nombre"]?> required/>
    <br>
    fecha
    <br>
    <input name="date" type="date" value=<?php echo $ver["Fecha"]?> required/>
    <br>
    Ubicacion
    <br>
    <select name="Ubi" class="selec">
    <option value="VIP"> VIP</option>
    <option value="PLATINO"> PLATINO</option>
    <option value="ALTOS"> ALTOS</option>
    <option value="MEDIOS"> MEDIOS</option>
    </select>
    <br>
    <br>

    <input type="hidden" name="dev" value=<?php echo $id?> />
    <input type="submit" value="Editar"/>

    </p>
    </div>

    


    </form>
    


</body>


</html>