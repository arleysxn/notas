<?php
class Conexion{
    protected $db;
    private $drive ="mysql";
    private $host ="localhost"
    private $dbname ="notas_2023";
    private $usuario ="root"
    private $contrasena = "";
    
    public function __construct(){
      try{
        $db = new PDO("{$this->drive}:host={$this->host};namebd={$this->namebd};$this->user, $this->password");
        $db.setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
        echo "se ha iniciado correctamente";

      } catch (PDOException $e){
        echo "Ha surgido un error: Detalle ".$e->getMessage();
      }
    }
    

}
?>
