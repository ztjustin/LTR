<?php

  /**
  * 
  */
  
  class ClsconexionDB
  {

  	private $conexion;
  	private $user;
  	private $pass;
  	private $server;
  	private $db;


  	function __construct()
  	{
  		
  	    $this->user = "root";
  	    $this->pass = "justin9ucr";
  	    $this->server = "localhost";
  	    $this->db = "ltr";

  	}

  	function conectar(){

  		$this->conexion = mysqli_connect($this->server,$this->user,$this->pass,$this->db) or die ("No se ha podido conectar al servidor");

  	}

  	function desconectar(){

  		$this->conexion->close();

  	}


  	function EjecutarSentencia($query){

    $res = mysqli_query($this->conexion,$query);
    return $res;
    
  	}

  	function getTable($query){

        $resultado = mysqli_query($this->conexion,$query);
        return $resultado;

  	}

  }
?>