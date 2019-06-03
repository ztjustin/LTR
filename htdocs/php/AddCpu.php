<?php

   include("../modelos/ClsCpu.php");
   include("../modelos/clsConexionDB.php");

   $con = new clsConexionDB();
   $cpu = new ClsCpu();

   $vid = $_GET["vid"];
   $qdf = $_GET["qdf"];
   $name = $_GET["name"];
   $serialPlatform = $_GET["serialPlatform"];


   if ($valor = $cpu->insertNewCpu($con,$vid,$qdf,$name,$serialPlatform) ) {
   	  echo 1;
   }else{
   	  echo $valor;
   }



?>