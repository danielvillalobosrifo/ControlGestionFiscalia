<?php
class ControlUsuarioController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){       
        //Cargamos la vista index y le pasamos valores
        $this->view("indexControlUsuario",array(
            "Hola"    =>"Soy Víctor Robles"
        ));
    }
    
    public function crear(){
        if(isset($_POST["rut"])){           
            $controlUsuario=new ControlUsuario($this->adapter);
            $controlUsuario->setRut($_POST["rut"]);
            $controlUsuario->setNombre($_POST["nombre"]);
            $save=$controlUsuario->save();
        }
        $this->redirect("ControlUsuario", "index");
    }
}
?>
