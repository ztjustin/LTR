<?php
  /**
  * 
  */
  class ClsPlatform
  {

  	 private $serialPlatform;
  	 private $name;
  	 private $CheckDateIn;
  	 private $ubication;
  	 private $ActiveNumber;
  	 private $referenceNumber;

  	function __construct()
  	{

  	}

  	function getAllPlatforms($conexion){

         $conexion->conectar();
         
         $query = "SELECT * FROM platform";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;
    }

    function getUbicationByBuOpen($conexion,$bu){


         $conexion->conectar();
         
         $query = "SELECT * FROM ubication WHERE status = 'OPEN' and idBusinessUnit = '$bu'";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;

    }


    function getUbicationByBuOpenOrShared($conexion,$bu){


         $conexion->conectar();
         
         $query = "SELECT * FROM ubication WHERE (status = 'OPEN' or status='SHARED') and idBusinessUnit = '$bu'";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;

    }



    function getPlatformById($conexion,$serialPlatform){

         $conexion->conectar();
         
         $query = "SELECT * FROM platform WHERE serialPlatform = '".$serialPlatform."'";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;
    }

    function updatePlatform($_conexion,$_serialPlatform,$_name,$_ubication,$_ActiveNumber,$_referenceNumber){

      $_conexion->conectar();

      $query = "UPDATE platform SET name='$_name',serialPlatform='$_serialPlatform',ubication='$_ubication',ActiveNumber='$_ActiveNumber',
      referenceNumber='$_referenceNumber' where serialPlatform='$_serialPlatform'";

      $res = $_conexion->EjecutarSentencia($query) or die ('ohh fuck murio');

      $_conexion->desconectar();

    }

    function insertNewPlatform($_conexion,$_serialPlatform,$_name,$_CheckDateIn,$_ubication,$_ActiveNumber,$_referenceNumber,
      $_CheckVerifiedDate,$_isSharedUbication,$_ubicationShared,$_project,$_bu,$_model,$_chasisSerial,$_initialStatus){

      if ($_isSharedUbication == 0) {
        $_isSharedUbication = 0;
        $_ubicationShared = "null";
      }

        $_conexion->conectar();

        $query = "INSERT INTO platform VALUES('$_serialPlatform','$_name','$_CheckDateIn',$_ubication,'$_ActiveNumber','$_referenceNumber','$_project',$_bu,
        '$_model','$_chasisSerial','$_CheckVerifiedDate',$_isSharedUbication,$_ubicationShared,$_initialStatus,null)";


        $num = $_conexion->EjecutarSentencia($query);

        $_conexion->desconectar();


        return $num;


    }

  
}
?>