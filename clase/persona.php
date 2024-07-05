<?php
require __DIR__ .('/../libs/database.php');
class Persona
{
  // Atributos de persona
  protected $nombre;
  protected $apellido;
  protected $genero;
  protected $edad;
  protected $db;
  protected $connection;
  public function __construct()
  {
    $this->db = new Database();
    $this->connection = $this->db->getConnection();
  }

  // Metodos get para los atributos
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getApellido()
  {
    return $this->apellido;
  }
  public function getGenero()
  {
    return $this->genero;
  }
  public function getEdad()
  {
    return $this->edad;
  }


  // Metodos set para los atributos
  public function setNombre($nombre)
  {
    $this->nombre = strtolower($nombre);
  }
  public function setApellido($apellido)
  {
    $this->apellido = strtolower($apellido);
  }
  public function setGenero($genero)
  {
    $this->genero = strtolower($genero);
  }
  public function setEdad($edad)
  {
    $this->edad = strtolower($edad);
  }

  public function setId_usuario($id_usuario)
  {
    $this->id_usuario = $id_usuario;
  }
  // Metodo para crear un nuevo usuario en la base de datos
  public function guardar()
  {
    $sql = "INSERT INTO tb_prueba(nombre, apellido, genero, edad) VALUES (:nombre, :apellido, :genero, :edad)";
    $stm = $this->connection->prepare($sql);
    $stm->bindParam(':nombre', $this->nombre);
    $stm->bindParam(':apellido', $this->apellido);
    $stm->bindParam(':genero', $this->genero);
    $stm->bindParam(':edad', $this->edad);
    $stm->execute();
    echo "Se creo un nuevo usuario";
  }
  public function Listar()
  {
    $sql="SELECT * FROM tb_prueba";
    $stm=$this->connection->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }
  public function Eliminar()
  {
    $sql="DELETE FROM aprendiz WHERE id= id;";
    $stm=$this->connection->prepare($sql);
    $stm->bindParam(':id_usuario'.$this->id_usuario);
    $stm->execute();
  }
}
