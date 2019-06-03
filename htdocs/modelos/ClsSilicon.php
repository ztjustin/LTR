<?php
  /**
  * 
  */
  class ClsSilicon
  {

  	 private $vid;
  	 private $qdf;
  	 private $name;
  	 private $type;
     private $serialPlatform;

  	function __construct()
  	{

  	}

  	function getAllSilicon($_conexion){

         $_conexion->conectar();
         
         $query = "SELECT * FROM silicon";
         $table = $_conexion->getTable($query);

         $_conexion->desconectar();

         return $table;
    }

    function getAllSiliconBySerialPlatform($_conexion,$_platform){

         $_conexion->conectar();
         
         $query = "SELECT * FROM silicon WHERE serialPlatform = '".$_platform."'";
         $table = $_conexion->getTable($query);

         $_conexion->desconectar();

         return $table;
    }


    function insertNewSilicon($_conexion,$_vid,$_qdf,$_name,$_type,$_serialPlatform){

        $_conexion->conectar();


        if (is_null($_serialPlatform)) {

          $query = "INSERT INTO (idsilicon,vid,qdf,name,type,serialPlatform)
          VALUES(null,'$_vid','$_qdf','$_name','$_type',null)";


        }else{

          $query = "INSERT INTO silicon (idsilicon,vid,qdf,name,type,serialPlatform)
          VALUES(null,'$_vid','$_qdf','$_name','$_type','$_serialPlatform')"; 
        }


        $num = $_conexion->EjecutarSentencia($query);

        $_conexion->desconectar();


        return $num;

    }

    function updateSilicon($_conexion,$_idsilicon,$_vid,$_qdf,$_type,$_name,$_serialPlatform){

        $_conexion->conectar();

        $query = "UPDATE silicon SET vid='$_vid',qdf='$_qdf',name='$_name',type='$_type',serialPlatform='$_serialPlatform' WHERE idsilicon = $_idsilicon ";

        $num = $_conexion->EjecutarSentencia($query);

        $_conexion->desconectar();


        return $num;        

    }

  
}
?>