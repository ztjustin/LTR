<?php

include("../modelos/ClsPlatform.php");


 $platform = new ClsPlatform();
 $conexion = new clsConexionDB();

 $tableList =  $platform->getAllPlatforms($conexion);

 while ($row = mysqli_fetch_array($tableList)) {

 	if ($row[0] == $_GET['serialPlatform']) {
 		echo '<option selected value="'.$row[0].'">'.$row[1].'</option>';
 	}else{
 		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
 	}
 	

  }


?>