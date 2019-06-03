<?php
  /**
  * 
  */
  class ClsPci
  {

  	 private $serie;
  	 private $model;
  	 private $type;
  	 private $serialPlatform;

  	function __construct()
  	{

  	}

  	function getAllPci($conexion){

         $conexion->conectar();
         
         $query = "SELECT * FROM viewPci";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;
    }


    function insertNewPci($_conexion,$_serie,$_model,$_type,$_serialPlatform){

        $_conexion->conectar();

        if (is_null($_serialPlatform)) {
            $query = "INSERT INTO pci (serie,model,type,serialPlatform) 
        	VALUES('$_serie','$_model','$_type',null)";
        }else{
            $query = "INSERT INTO pci (serie,model,type,serialPlatform) 
        	VALUES('$_serie','$_model','$_type','$_serialPlatform')";
        }


        $num = $_conexion->EjecutarSentencia($query);

        $_conexion->desconectar();


        return $num;

    }

  
}
?>