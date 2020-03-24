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


    <h3><?php require_once 'Usuario.php'; echo 'Bienvenido(a) '.$_SESSION['usuario']['Nombre'];?></h3>    
    <h1>Boletos para Eventos!</h1>
    
    
    </div>


    <div class="Boleto">
    <form action="compra.php" method="POST">

    <p> 
    Serial
    <br>
    <input name="Serial" type="number" required/>
    <br>
    Nombre
    <br>
    <input name="Nombre" type="text" required/>
    <br>
    fecha
    <br>
    <input name="date" type="date" required/>
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
    <input type="submit" value="Comprar"/>

    </p>
    </div>




    </form>
    


</body>


</html>