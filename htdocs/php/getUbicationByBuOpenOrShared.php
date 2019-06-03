<?php

include("../modelos/ClsPlatform.php");
include("../modelos/clsConexionDB.php");


 $platform = new ClsPlatform();
 $conexion = new clsConexionDB();

 $bu = $_GET["bu"];

 $tableList =  $platform->getUbicationByBuOpenOrShared($conexion,$bu); 

 while ($row = mysqli_fetch_array($tableList)) {

 	echo '<option value="'.$row[0].'">'.$row[1].'</option>';
 	
  }


?>