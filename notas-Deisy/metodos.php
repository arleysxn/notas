<?php
include_once ('conexion.php');

class Consultas extends Conexion
{

    public function __construct(){

        $this->db=parent::__construct();
    }

    public function getmaterias()
    {
        $row=null;
        $statement = $this->db->prepare("SELECT * FROM materias");
        $statement->execute();
        while($result = $statement->fetch())
        {
            $row[]=$result;
        }
        return $row;

    }


    public function getdocentes()
    {
        $sql = "SELECT * FROM docente WHERE Perfildoc='docente'";
        $result = $this->db->query($sql);
        if($result->rowCount()>0)
        {
            while($row = $result->fetch())
            {
                $vec[]=$row;
            }
        }
        return $vec;
    
    }

}
?>




