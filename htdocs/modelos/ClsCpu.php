<?php
  /**
  * 
  */
  class ClsCpu
  {

  	 private $vid;
  	 private $qdf;
  	 private $name;
     private $serialPlatform;

  	function __construct()
  	{

  	}

  	function getAllCpu($conexion){

         $conexion->conectar();
         
         $query = "SELECT * FROM cpuView";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;
    }


    function insertNewCpu($_conexion,$_vid,$_qdf,$_name,$_serialPlatform){

        $_conexion->conectar();


        if (is_null($_serialPlatform)) {

          $query = "INSERT INTO cpu (vid,qdf,name,serialPlatform) 
          VALUES('$_vid','$_qdf','$_name',null)"; 

        }else{

          $query = "INSERT INTO cpu (vid,qdf,name,serialPlatform) 
          VALUES('$_vid','$_qdf','$_name','$_serialPlatform')"; 
        }


        $num = $_conexion->EjecutarSentencia($query);

        $_conexion->desconectar();


        return $num;

    }

  
}
?>