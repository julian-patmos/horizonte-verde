<?php 
require_once "conn.php";

class ApartamentosModel extends Conexion
{    
    public function __construct()
    {
        parent::__construct();
    }

    public function get_apart($id, $torre)
    {
        return $this->getObjects("SELECT * FROM horizonte WHERE type=$id AND idTower = $torre AND status = 0;");
    }
}
  ?> 