<?php
include_once('../../base.php');
class Administrador extends Conexion
{

  public function __construct(){

    $this->db=parent::__construct();
  
    }

    //funcion para registar los usuarios

    public function addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu)
    {
       //crear la sentencia sql
       $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu, Apellidousu, Usuariousu, Paswwordusu, Perfil, Estado)VALUES(:Nombreusu, :Apellidousu, :Usario, :Passwordu, :'Perfil', :'Estadousu')");

       $statement->bindParam(':Nombreusu',$Nombreusu);
       $statement->bindParam(':Apellidousu',$Apellidousu);
       $statement->bindParam(':Usuariousu',$Usuariousu);
       $statement->bindParam(':Passwordusu',$Passwordusu);
       $statement->bindParam(':Perfil',$Perfil);
       $statement->bindParam(':Estadousu',$Estadousu);
       if($statement->execute())
       {

        echo "Usuario registrado";
        header(Location: '../paginas/index.php');

       }else
       {
         echo "Usuario no registrado";      
         header(Location: '../paginas/agregar.php');  
       }

    }


    //funcion para consultar todos los usuarios administradores

    public function getadmin()
   
    {
      $result[];
      $sql= "SELECT * FROM usuarios WHERE Perfil='Administrador'";
      $result = $this->db->query($sql);
      if($result->rowCount()>0)
      {
      while($row->$result->fetch())
      {
        $result[]=$row;
      }
    }
      return $result;

    }

    // funcion para consultar el usuario de acuerdo a su id
    public function getidad($Id)
    {
      $row=null;
      $statement=$this->db->prepare("SELECT * FROM usuarios WHERE id_usuario=:Id");
      $statement->bindParam(':Id',$Id);
      while($result->$statement->fetch())
      {
        $row[]=$result;
      }


    }

    //funcion para actualizar los datos del usuario
    public function updatead($Id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Estado)
    {
      $statement=$this->db->prepare("UPDATE usuarios SET Nombreusu =:Nombreusu, Apellidousu=:Apellidousu, Usuario=:Usuariousu, Passwordu=:Passwordu, Estado=:Estadousu WHERE id_usuario=$Id");
      $statement->bindParam(':Id',$Id);
      $statement->bindParam(':Nombreusu',$Nombreusu);
      $statement->bindParam(':Apellidousu',$Apellidousu);
      $statement->bindParam(':Usuariousu',$Usuariousu);
      $statement->bindParam(':Passwordusu',$Passwordusu);
      $statement->bindParam(':Estadousu',$Estadousu);
      if($statement->execute())
      {
        header(Location: '../paginas/index.php');
      }else
      {
        header(Location: '../paginas/editar.php');
      }
    
    
    }
    //funcion para eliminar un usuario
public function deletead($Id)
{
  $statement=$this->db->prepare("DELETE FROM usuarios WHERE id_usuario=:Id");
  $statement->bindParam(':Id',$Id);
  if($statement->execute())
  {
    echo "usuario eliminado";
    header(Location: '..paginas/index.php');
  }else
  {
    echo "error no se puede eliminar usuario";
    header(Location: '..paginas/eliminar.php');
  }
}

    }


?>
