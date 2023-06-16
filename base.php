<?php

class Conexion
{
    protected $db;
    private $drive = "mysql";
    private $host = "localhost";
    private $namebd = "Notas2023";
    private $user = "root";
    private $Password = "";


    public function __construct()
    {
       
        try{
            $db = new PDO("{$this->drive}:host={$this->host};namebd={$this->namebd}", $this->user,$this->Password);
            
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion realizada";
            echo "<br>";
        }catch(PDOEXCEPTION $e){
            echo "no se puede realizar la conexion ".$e.getMessage();
            


    }
  }
}

?>
