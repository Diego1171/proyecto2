<?php
require_once 'conexion.php';
class Estudiante{
    private $Id_tipo;
    private $Id_estudiante;
    private $Correo;
    private $Nombres;
    private $Apellidos;
    private $Documento;
    private $Numero;

    const TABLA = 'Estudiante';
    
    public function getId_tipo(){
        return $this->Id_tipo;
    }
    public function getId_estudiante(){
        return $this->id;
    }
    public function getCorreo(){
        return $this->Correo;
    }
    public function getNombres(){
        return $this->Nombres;
    }
    public function getApellidos(){
        return $this->Apellidos;
    }
    public function getDocumento(){
        return $this->Documento;
    }
    public function getNumero(){
        return $this->Numero;
    }
 
    public function setId_tipo(){
        $this->Id_tipo = $Id_tipo;
    }
    public function setId_estudiante(){
        $this->id = $Id_estudiante;
    }
    public function setCorreo(){
        $this ->Correo = $Correo;
    }
    public function setNombres(){
        $this->Nombres = $Nombres;
    }
    public function setApellidos(){
        $this->Apellidos = $Apellidos;
    }
    public function setDocumento(){
        $this->Documento = $Documento;
    }
    public function setNumero(){
        $this->Numero = $Numero;
    }

    public function __construct($Id_tipo, $Correo,$Nombres,$Apellidos,$Documento,$Numero, $Id_estudiante=null){

      $this->Id_tipo = $Id_tipo;
      $this->Id_estudiante = $Id_estudiante;
      $this ->Correo= $Correo;
      $this ->Nombres = $Nombres;
      $this ->Apellidos = $Apellidos;
      $this ->Documento = $Documento;
      $this ->Numero = $Numero;
    }
    public function guardar(){
            
        {
            $conexion = new Conexion();
            
            $consulta = $conexion->prepare('INSERT INTO ' .self::TABLA .'(Id_tipo, Correo, Nombres, Apellidos, Documento, Numero )VALUES (:Id_tipo, :Correo, :Nombres, :Apellidos, :Documento, :Numero)');
            $consulta -> bindParam(':Id_tipo', $this->Id_tipo);
            $consulta -> bindParam(':Correo', $this->Correo);
            $consulta -> bindParam(':Nombres', $this->Nombres);
            $consulta -> bindParam(':Apellidos', $this->Apellidos);
            $consulta -> bindParam(':Documento', $this->Documento);
            $consulta -> bindParam(':Numero', $this->Numero);
            $consulta->execute();
            $this->id = $conexion->lastInsertid();
        }
        $conexion = null;
    }

    public static function mostrar(){
            $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT  Id_estudiante, Correo, Nombres, Apellidos, Documento, Numero  FROM 
            ' . self::TABLA . ' ORDER BY Tipo');
            $consulta -> execute();
            $registros = $consulta->fetchAll();
            return $registros;

    }
}


    