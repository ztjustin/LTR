<?php 

   include("../modelos/ClsSilicon.php");
   include("../modelos/clsConexionDB.php");

    $_conexion = new clsConexionDB();
    $silicon = new ClsSilicon();

	$idsilicon = $_GET["idsilicon"];
	$vid = $_GET["vid"];
	$qdf = $_GET["qdf"];
	$type = $_GET["type"];
	$name = $_GET["name"];
	$serialPlatform = $_GET["serialPlatform"];

   if ($valor = $silicon->updateSilicon($_conexion,$idsilicon,$vid,$qdf,$type,$name,$serialPlatform)) {
   	  echo 1;
   }else{
   	  echo 0;
   }


?>