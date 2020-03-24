

<?php

require_once 'Usuario.php';



$obj = new Usuario();
if(isset($_POST['User'])){
  
   $obj->Set_User($_POST['User']);
  
}

$obj->Login();

if(isset($_SESSION['usuario'])){

   if(!is_null($_SESSION['usuario']['rot'])){
       header("Location:http://localhost/Project/Admin.php");
   }else{

   
    header("Location:http://localhost/Project/Boletos.php");


   }

}else{
    echo " Por favor registrate";
    echo '<a href="index.php">Delvolver a la pagina principal</a>'; 
    echo "<br>";
}



