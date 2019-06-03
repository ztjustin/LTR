<?php 

  /**include("../modelos/clsConexionDB.php");
  include("../modelos/ClsPlatform.php");
  include("../modelos/ClsSilicon.php");

  $plat = new ClsPlatform();
  $silicon = new ClsSilicon();

  $conexion = new ClsconexionDB();

  $table = $plat->getPlatformById($conexion,$serialPlatform);
 	//get the row of the table
  $row = mysqli_fetch_array($table);*/
 
  $serialPlatform = $_GET["serialPlatform"];

?>

<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>

	<title>LTR -  Step 2</title>
	
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
		                    <div class="fetched-data">Platform have been updated successfully!</div> 
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
					    <h5 class="card-title"><span>Step 2</span></h5>
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

			<!-- Start of Row 2  -->


			<div class="row toogleDetail">
			
			  <div class="col-sm-12">
			  
					<div class="card">
					  <div class="card-header">
					    <h5>2 Step  <small>Silicon Units:</small></h5>
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>

						<table class="table" id="listSilicon">
							<thead>
								<tr>
									<th>Id</th>
									<th>Visual ID</th>
									<th>QDF</th>
									<th>Name</th>
									<th>Type</th>
									<th>Platform Serial</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php include("../php/getSilicon.php"); ?>
							</tbody>
						</table>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSupply">Add new Silicon</button>

							<button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modalSupply">Next Step -></button>

					  </div>
					</div>	
			    			    
			    
			  </div>
			  
			</div>

			<br/>
			
			<!-- End of Row 2  -->
			<!-- start of Row 3  
			<div class="row">

			  

			  <div class="col-sm-12">
			  
					<div class="card">
					  <div class="card-header">
					    Main Information of the platform:
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>
					    	
					      	
		    				<form class="needs-validation" id="formPlatform" novalidate>
				
								  <div class="form-row">

								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Serial</span>
								        </div>
								        <input type="text" class="form-control" id="serialPlatform" name="serialPlatform" placeholder="EJ: XXXXXXXXXXXXX" aria-describedby="inputGroupPrepend" value="<?php  ?>" readonly required>
								        <div class="invalid-feedback">
								          Please write a valid Serial.
								        </div>
								      </div>
								    </div>	

								    
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Ubication</span>
								        </div>
								        <input type="text" class="form-control" id="ubication" name="ubication" placeholder="EJ: ROW2-MOD23-UUT1" aria-describedby="inputGroupPrepend" value="<?php   ?>"  required>
								        <div class="invalid-feedback">
								          Please write a valid Ubication.
								        </div>
								      </div>
								    </div>

								    				        
								  </div>

								  <div class="form-row">
								  
								    <div class="col-md-12 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Active Number</span>
								        </div>
								        <input type="text" class="form-control"  id="ActiveNumber" name="ActiveNumber" placeholder="EJ: 234742394" aria-describedby="inputGroupPrepend" onkeypress="return event.charCode >= 48 && event.charCode <= 57" 
								        value="<?php   ?>" required>
								        <div class="invalid-feedback">
								          Please write a valid Active Number.
								        </div>
								      </div>
								    </div>
								    
								    				        
								  </div>
								  
								  
								  <div class="form-row">
								  
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Name</span>
								        </div>
								        <input type="text" class="form-control" id="namePlatform" name="namePlatform" placeholder="EJ: UUT-XXXX-CRXX" aria-describedby="inputGroupPrepend" value="<?php   ?>"  required>
								        <div class="invalid-feedback">
								          Please write a valid Name.
								        </div>
								      </div>
								    </div>
								    
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">PO Number</span>
								        </div>
								        <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="referenceNumber" name="referenceNumber" placeholder="EJ: XXXXXXXXXXXXX" aria-describedby="inputGroupPrepend" 
								        value="<?php  ?>" required>
								        <div class="invalid-feedback">
								          Please write a valid PO Number.
								        </div>
								      </div>
								    </div>
								    
								  </div>
				  
				  				<button class="btn btn-info" type="submit">Finish Platform</button>

		  
							</form>
						
							

					  </div>

					</div>	
			    			    
			    
			  </div>



			</div>-->

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
    	
	$('#listSilicon').DataTable();

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