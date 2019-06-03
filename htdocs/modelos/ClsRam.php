<?php 
class ClsRam { 

    private $frecuency;
    private $model;
    private $type; 
    private $quantity;
    private $seriePlatform; 


    function __construct()
  	{
  		

  	}

    function getRamById($conexion,$idRam){

         $conexion->conectar();
         
         $query = "SELECT * FROM ram WHERE idRam = '".$idRam."'";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;

    }


  	function getAllRam($conexion){

         $conexion->conectar();
         
         $query = "SELECT * FROM viewRam";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;
    }


    function updateRam($_conexion,$_idRam,$_frecuency,$_model,$_type,$_quantity,$_serialPlatform){

        $_conexion->conectar();

        $query = "UPDATE ram SET type='".$_type."',frecuency='".$_frecuency."',model='".$_model."',quantity='".$_quantity."',serialPlatform='".$_serialPlatform."' WHERE idRam='".$_idRam."'";

        $num = $_conexion->EjecutarSentencia($query);

        $_conexion->desconectar();

        return $num;


    }



    function insertNewRam($_conexion,$_frecuency,$_model,$_type,$_quantity,$_serialPlatform){

        $_conexion->conectar();

        if (is_null($_serialPlatform)) {

       		 $query = "INSERT INTO ram (idram,type,frecuency,model,quantity,serialPlatform) 
       		 VALUES(null,'$_type',$_frecuency,'$_model',$_quantity,null)";

        	
        }else{

	        $query = "INSERT INTO ram (idram,type,frecuency,model,quantity,serialPlatform) 
        	VALUES(null,'$_type',$_frecuency,'$_model',$_quantity,'$_serialPlatform')";
        }

        $num = $_conexion->EjecutarSentencia($query);

        $_conexion->desconectar();


        return $num;

    }



    




} 