<?php

   include("../modelos/ClsRam.php");
   include("../modelos/clsConexionDB.php");

   $con = new clsConexionDB();
   $ram = new ClsRam();

   $frecuency = $_GET["frecuency"];
   $model = $_GET["model"];
   $type = $_GET["type"];
   $quantity = $_GET["quantity"];
   $serialPlatformRam = $_GET["serialPlatformRam"];


   if ($valor = $ram->insertNewRam($con,$frecuency,$model,$type,$quantity,$serialPlatformRam)) {
   	  echo 1;
   }else{
   	  echo 0;
   }



?>