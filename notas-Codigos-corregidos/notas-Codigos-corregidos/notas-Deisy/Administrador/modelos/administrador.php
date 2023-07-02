<?php
include_once ('../../conexion.php');
class Administrador extends Conexion
{
   
    public function __construct(){
        $this->db = parent::__construct();
    }

    //funcion para registrar los usuarios

    public function addadmi($Nombreusu,$Apellidousu,$Usuario,$Passwordu,$Perfil,$Estado)
{
   //verificar de que no exista un usuario en la bd
   $sql1 = ("SELECT * FROM usuarios WHERE Usuario = '$Usuario'");
   $Resultado=$this->db->query($sql1);
   if($Resultado->rowCount()>0)
   {
    echo "<script>alert('El usuario ya esta registrado');
    window.location='../admin/paginas/agregar.php';</script>";
   }
   //crear la sentencia sql
   $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordu,Perfil,Estado)values (:Nombreusu,:Apellidousu,:Usuario,:Passwordu,:Perfil,:Estado)");

   $statement->bindParam(':Nombreusu',$Nombreusu);
   $statement->bindParam(':Apellidousu',$Apellidousu);
   $statement->bindParam(':Usuario',$Usuario);
   $statement->bindParam(':Passwordu',$Passwordu);
   $statement->bindParam(':Perfil',$Perfil);
   $statement->bindParam(':Estado',$Estado);
   if($statement->execute())
   {
     
     echo "Usuario registrado";
     header('Location: ../paginas/listado.php');

   }else
   {
      echo "Usuario no registrado";
      header('Location: ../paginas/agregar.php');

   }


}
    //funcion para consultar todos los usuarios administradores

    public function getadmin()
    {

        $sql = "SELECT * FROM usuarios WHERE perfil='ADMINISTRADOR'";
        $result = $this->db->query($sql);
        if ($result->rowCount() > 0) {
            while($row = $result->fetch()) {
                $resultset[] = $row;
            }
        }
        return $resultset;
    }
    //funcion para consultar el usuario de acuerdo a su id
    public function getidad($Id)
    {
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        // Obtener los resultados utilizando fetch()
        $resultado = $statement->fetch(PDO::FETCH_ASSOC);
       
        // Devolver los resultados
        return $resultado;
           
        }

   

    //funcion actualizar los datos del usuario
   
    public function updatead($Id, $Nombreusu, $Apellidousu, $Usuario, $Passwordu, $Perfil, $Estado)
{
    $statement = $this->db->prepare("UPDATE usuarios SET id_usuario=:Id, Nombreusu=:Nombreusu, Apellidousu=:Apellidousu, Usuario=:Usuario, Passwordu=:Passwordu, Perfil=:Perfil, Estado=:Estado WHERE id_usuario=:Id");
    $statement->bindParam(':Id', $Id);
    $statement->bindParam(':Nombreusu', $Nombreusu);
    $statement->bindParam(':Apellidousu', $Apellidousu);
    $statement->bindParam(':Usuario', $Usuario);
    $statement->bindParam(':Passwordu', $Passwordu);
    $statement->bindParam(':Perfil', $Perfil);
    $statement->bindParam(':Estado', $Estado);

    if ($statement->execute()) {
        header('Location: ../paginas/listado.php');
    } else {
        header('Location: ../paginas/editar.php');
    }
}
    //funcion para eliminar un usuario
    public function deletead($Id)
{
    try {
        $statement = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario=:Id");
        $statement->bindParam(':Id', $Id);
        if ($statement->execute()) {
            echo "Usuario eliminado";
            header('Location: ../paginas/listado.php');
            exit();
        } else {
            echo "Error: No se pudo eliminar el usuario";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}



}


?>
