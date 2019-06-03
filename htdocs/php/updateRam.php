<?php 

   include("../modelos/ClsRam.php");
   include("../modelos/clsConexionDB.php");

   $_conexion = new clsConexionDB();
   $ram = new ClsRam();

	$_idRam = $_GET["idRam"];
	$_type = $_GET["type"];
	$_frecuency = $_GET["frecuency"];
	$_model = $_GET["model"];
	$_quantity = $_GET["quantity"];
	$_serialPlatform = $_GET["serialPlatform"];


   if ($valor = $ram->updateRam($_conexion,$_idRam,$_frecuency,$_model,$_type,$_quantity,$_serialPlatform)) {
   	  echo $valor;
   }else{
   	  echo $valor;
   }


?>