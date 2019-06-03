<?php 

   include("../modelos/ClsPowerSupply.php");
   include("../modelos/clsConexionDB.php");

   $con = new clsConexionDB();
   $supply = new ClsPowerSupply();

   $serialPlatform = $_GET["serialPlatform"];
   $serie = $_GET["serie"];
   $model = $_GET["model"];


   if ($valor = $supply->updateSupply($con,$serie,$model,$serialPlatform) ) {
   	  echo 1;
   }else{
   	  echo 0;
   }

