<?php 

   include("../modelos/ClsPlatform.php");
   include("../modelos/clsConexionDB.php");

   $con = new clsConexionDB();
   $plat = new ClsPlatform();

   $serialPlatform = $_GET["serialPlatform"];
   $name = $_GET["name"];
   $ubication = $_GET["ubication"];
   $ActiveNumber = $_GET["ActiveNumber"];
   $referenceNumber = $_GET["referenceNumber"];


   if (!$valor = $plat->updatePlatform($con,$serialPlatform,$name,$ubication,$ActiveNumber,$referenceNumber) ) {
   	  echo 1;
   }else{
   	  echo 0;
   }


?>