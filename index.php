<?php 
require_once 'Conectar.php';
session_start(); ?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

    
</head>
<body>
    <div class="Login">

        <div class="Parrafo">
        <h2> Login para la compra de boletos para eventos!</h2>
        </div>
    
        <div class="LoginI">

        <form action="login.php" method="POST">
        <p class="LoginP">  
        Nombre
        <input name="User" type="text"required/>
        Contraseña
        <input name="pasword" type="password"required/>
        <input type="submit" value="Login" class="boton"/>
        </p>
        </form>


        </div>

    </div>


    <div class="Registro">

    <div class="Formulario">
    <form action="registrar.php" method="POST">
    <h2>  Si no te has registrado. Registrate aqui </h2> 

    <div id="cero">
    <div id = "uno">Nombres</div>
    <div id="dos"><input name="User" type="text" required/></div>
    </div>
    
    <div id="cero">
    <div id = "uno"> Apellidos</div>
    <div id="dos"><input name="Apellidos" type="text" required/><br></div>
    </div>
    
    <div id="cero">
    <div id = "uno">Cedula</div>
    <div id="dos"><input name="Cedula" type="number" required/></div><br>
    </div>

    <div id="cero">
    <div id = "uno">Direccion</div>
    <div id="dos"><input name="Direccion" type="text"required /></div><br>
    </div>

    <div id="cero">
    <div id = "uno">Sexo</div>
    <div id="dos"><select name="Selec" class="selec">
    <option value="F"> F</option>
    <option value="M"> M</option>
    </select></div><br>
    </div>

    <div id="cero">
    <div id = "uno">Numero de telefono</div>
    <div id="dos"><input name="Telef" type="number" required /></div><br>
    </div>


    <div id="cero">
    <div id = "uno">Correo</div>
    <div id="dos"><input name="Correo" type="text" required /></div><br>
    </div>
    
    <div id="cero">
    <div id = "uno">Nombre Usuario</div>
    <div id="dos"><input name="Nomb"  type="text" required /></div><br>
    </div>

    <div id="cero">
    <div id = "uno">Contraseña</div>
    <div id="dos"><input name="Pasword" type="password" required/></div><br>
    </div>


    <div id="cero">
    <div id = "uno">Repita Contraseña</div>
    <div id="dos"><input name="Pasword1" type="password" required/></div><br>
    </div>

    <div class="bot"><input type="submit" value="Registrar" /></div>

    <?php if (isset($_SESSION['error']) && $_SESSION['error'] == "falled_1" ): ?>
       <div class="error_registro"><h5>Error, Contraseñas no coinciden.</h5> </div>
       <?php unset($_SESSION['error']);?>    
    <?php endif;?>

    <?php if (isset($_SESSION['error']) && $_SESSION['error'] == "falled_2" ): ?>
       <div class="Exito"><h5>Registrado con exito.</h5> </div>
       <?php unset($_SESSION['error']);?>    
    <?php endif;?>
</form>
</div>


        
        

     

    </div>



</body>
</html>