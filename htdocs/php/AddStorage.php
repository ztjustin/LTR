<?php

   include("../modelos/ClsStorage.php");
   include("../modelos/clsConexionDB.php");

   $con = new clsConexionDB();
   $storage = new ClsStorage();

   $serie = $_GET["serie"];
   $type = $_GET["type"];
   $model = $_GET["model"];
   $serialPlatform = $_GET["serialPlatform"];


   if ($valor = $storage->insertNewStorage($con,$serie,$type,$model,$serialPlatform) ) {
   	  echo 1;
   }else{
   	  echo 0;
   }



?>