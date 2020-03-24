<?php

require_once 'Conectar.php';
session_start();
class Usuario {
	private $id;
	private $nombre;
	private $apellidos;
	private $cedula;
	private $direccion;
	private $sexo;
	private $telefono;
	private $correo;
    private $user;
    private $password;
    private $rot;
    
	public function __construct() {
        $this->conec = new Conectar();
		$this->conec->ConectarBD();
	}

	// ESTABLEZCO UNA CONEXION A LA BASE DE DATOS, RECUERDO QUE EN index.php ya use el requiere_once 'Conectar.php'   cubrid_

// -------------------------------------------------------------------------------------------------------------- GETTER´S

	function Get_Id()        { return $this->id;        }
	function Get_Nombre ()   { return $this->nombre;    }
	function Get_Apellidos() { return $this->apellidos; }
    function Get_Cedula()    { return $this->cedula;    }
    function Get_Direccion() { return $this->direccion; }
    function Get_Sexo()      { return $this->sexo;      }
    function Get_Rot()       { return $this->rot;       }
    function Get_Telefono()  { return $this->telefono;  }
    function Get_Correo()    { return $this->correo;    }
    function Get_User()      { return $this->user;      }
    function Get_Pasword()   { return $this->password;  }


// -------------------------------------------------------------------------------------------------------------- SETTER´S 

	function Set_Id($id)               { $this->id        = $id;           }
	function Set_Nombre($nombre)       { $this->nombre    = $nombre;       }
	function Set_Apellidos($apellidos) { $this->apellidos = $apellidos;    }
	function Set_Cedula($cedula)       { $this->cedula     = $cedula;	   }
	function Set_Direccion($direccion) { $this->direccion  = $direccion;   }
	function Set_Sexo($sexo)           { $this->sexo    = $sexo;           }
	function Set_Rot($rot)             { $this->rot       = $rot;	       }
    function Set_Telefono($telefono)   { $this->telefono       = $telefono;}
    function Set_Correo($correo)       { $this->correo       = $correo;	   }
    function Set_User($user)           { $this->user       = $user;	       }
    function Set_Pasword($password)    { $this->password       = $password;}

// --------------------------------------------------------------------------------------------------------------
	public function save() {
		$consulta = "INSERT INTO usuario VALUE (NULL, '{$this->Get_Nombre()}', '{$this->Get_Apellidos()}', '{$this->Get_Cedula()}', '{$this->Get_Direccion()}', '{$this->Get_Sexo()}', '{$this->Get_Telefono()}', '{$this->Get_Correo()}','{$this->Get_Pasword()}','{$this->Get_User()}',NULL );";
		$save =  $this->conec->getConexion()->query($consulta);
		
		$resultado = false;

		if($save) {
			$resultado = 1;
		}

		return $resultado;
	}

// --------------------------------------------------------------------------------------------------------------
	public function Login() {
	

	// CONSULTA PARA COMPROBAR LA EXISTENCIA DEL USUARIO EN LA BASE DE DATOS
	$consulta = "SELECT * FROM usuario WHERE Usuario = '$this->user'";
	$resultado_consulta = $this->conec->getConexion()->query($consulta);
		
	
		
	if($resultado_consulta &&  mysqli_num_rows($resultado_consulta) == 1) {
		$usuario = mysqli_fetch_assoc($resultado_consulta);

		// UTILIZAR UNA $_SESSION, PARA GUARDAR LOS DATOS DEL USUARIO LOGIADO O GUARDAR EL FALLO DE SER FALLIDO EL INGRESO 
		$_SESSION['usuario'] = $usuario;
	//	echo " </br></br>ENTRO 1 </br></br>";
	} else {

	 /*  $_SESSION['error_login'] = "Usuario, No encontrado";
	   echo $_SESSION['error_login'];*/
	   unset($_SESSION['usuario']);
	}
	}
	

	public function Admin()
	{
		$consultar="SELECT u.Nombre, u.Apellido, u.Cedula, b.Nombre AS 'Evento', b.Ubicacion, b.Id_Boleto FROM boleto b INNER JOIN usuario u ON b.usuario_Id = u.Id_Usuario";
		$result=$this->conec->getConexion()->query($consultar);
	
		if($consultar ) {

			$usuario= mysqli_fetch_all($result);
			
			return $usuario;
			
			
		}
	}
// --------------------------------------------------------------------------------------------------------------
}