<?php
require_once 'Boleto.php';

$obj=new Boleto();
if (isset($_GET["idBoleto"]))
{

    $obj->Set_Id($_GET["idBoleto"]);

 //   var_dump($obj);

    $obj->borrar();
}

header("Location:http://localhost/Project/Admin.php");