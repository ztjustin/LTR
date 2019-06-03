<?php

include("../modelos/clsConexionDB.php");
include("../modelos/ClsRam.php");


 $ram = new ClsRam();
 $conexion = new clsConexionDB();

 $tableList =  $ram->getAllRam($conexion);


 while ($row = mysqli_fetch_array($tableList)) {

  	echo '<tr class="">
  	          <td class="rows">'.$row[0].'</td>
  	          <td class="rows">'.$row[1].'</td>
  	          <td class="rows">'.$row[2].'</td>
  	          <td class="rows">'.$row[3].'</td>
  	          <td class="rows">'.$row[4].'</td>
  	          <td class="rows">'.$row[5].'</td>
  	          <td class="rows"><a href="../vistas/editRam.php?serialPlatform='.$row[5].'&idRam='.$row[0].'" class="btn btn-info" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></td>
  	      </tr>';
  }



?>