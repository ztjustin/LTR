<?php

include("../modelos/clsConexionDB.php");
include("../modelos/ClsCpu.php");


 $cpu = new ClsCpu();
 $conexion = new clsConexionDB();

 $tableList =  $cpu->getAllCpu($conexion);


 while ($row = mysqli_fetch_array($tableList)) {

  	echo '<tr class="">
  	          <td class="rows">'.$row[0].'</td>
  	          <td class="rows">'.$row[1].'</td>
  	          <td class="rows">'.$row[2].'</td>
  	          <td class="rows">'.$row[4].'</td>
  	          <td class="rows"><a href="../vistas/editCpu?serialPlatform='.$row[3].'&vid='.$row[0].'" class="btn btn-info" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></td>
  	      </tr>';
  }



?>