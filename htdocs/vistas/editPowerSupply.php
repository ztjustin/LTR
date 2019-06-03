<?php

   include("../modelos/clsConexionDB.php");
   include("../modelos/ClsPowerSupply.php");
   include("../modelos/ClsPlatform.php");

   $supply = new ClsPowerSupply();
   $platform = new ClsPlatform();
   $conexion = new clsConexionDB();

   $serieSupply = $_GET["serieSupply"];

   $table =  $supply->getSupplyBySerie($conexion,$serieSupply);

   $rowSupply = mysqli_fetch_array($table);

   $tableListPlatform =  $platform->getAllPlatforms($conexion);

?>


<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>

	<title>LTR -  Edit Power Supply</title>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css"/>
	
	<link href="#" href="/css/style.css" rel="stylesheet" />

	<link rel="stylesheet" href="/css/bootstrap/jquery.dataTables.min.css"/>
	<link rel="stylesheet" href="/css/bootstrap/dataTables.bootstrap4.min.css"/>

	
</head>
<body>


	<div class="jumbotron">
	
	
		<div class="container">
		<!-- Start of Row 1  -->
		
			<div class="row">
			  <div class="col-sm-12">
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					  <a class="navbar-brand" href="#" th:href="@{/admin/index}">LTR</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNav">
					    <ul class="navbar-nav">
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          List
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					          <a class="dropdown-item" href="../vistas/listPlatforms.php">List of platforms</a>
					          <a class="dropdown-item" href="../vistas/listPowerSupply.php">List of Power Supply</a>
					          <a class="dropdown-item" href="../vistas/listRam.php">List of Memory Ram</a>
					          <a class="dropdown-item" href="../vistas/listStorage.php">List of Storages</a>
					          <a class="dropdown-item" href="../vistas/listPci.php">List of PCI'S</a>
					          <a class="dropdown-item" href="../vistas/listCpu.php">List of CPU'S</a>
					          <a class="dropdown-item" href="../vistas/listPch.php">List of PCH'S</a>
					        </div>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#" href="/admin/cpu">Add New Divice To Platform</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#" href="/admin/pch">Null</a>
					      </li>
					    </ul>
					  </div>
					</nav>
			  </div>
			</div>
			
		<!-- End of Row 1  -->

		<!--Modal Message-->

		    <div class="modal fade" id="myModal" role="dialog">
		        <div class="modal-dialog" role="document">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal">&times;</button>
		                </div>
		                <div class="modal-body">
		                    <div class="fetched-data">Power Supply have been updated successfully!</div> 
		                </div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
			
			<br/>
			<!-- Start of Row 2  -->
				<div class="row">
				  <div class="col-sm-12">
					<div class="card text-center">
					  <div class="card-header">
					    <span></span>
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"><span>Edit Power Supply</span></h5>
					    <p class="card-text"><span>For LTR Inventory</span></p>
					  </div>
					  <div class="card-footer text-muted">
					  	<p class="card-text"><span></span></p>
					  </div>
					</div>
				  </div>
				</div>
			<!-- End of Row 0  -->
			<br/>


			<!-- start of Row 3  -->
			<div class="row">

			  

			  <div class="col-sm-12">
			  
					<div class="card">
					  <div class="card-header">
					    Main Information:
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>
					    	
					      	
		    				<form class="needs-validation" id="formEditSupply" novalidate>
				
								  <div class="form-row">

								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Platform</span>
								        </div>
								    	<select class="form-control"  id="selectPlatform" required>
								    		<?php  

								    		while ($rowPlatform = mysqli_fetch_array($tableListPlatform)) {

											 	if ($rowPlatform[0] == $_GET['serialPlatform']) {
											 		echo '<option selected value="'.$rowPlatform[0].'">'.$rowPlatform[1].'</option>';
											 	}else{
											 		echo '<option value="'.$rowPlatform[0].'">'.$rowPlatform[1].'</option>';
											 	}
											 } 

											?>

								    	</select>
								        <div class="invalid-feedback">
								          Please write a valid Serial Supply.
								        </div>
								      </div>
								    </div>	
								    				        
								  </div>

								  <div class="form-row">
								  
								    <div class="col-md-12 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Serial Power Supply</span>
								        </div>
								        <input type="text" class="form-control"  id="serie" name="serie"
								        aria-describedby="inputGroupPrepend" value="<?php  echo "$rowSupply[0]";  ?>" readonly>
								        <div class="invalid-feedback">
								          Please write a valid Serial Supply Number.
								        </div>
								      </div>
								    </div>
								    
								    				        
								  </div>
								  
								  
								  <div class="form-row">
								  
								    <div class="col-md-12 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Model Power Supply</span>
								        </div>
								        <input type="text" class="form-control"  id="modelSupply" name="modelSupply"
								        aria-describedby="inputGroupPrepend" value="<?php  echo "$rowSupply[1]";  ?>" required>
								        <div class="invalid-feedback">
								          Please write a valid Model Supply.
								        </div>
								      </div>
								    </div>    
								    
								  </div>
				  
				  				<button class="btn btn-primary" type="submit">Edit Power Supply</button>

		  
							</form>
													

					  </div>

					</div>	
			    			    		    
			  </div>


			</div>

			<!-- End of Row 3  -->

		</div>

		
	</div>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap4.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.js"></script> 
    <script src="/js/edit.js"></script>  


    <script>
    	


		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
		    // Fetch all the forms we want to apply custom Bootstrap validation styles to
		    var forms = document.getElementsByClassName('needs-validation');
		    // Loop over them and prevent submission
		    var validation = Array.prototype.filter.call(forms, function(form) {
		      form.addEventListener('submit', function(event) {
		        if (form.checkValidity() === false) {
		          event.preventDefault();
		          event.stopPropagation();
		        }
		        form.classList.add('was-validated');
		      }, false);
		    });
		  }, false);
		})();

    </script>
     
</body>
</html>