<?php
include_once('../../conexion.php');
class Administrador extends Conexion
{
  public function __construct()
  {
    $this->db = parent::__construct();
  }

  // Función para registrar los usuarios
  public function addadmi($Nombreusu, $Apellidousu, $Usuariousu, $Passwordusu, $Perfil, $Estadousu)
  {
    // Crear la sentencia SQL
    $statement = $this->db->prepare("INSERT INTO usuarios( Nombreusu, Apellidousu, Usuario, Passwordu, Perfil, Estado) VALUES(:Nombreusu, :Apellidousu, :Usuariousu, :Passwordusu, :Perfil, :Estadousu)");

    $statement->bindParam(':Nombreusu', $Nombreusu);
    $statement->bindParam(':Apellidousu', $Apellidousu);
    $statement->bindParam(':Usuariousu', $Usuariousu);
    $statement->bindParam(':Passwordusu', $Passwordusu);
    $statement->bindParam(':Perfil', $Perfil);
    $statement->bindParam(':Estadousu', $Estadousu);
    if ($statement->execute()) {
      echo "Usuario registrado";
      header('Location: ../../paginas/index.php');
    } else {
      echo "Usuario no registrado";
      header('Location: ../../paginas/agregar.php');
    }
  }

  // Función para consultar todos los usuarios administradores
  public function getadmin()
  {
    $sql = "SELECT * FROM usuarios WHERE Perfil='Administrador'";
        $result = $this->db->query($sql); 
        if ($result->rowCount() > 0) {
            while($row = $result->fetch()) {
                $resultset[] = $row;
            }
        }
        return $result;
  }

  // Función para consultar el usuario de acuerdo a su id
  public function getidad($Id)
  {
    $row = null;
    $statement = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario=:Id");
    $statement->bindParam(':Id', $Id);
    while ($result = $statement->fetch()) {
      $row[] = $result;
    }
  }

  // Función para actualizar los datos del usuario
  public function updatead($Id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu)
  {
     $statement=$this->db->prepare("UPDATE usuarios SET id_usuario=:Id,Nombreusu=:Nombreusu, Apellidousu=:Apellidousu, Usuario=:Usuariousu, Password=:Passwordusu,Perfil:=Perfil,Estado=:Estadousu WHERE id_usuario=$Id");
     $statement->bindParam(':Id',$Id);
     $statement->bindParam(':Nombreusu',$Nombreusu);
     $statement->bindParam(':Apellidousu',$Apellidousu);
     $statement->bindParam(':Usuariousu',$Usuariousu);            
     $statement->bindParam(':Passwordusu',$Passwordusu);
     $statement->bindParam(':Perfil',$Perfil);
     $statement->bindParam(':Estadousu',$Estadousu);
     if($statement->execute())
     {
        header('Location: ../pages/index.php');
     }else 
     {
        header('Location: ../pages/editar.php');
     }
  }
  // Función para eliminar un usuario
  public function deletead($Id)
  {
    $statement = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario=:Id");
    $statement->bindParam;
    if ($statement->execute()) 
    {
      echo "<script>
      alert('usuario actualizado');
      window.location = '../paginas/index.php';
      </script>";
    }else
    {
      echo "<script>
      alert('usuario no actualizado');
      window.location = '../paginas/editar.php';
      <script>";
    } 
  }

}

?>
