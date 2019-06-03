<?php

   include("../modelos/ClsPlatform.php");
   include("../modelos/clsConexionDB.php");

   $con = new clsConexionDB();
   $platform = new ClsPlatform();

   $serialPlatform = $_GET["serialPlatform"];
   $name = $_GET["name"];
   $CheckDateIn = $_GET["CheckDateIn"];
   $CheckVerifiedDate = $_GET["CheckVerifiedDate"];
   $ubication = $_GET["ubication"];
   $isSharedUbication = $_GET["isSharedUbication"];
   $ubicationShared = $_GET["ubicationShared"];
   $ActiveNumber = $_GET["ActiveNumber"];
   $referenceNumber = $_GET["referenceNumber"];
   $project = $_GET["project"];
   $bu = $_GET["bu"];
   $model = $_GET["model"];
   $chasisSerial = $_GET["chasisSerial"];
   $initialStatus = $_GET["initialStatus"];


   if ($valor = $platform->insertNewPlatform($con,$serialPlatform,$name,$CheckDateIn,$ubication,$ActiveNumber,$referenceNumber,
      $CheckVerifiedDate,$isSharedUbication,$ubicationShared,$project,$bu,$model,$chasisSerial,$initialStatus)) {
   	  echo 1;
   }else{
   	  echo 0;
   }



?>