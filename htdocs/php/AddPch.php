<?php

   include("../modelos/ClsPch.php");
   include("../modelos/clsConexionDB.php");

   $con = new clsConexionDB();
   $pch = new ClsPch();

   $vid = $_GET["vid"];
   $qdf = $_GET["qdf"];
   $name = $_GET["name"];
   $serialPlatform = $_GET["serialPlatform"];


   if ($valor = $pch->insertNewPch($con,$vid,$qdf,$name,$serialPlatform) ) {
   	  echo 1;
   }else{
   	  echo $valor;
   }



?>