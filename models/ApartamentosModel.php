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

    public function get_infoapart($type)
    {
    	$query = "SELECT * FROM info_apart WHERE type_fk = $type;";
    	return $this->getOneObject($query);
    }
}
  ?> 
