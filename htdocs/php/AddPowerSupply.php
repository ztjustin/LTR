<?php

   include("../modelos/clsConexionDB.php");
   include("../modelos/ClsPowerSupply.php");

   $conexion = new clsConexionDB();
   $supply = new ClsPowerSupply();

   $serie = $_GET["serie"];
   $model = $_GET["model"];
   $seriePlatform = $_GET["seriePlatform"];


   if ($valor = $supply->insertNewSupply($conexion,$serie,$model,$seriePlatform)) {
   	  echo 1;
   }else{
   	  echo 0;
   }



?>