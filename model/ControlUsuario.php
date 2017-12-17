<?php
class ControlUsuario extends EntidadBase{
    private $rut;
    private $nombre;

    public function __construct($adapter) {
        $table="productos";
        parent::__construct($table,$adapter);
    }
    
    public function getRut() {
        return $this->rut;
    }

    public function setRut($rut) {
        $this->rut = $rut;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function save(){
        $query="INSERT INTO usuario (CAR_ID, SE_ID, SI_ID, LD_ID, FIS_ID, USU_RUT, USU_NOMBRE, USU_A_PATERNO, USU_A_MATERNO, USU_F_NACIMIENTO, USU_F_INGRESO, USU_VIGENCIA, USU_ALIAS, USU_DOMICILIO, USU_COMUNA, USU_FONO, USU_CELULAR, USU_MAIL, USU_PISO, USU_RECHAZO)
              VALUES  (1, 1, 1, 1, 1, '".$this->rut."', '".$this->nombre."', 'a', 'm', '2017-12-01', '2017-12-01', 1, 'a', 'a', 1, 1, 1, 'd', 1, 'ds');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>