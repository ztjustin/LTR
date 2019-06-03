<?php

include("../modelos/clsConexionDB.php");
include("../modelos/ClsPowerSupply.php");


 $supply = new ClsPowerSupply();
 $conexion = new clsConexionDB();

 $tableList =  $supply->getAllPowerSupply($conexion);


 while ($row = mysqli_fetch_array($tableList)) {

  	echo '<tr class="">
  	          <td class="rows">'.$row[0].'</td>
  	          <td class="rows">'.$row[1].'</td>
  	          <td class="rows">'.$row[3].'</td>
  	          <td class="rows"><a href="../vistas/editPowerSupply.php?serialPlatform='.$row[2].'&serieSupply='.$row[0].'" class="btn btn-info" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></td>
  	      </tr>';
  }



?>