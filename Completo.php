<?php 

require_once 'Boleto.php';

$obje=new Boleto();

    $obje->Set_Id($_POST["dev"]);
    $obje->Set_Serial($_POST["Serial"]);
    $obje->Set_Nombre($_POST["Nombre"]);
    $obje->Set_Fecha($_POST["date"]);
    $obje->Set_Ubicacion($_POST["Ubi"]);
    $Full=$obje->edite();
    header("Location:http://localhost/Project/Admin.php");


?>