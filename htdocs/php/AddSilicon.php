<?php

   include("../modelos/ClsSilicon.php");
   include("../modelos/clsConexionDB.php");

   $con = new clsConexionDB();
   $silicon = new ClsSilicon();

   $vid = $_GET["vid"];
   $qdf = $_GET["qdf"];
   $name = $_GET["name"];
   $type = $_GET["type"];
   $serialPlatform = $_GET["serialPlatform"];


   if ($valor = $silicon->insertNewSilicon($con,$vid,$qdf,$name,$type,$serialPlatform) ) {
   	  echo $valor;
   }else{
   	  echo $valor;
   }



?>