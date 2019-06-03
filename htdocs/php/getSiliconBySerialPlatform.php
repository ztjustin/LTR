<?php

include("../modelos/clsConexionDB.php");
include("../modelos/ClsSilicon.php");


 $silicon = new ClsSilicon();
 $conexion = new clsConexionDB();

 $serialPlatform = $_GET["serialPlatform"];

 $tableList =  $silicon->getAllSiliconBySerialPlatform($conexion,$serialPlatform);


 while ($row = mysqli_fetch_array($tableList)) {

  	echo '<tr class="">
  	          <td class="rows">'.$row[0].'</td>
  	          <td class="rows">'.$row[1].'</td>
  	          <td class="rows">'.$row[2].'</td>
  	          <td class="rows">'.$row[3].'</td>
  	          <td class="rows">'.$row[4].'</td>
  	          <td class="rows">'.$row[5].'</td>
  	          <td class="rows"><a href="../vistas/editSilicon?serialPlatform='.$row[3].'&vid='.$row[0].'" class="btn btn-info" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></td>
  	      </tr>';
  }



?>