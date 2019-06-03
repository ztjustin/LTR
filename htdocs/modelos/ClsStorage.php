<?php
  /**
  * 
  */
  class ClsStorage
  {

  	 private $serie;
  	 private $type;
  	 private $model;
     private $serialPlatform;

  	function __construct()
  	{

  	}

  	function getAllStorage($conexion){

         $conexion->conectar();
         
         $query = "SELECT * FROM viewStorage";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;
    }

    function getStorageBySerialPlatform($conexion,$serialPlatform){

         $conexion->conectar();
         
         $query = "SELECT * FROM storage WHERE serialPlatform = '".$serialPlatform."'";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;

    }


    function insertNewStorage($_conexion,$_serie,$_type,$_model,$_serialPlatform){

        $_conexion->conectar();


        if (is_null($_serialPlatform)) {

          $query = "INSERT INTO storage (serie,type,model,serialPlatform) 
          VALUES('$_serie','$_type','$_model',null)"; 

        }else{

          $query = "INSERT INTO storage (serie,type,model,serialPlatform) 
          VALUES('$_serie','$_type','$_model','$_serialPlatform')"; 
        }


        $num = $_conexion->EjecutarSentencia($query);

        $_conexion->desconectar();


        return $num;

    }

  
}

?>