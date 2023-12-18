<?php
require_once 'conexion.php';

class Publisher extends Conexion{
  private $pdo;
  public function __construct(){
      $this->pdo=parent::getConexion();
    
  }
  public function getAll(){
    try{
      $consulta =$this->pdo->prepare("CALL spu_publisher_listar()");
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }
}
