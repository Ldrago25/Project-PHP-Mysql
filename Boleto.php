<?php



require_once 'Conectar.php';
require_once 'Usuario.php';

class Boleto{
    private $id;
    private $serial;
    private $nombre;
    private $fecha;
    private $ubicacion;
  
    public function __construct() {
        $this->conec = new Conectar();
        $this->conec->ConectarBD();
        
    }
    
    
    function Get_Id()        { return $this->id;        }
    function Get_Serial ()   { return $this->serial;    }
    function Get_Nombre()    { return $this->nombre;    }
    function Get_Fecha()     { return $this->fecha;     }
    function Get_Ubicacion() { return $this->ubicacion; }

    function Set_Id($id)               { $this->id        = $id;           }
    function Set_Serial($serial)       { $this->serial = $serial;          }
    function Set_Nombre($nombre)       { $this->nombre = $nombre;          }
    function Set_Fecha($fecha)         { $this->fecha     = $fecha;	       }
    function Set_Ubicacion($ubicacion) { $this->ubicacion  = $ubicacion;   }


    public function save() {
		$consulta = "INSERT INTO boleto VALUE (NULL,'{$this->Get_Serial()}','{$this->Get_Id()}', '{$this->Get_Nombre()}', '{$this->Get_Fecha()}', '{$this->Get_Ubicacion()}' );";
    $save =  $this->conec->getConexion()->query($consulta);
    
		$resultado = false;

		if($save) {
			$resultado = 1;
		}
      //  var_dump($resultado);
		return $resultado;
    }

    //--------------Busco el BOLETO-----------//
    public function login_b()
    {

        $consulta = "SELECT * FROM boleto WHERE Id_Boleto = '$this->id'";
        $resultado_consulta = $this->conec->getConexion()->query($consulta);

        if($resultado_consulta &&  mysqli_num_rows($resultado_consulta) == 1) {

          $boleto = mysqli_fetch_assoc($resultado_consulta);
          return $boleto;

        } else{

          return false;
          
      }
      

    }

    
//-------------ACTUALIZO DATOS DEL BOLETO------------------------//
    public function edite()
    {
      
	
      $Edita="UPDATE boleto SET Seria='$this->serial',Nombre='$this->nombre',Fecha='$this->fecha',Ubicacion='$this->ubicacion' WHERE Id_Boleto='$this->id'";
     
      $edito=$this->conec->getConexion()->query($Edita);
      var_dump($edito);
      if($edito )
      {
        $completo = mysqli_fetch_row($edito);
        return $completo;
      }


    }


//-----------BORRO EL REGISTRO----------------------//
    public function borrar()
    {
      $consulto="DELETE FROM boleto WHERE Id_Boleto='$this->id'";
      $borro=$this->conec->getConexion()->query($consulto);
     // var_dump($borro);
    }

    //---------REGISTRO POR ZONAS--------//

    public function login_z()
    {

        $consulta_z = "SELECT * FROM boleto WHERE Ubicacion = '$this->ubicacion'";
        $resultado_consulta_z = $this->conec->getConexion()->query($consulta_z);
       

        if($resultado_consulta_z &&  mysqli_num_rows($resultado_consulta_z) > 0) {

          $zona = mysqli_fetch_all($resultado_consulta_z);
          return $zona;

        } else{

          return false;
          
      }
      

    }



}