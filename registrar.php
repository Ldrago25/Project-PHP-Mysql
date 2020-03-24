<?php 
session_start();
require_once 'Usuario.php';
if( isset ($_POST['Pasword']) && isset($_POST['Pasword1']) && !empty($_POST['Pasword']) && !empty($_POST['Pasword1']) ) {
    
    if( $_POST['Pasword'] != $_POST['Pasword1']) {
        $_SESSION['error'] = "falled_1"; 
        header("Location:http://localhost/Project/index.php");
    } else {
        
         $obj=new Usuario();
         $obj->Set_Nombre($_POST['User']);
         $obj->Set_Apellidos($_POST['Apellidos']);
         $obj->Set_Cedula($_POST['Cedula']);
         $obj->Set_Direccion($_POST['Direccion']);
         $obj->Set_Sexo($_POST['Selec']);
         $obj->Set_Telefono($_POST['Telef']);
         $obj->Set_Correo($_POST['Correo']);
         $obj->Set_User($_POST['Nomb']);
         $obj->Set_Pasword($_POST['Pasword']);
         $obj->Set_Rot(NULL);
        
         //var_dump($obj);
         $obj->save();
        $_SESSION['error'] = "falled_2"; 

         header("Location:http://localhost/Project/index.php");

    }
}



?>