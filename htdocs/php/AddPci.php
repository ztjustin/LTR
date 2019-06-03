<?php

   include("../modelos/clsConexionDB.php");
   include("../modelos/ClsPci.php");

   $conexion = new clsConexionDB();
   $pci = new ClsPci();

   $serie = $_GET["serie"];
   $model = $_GET["model"];
   $type = $_GET["type"];
   $serialPlatform = $_GET["serialPlatform"];


   if ($valor = $pci->insertNewPci($conexion,$serie,$model,$type,$serialPlatform)) {
   	  echo 1;
   }else{
   	  echo 0;
   }



?>