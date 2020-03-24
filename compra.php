
<?php

echo '<script> alert("Boleto comprado con exito!"); </script>  
<a href="index.php">Delvolver a la pagina principal</a>';
require_once 'Boleto.php';
require_once  'Usuario.php';


$boleto=new Boleto();
$boleto->Set_Id($_SESSION['usuario']['Id_Usuario']);
$boleto->Set_Serial($_POST['Serial']);
$boleto->Set_Nombre($_POST['Nombre']);
$boleto->Set_Fecha($_POST['date']);
$boleto->Set_Ubicacion($_POST['Ubi']);

$boleto->save();






