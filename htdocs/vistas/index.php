
<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>

	<title>LTR - Platform Detail</title>
	
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

	<?php 

		/*Main script to get info into DB*/
		include("../modelos/clsConexionDB.php");
		$conexion = new clsConexionDB();

		if ($_GET["serialPlatform"] == null) {
			
		}else{
			
		}

	?>


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
					          List Of Divices
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
		
		<br/>
		<!-- Start of Row 2  -->
			<div class="row">
			  <div class="col-sm-12">
				<div class="card text-center">
				  <div class="card-header">
				    <span></span>
				  </div>
				  <div class="card-body">
				    <h5 class="card-title"><span>New Platform</span></h5>
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


		<!--Modal Message-->

		    <div class="modal fade" id="myModal" role="dialog">
		        <div class="modal-dialog" role="document">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal">&times;</button>
		                </div>
		                <div class="modal-body">
		                    <div class="fetched-data">Platform have been added successfully!</div>
		                </div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
		
		<!-- Start of Row 1  -->

			<div class="row">
			

			  <div class="col-sm-12">
			  
			<!--Accordion 1-->

					<div id="accordion">
					  <div class="card">
					    <div class="card-header" id="headingOne">
					      <h5 class="mb-0">
					        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					          <h5>Step 1: Platform Information</h5>
					        </button>
					      </h5>
					    </div>

					    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					      <div class="card-body">
		    				<form class="needs-validation" id="formPlatform" novalidate>
				
								  <div class="form-row">
								  
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Name</span>
								        </div>
								        <input type="text" class="form-control" id="namePlatform" name="namePlatform" placeholder="EJ: UUT-XXXX-CRXX" aria-describedby="inputGroupPrepend" required>
								        <div class="invalid-feedback">
								          Please write a valid Name.
								        </div>
								      </div>
								    </div>

								   


								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">BU</span>
								        </div>
								    	<select class="form-control"  id="selectBu" required>
										  <option value="" selected disabled hidden>Choose Bussiness Unit</option>
								     	  <option value="1">CCG</option>
										  <option value="2">DCG</option>
										  <option value="3">IOTG</option>

								    	</select>
								        <div class="invalid-feedback">
								          Please write a valid Business Unit.
								        </div>
								      </div>
								    </div>

								    				        
								  </div>

								  <div class="form-row">
								  
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Asset Number</span>
								        </div>
								        <input type="text" class="form-control" id="ActiveNumber" name="ActiveNumber" placeholder="EJ: 234742394" aria-describedby="inputGroupPrepend" required>
								        <div class="invalid-feedback">
								          Please write a valid Active Number.
								        </div>
								      </div>
								    </div>


								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Ubication</span>
								        </div>
								    	<select class="form-control"  id="selectUbication" required>
								    		<option value="" selected disabled hidden>Choose Ubication</option>
								    	  

								    	</select>
								        <div class="invalid-feedback">
								          Please write a valid Serial Supply.
								        </div>
								      </div>
								    </div>
								    
								    				        
								  </div>


								  <div class="form-row">
								  
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Shared Ubication?</span>
								        </div>
								    	<select class="form-control"  id="selectSharedUbication" required>
								    	  <option value="" selected disabled hidden>Choose...</option>	
								     	  <option value="1">YES</option>
										  <option value="0">NO</option>

								    	</select>
								        <div class="invalid-feedback">
								          Please write a valid Serial Supply.
								        </div>
								      </div>
								    </div>


								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Ubication Shared</span>
								        </div>
								    	<select class="form-control"  id="ubicationShared" name="ubicationShared" required disabled>
								    		<option value="" selected disabled hidden>Choose Ubication Shared</option>
								    	  
								    	</select>
								        <div class="invalid-feedback">
								          Please write a valid Ubication Shared.
								        </div>
								      </div>
								    </div>
								    

								    				        
								  </div>



								  <div class="form-row">


								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Check IN Date</span>
								        </div>
								        <input class="form-control" type="date" id="CheckDateIn" name="CheckDateIn" required>
								        <div class="invalid-feedback">
								          Please write a valid Date.
								        </div>
								      </div>
								    </div>
								  
								    
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Check verified Date</span>
								        </div>
										<input class="form-control" type="date" id="CheckVerifiedDate" name="CheckVerifiedDate" required>
								        <div class="invalid-feedback">
								          Please write a valid Date.
								        </div>
								      </div>
								    </div>

								    				        
								  </div>								  
								  
								  <div class="form-row">
								  
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Serial Platform</span>
								        </div>
								        <input type="text" class="form-control" id="serialPlatform" name="serialPlatform" placeholder="EJ: XXXXXXXXXXXXX" aria-describedby="inputGroupPrepend" required>
								        <div class="invalid-feedback">
								          Please write a valid Serial.
								        </div>
								      </div>
								    </div>
								    
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">ISM # or PO Number</span>
								        </div>
								        <input type="text" class="form-control" id="referenceNumber" name="referenceNumber" placeholder="EJ: XXXXXXXXXXXXX" aria-describedby="inputGroupPrepend" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
								        <div class="invalid-feedback">
								          Please write a valid PO Number.
								        </div>
								      </div>
								    </div>
								    
								  </div>

								  <div class="form-row">
								  
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Project</span>
								        </div>
								        <input type="text" class="form-control" id="project" name="project" placeholder="EJ: Neon-City" aria-describedby="inputGroupPrepend" required>
								        <div class="invalid-feedback">
								          Please write a valid Project.
								        </div>
								      </div>
								    </div>

								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Model Platform</span>
								        </div>
								        <input type="text" class="form-control" id="model" name="model" placeholder="EJ: G59236-301" aria-describedby="inputGroupPrepend" required>
								        <div class="invalid-feedback">
								          Please write a valid Model.
								        </div>
								      </div>
								    </div>
								    
								    
								  </div>

								  <div class="form-row">
								  

								    
								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Chasis Serial</span>
								        </div>
								        <input type="text" class="form-control" id="chasisSerial" name="chasisSerial" placeholder="EJ: G40143-001" aria-describedby="inputGroupPrepend">
								        <div class="invalid-feedback">
								          Please write a valid chasis Serial.
								        </div>
								      </div>
								    </div>


								    <div class="col-md-6 mb-3">
								      <div class="input-group">
								        <div class="input-group-prepend">
								          <span class="input-group-text" id="inputGroupPrepend">Initial Status?</span>
								        </div>
								    	<select class="form-control"  id="initialStatus" name="initialStatus" required>
								    	  <option value="" selected disabled hidden>Choose...</option>	
								     	  <option value="1">UP</option>
										  <option value="0">DOWN</option>

								    	</select>
								        <div class="invalid-feedback">
								          Please write a valid Status Initial.
								        </div>
								      </div>
								    </div>
								    
								  </div>



							        <div class="alert alert-danger" id="messageDangerPlatform">
									  <strong>Error!</strong> <br/>
									  Please verify the information.<br/>
									  Remember that the Serie of the platform should be unique.<br/>
									  Remember that the Name of the platform should be unique.
									</div>
							    
				  
				  				<button class="btn btn-primary" type="submit">Add Platofrm</button>

		  
							</form>
					      </div>
					    </div>
					  </div>

				<!--Accordion 2-->

					<div class="card">
					    <div class="card-header" id="headingTwo">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          <h5>Step 2: Silicons</h5>
					        </button>
					      </h5>
					    </div>
					    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					      <div class="card-body">

							<div class="card">
							  <div class="card-body">
							    <h5 class="card-title">Silicons Units</h5> 

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

											<?php

											 include("../modelos/ClsSilicon.php");

											 $silicon = new ClsSilicon();

											 $tableList =  $silicon->getAllSiliconBySerialPlatform($conexion,$_GET["serialPlatform"]);


											 while ($row = mysqli_fetch_array($tableList)) {

											  	echo '<tr class="">
											  	          <td class="rows">'.$row[0].'</td>
											  	          <td class="rows">'.$row[1].'</td>
											  	          <td class="rows">'.$row[2].'</td>
											  	          <td class="rows">'.$row[3].'</td>
											  	          <td class="rows">'.$row[4].'</td>
											  	          <td class="rows">'.$row[5].'</td>
											  	          <td class="rows"><a data-toggle="modal" data-target="#modalUpdateSilicon" data-id="'.$row[0].'" data-vid="'.$row[1].'" data-qdf="'.$row[2].'" data-name="'.$row[3].'" 
											  	         	data-type="'.$row[4].'"
											  	          class="btn btn-info" role="button">Edit</a> 
											  	          <a href="#" class="btn btn-danger" role="button">Delete</a></td>
											  	      </tr>';
											  }



											?>


										</tbody>
									</table>

							  </div>
							</div>
							<br/>			
						  	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalSilicon">Add Silicon Unit</button>
					      </div>
					    </div>

					</div>

				<!--Accordion 3-->

					<div class="card">
					    <div class="card-header" id="headingThree">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          <h5>Step 3: Devices</h5>
					        </button>
					      </h5>
					    </div>
					    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					      <div class="card-body">

							<div class="card">
							  <div class="card-body">
							    <h5 class="card-title">Memory Ram's</h5>

									<table class="table" id="listRam">

										<thead>
											<tr>
												<th>Id Ram</th>
												<th>Type</th>
												<th>Frecuency</th>
												<th>Model</th>
												<th>Cuantity</th>
												<th>Name Platform</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

											<?php

											include("../modelos/ClsRam.php");


											 $ram = new ClsRam();

											 $tableList =  $ram->getAllRam($conexion);


											 while ($row = mysqli_fetch_array($tableList)) {

											  	echo '<tr class="">
											  	          <td class="rows">'.$row[0].'</td>
											  	          <td class="rows">'.$row[1].'</td>
											  	          <td class="rows">'.$row[2].'</td>
											  	          <td class="rows">'.$row[3].'</td>
											  	          <td class="rows">'.$row[4].'</td>
											  	          <td class="rows">'.$row[5].'</td>
											  	          <td class="rows"><a data-toggle="modal" data-target="#modalRamUpdate" data-id="'.$row[0].'" data-type="'.$row[1].'" data-model="'.$row[3].'" data-frecuency="'.$row[2].'" 
											  	         	data-quantity="'.$row[4].'"
											  	          class="btn btn-info" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></td>
											  	      </tr>';
											  }



											?>


										</tbody>
									</table>

							  </div>
							</div>

						  <br/>
						  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalRam">Add Memory Ram</button>

					      </div>

					      <!--Next tables Hard Disk-->


					      <div class="card-body">

							<div class="card">
							  <div class="card-body">
							    <h5 class="card-title">Hard Disks</h5>

									<table class="table" id="listHardDisk">

										<thead>
											<tr>
												<th>Disk Serie</th>
												<th>Type</th>
												<th>Model</th>
												<th>Name Platform</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

											<?php

											 include("../modelos/ClsStorage.php");

											 $storage = new ClsStorage();

											 $tableList =  $storage->getStorageBySerialPlatform($conexion,$_GET["serialPlatform"]);


											 while ($row = mysqli_fetch_array($tableList)) {

											  	echo '<tr class="">
											  	          <td class="rows">'.$row[0].'</td>
											  	          <td class="rows">'.$row[1].'</td>
											  	          <td class="rows">'.$row[2].'</td>
											  	          <td class="rows">'.$row[2].'</td>
											  	          <td class="rows"><a data-toggle="modal" data-target="#modalUpdateSilicon" data-id="'.$row[0].'" data-vid="'.$row[1].'" data-qdf="'.$row[2].'" data-name="'.$row[3].'" 
											  	         	data-type="'.$row[3].'"
											  	          class="btn btn-info" role="button">Edit</a> 
											  	          <a href="#" class="btn btn-danger" role="button">Delete</a></td>
											  	      </tr>';
											  }



											?>

										</tbody>
									</table>

							  </div>
							</div>
	
						  <br/>
						  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalRam">Add Hard Disks</button>

					      </div>

					      <br/>
					    </div>
					</div>

				<!--Accordion 4-->
					<div class="card">
					    <div class="card-header" id="headingThree">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          <h5>Step 4: Networking</h5>
					        </button>
					      </h5>
					    </div>
					    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					      <div class="card-body">



					      </div>
					    </div>
					</div>



				</div>
			  
			</div>
			
			<!-- End of Row 1  -->


			<!-- Modal Add for Memory RAM-->

				<div class="modal fade" id="modalRam" tabindex="-1" role="dialog" aria-labelledby="modalRamExample" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalRamExample">Add Memory Ram</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="needs-validation" id="formRam" novalidate>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Serial Platform:</label>
				            <input type="text" class="form-control" id="serialPlatformRam" value="<?php echo $_GET["serialPlatform"] ?>" required readonly>
					        <div class="invalid-feedback">
					          Please write a valid Serial Platform.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Type Memory RAM:</label>
				            <input type="text" class="form-control" id="typeRam" required>
					        <div class="invalid-feedback">
					          Please write a valid Memory Type.
					        </div>
				          </div>
				          <div class="form-group">

				            <label for="recipient-name" class="col-form-label">Model:</label>
				            <input type="text" class="form-control" id="modelRam" required>
					        <div class="invalid-feedback">
					          Please write a valid Model.
					        </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Frecuency:</label>
				            <input type="text" class="form-control" id="frecuencyRam" required>
					        <div class="invalid-feedback">
					          Please write a valid Frecuency.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Quantity:</label>
						    <input type="number" class="form-control" id="quantityRam" required>
					        <div class="invalid-feedback">
					          Please write a valid Quantity.
					        </div>
				          </div>

				          </div>

				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="addRam">Add Memory Ram</button>

				        </form>
				      </div>
				      <div class="modal-footer">

				      </div>

				        <div class="alert alert-success" id="messageSuccessfullRam">
						  <strong>Success!</strong> Memory Ram was added successfully.
						</div>

				        <div class=" alert alert-danger" id="messageDangerRam">
						  <strong>Error!</strong> <br/>
						  Please verify the information.<br/>
						</div>

				    </div>
				  </div>
				</div>


			<br/>

			<!-- Modal Update for Memory RAM-->

				<div class="modal fade" id="modalRamUpdate" tabindex="-1" role="dialog" aria-labelledby="modalRamUpdateExample" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalRamUpdateExample">Update Memory Ram</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="needs-validation" id="formRamUpdate" novalidate>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Id Memory Ram:</label>
				            <input type="text" class="form-control" id="idRamUpdate" required readonly>
					        <div class="invalid-feedback">
					          Please write a valid ID Memory.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Serial Platform:</label>
				            <input type="text" class="form-control" id="serialPlatformRamUpdate" value="<?php echo $_GET["serialPlatform"] ?>" required readonly>
					        <div class="invalid-feedback">
					          Please write a valid Serial Platform.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Type Memory RAM:</label>
				            <input type="text" class="form-control" id="typeRamUpdate" required>
					        <div class="invalid-feedback">
					          Please write a valid Memory Type.
					        </div>
				          </div>
				          <div class="form-group">

				            <label for="recipient-name" class="col-form-label">Model:</label>
				            <input type="text" class="form-control" id="modelRamUpdate" required>
					        <div class="invalid-feedback">
					          Please write a valid Model.
					        </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Frecuency:</label>
				            <input type="text" class="form-control" id="frecuencyRamUpdate" required>
					        <div class="invalid-feedback">
					          Please write a valid Frecuency.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Quantity:</label>
						    <input type="number" class="form-control" id="quantityRamUpdate" required>
					        <div class="invalid-feedback">
					          Please write a valid Quantity.
					        </div>
				          </div>

				          </div>

				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="RamUpdate">Update Memory Ram</button>

				        </form>
				      </div>
				      <div class="modal-footer">

				      </div>

				        <div class="alert alert-success" id="messageSuccessfullUpdateRam">
						  <strong>Success!</strong> Memory Ram was updated successfully.
						</div>

				        <div class=" alert alert-danger" id="messageDangerUpdateRam">
						  <strong>Error!</strong> <br/>
						  Please verify the information.<br/>
						</div>

				    </div>
				  </div>
				</div>


			<br/>



			<!-- Modal Add for Silicon-->

				<div class="modal fade" id="modalSilicon" tabindex="-1" role="dialog" aria-labelledby="modalSiliconExample" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalSiliconExample">New Silicon</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="needs-validation" id="formSilicon" novalidate>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Serial Platform:</label>
				            <input type="text" class="form-control" id="serialPlatformSilicon" value="<?php echo $_GET["serialPlatform"] ?>" required readonly>
					        <div class="invalid-feedback">
					          Please write a valid Serial Platform.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Visual Id:</label>
				            <input type="text" class="form-control" id="siliconVid" required>
					        <div class="invalid-feedback">
					          Please write a valid VID.
					        </div>
				          </div>
				          <div class="form-group">

				            <label for="recipient-name" class="col-form-label">QDF:</label>
				            <input type="text" class="form-control" id="siliconQdf" required>
					        <div class="invalid-feedback">
					          Please write a valid QDF.
					        </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Name:</label>
				            <input type="text" class="form-control" id="siliconName" required>
					        <div class="invalid-feedback">
					          Please write a valid Name.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Type:</label>
						    	<select class="form-control"  id="siliconType" required>
						    	  <option value="" selected disabled hidden>Choose...</option>	
						     	  <option value="PCH">PCH</option>
								  <option value="CPU 0">CPU 0</option>
								  <option value="CPU 1">CPU 1</option>
								  <option value="CPU 2">CPU 2</option>
								  <option value="CPU 3">CPU 3</option>

						    	</select>
					        <div class="invalid-feedback">
					          Please write a valid Type.
					        </div>
				          </div>

				          </div>

				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="addSilicon">Add Silicon</button>

				        </form>
				      </div>
				      <div class="modal-footer">

				      </div>

				        <div class="alert alert-success" id="messageSuccessfullSilicon">
						  <strong>Success!</strong> Silicon was added successfully.
						</div>

				        <div class=" alert alert-danger" id="messageDangerSilicon">
						  <strong>Error!</strong> <br/>
						  Please verify the information.<br/>
						</div>

				    </div>
				  </div>
				</div>


			<br/>

			<!-- Modal Update for Silicon-->

				<div class="modal fade" id="modalUpdateSilicon" tabindex="-1" role="dialog" aria-labelledby="modalUpdateSiliconExample" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalUpdateSiliconExample">Update Silicon</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="needs-validation" id="formUpdateSilicon" novalidate>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Id Silicon:</label>
				            <input type="text" class="form-control" id="idSiliconUpdate" required readonly="">
					        <div class="invalid-feedback">
					          Please write a valid Id Silicon.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Serial Platform:</label>
				            <input type="text" class="form-control" id="serialPlatformUpdateSilicon" value="<?php echo $_GET["serialPlatform"] ?>" required readonly="">
					        <div class="invalid-feedback">
					          Please write a valid Serial Platform.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Visual Id:</label>
				            <input type="text" class="form-control" id="siliconUpdateVid" required>
					        <div class="invalid-feedback">
					          Please write a valid VID.
					        </div>
				          </div>
				          <div class="form-group">

				            <label for="recipient-name" class="col-form-label">QDF:</label>
				            <input type="text" class="form-control" id="siliconUpdateQdf" required>
					        <div class="invalid-feedback">
					          Please write a valid QDF.
					        </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Name:</label>
				            <input type="text" class="form-control" id="siliconUpdateName" required>
					        <div class="invalid-feedback">
					          Please write a valid Name.
					        </div>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Type:</label>
						    	<select class="form-control"  id="siliconUpdateType" required>
						    	  <option value="" selected disabled hidden>Choose...</option>	
						     	  <option value="PCH">PCH</option>
								  <option value="CPU 0">CPU 0</option>
								  <option value="CPU 1">CPU 1</option>
								  <option value="CPU 2">CPU 2</option>
								  <option value="CPU 3">CPU 3</option>

						    	</select>
					        <div class="invalid-feedback">
					          Please write a valid Type.
					        </div>
				          </div>

				          </div>

				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="updateSilicon">Update Silicon</button>

				        </form>
				      </div>
				      <div class="modal-footer">

				      </div>

				        <div class="alert alert-success" id="messageSuccessfullUpdateSilicon">
						  <strong>Success!</strong> Silicon was updated successfully.
						</div>

				        <div class=" alert alert-danger" id="messageDangerUpdateSilicon">
						  <strong>Error!</strong> <br/>
						  Please verify the information.<br/>
						</div>

				    </div>
				  </div>
				</div>


			<br/>

			<!--After here , go down to delete, please verify if everythin it is done */ -->
			<!-- Modal for PowerSupply-->

			<div class="modal fade" id="modalSupply" tabindex="-1" role="dialog" aria-labelledby="modalSupplyExample" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="modalSupplyExample">New Power Supply</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form class="needs-validation" id="formSupply" novalidate>
			          <div class="form-group">
			            <label for="recipient-name" class="col-form-label">Serial:</label>
			            <input type="text" class="form-control" id="serieSupply" required>
				        <div class="invalid-feedback">
				          Please write a valid Serie Number.
				        </div>
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="col-form-label">Model:</label>
			            <input type="text" class="form-control" id="modelSupply" required>
				        <div class="invalid-feedback">
				          Please write a valid Model.
				        </div>
			          </div>
			          <button class="btn btn-primary" type="submit">Add Power Supply</button>
			          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        </form>
			      </div>
			      <div class="modal-footer">
			    
			      </div>
			      
			        <div class="alert alert-success" id="messageSuccessfullSupply">
					  <strong>Success!</strong> Power Supply was added successfully.
					</div>

			        <div class=" alert alert-danger" id="messageDangerSupply">
					  <strong>Error!</strong> <br/>
					  Please verify the information.<br/>
					  Please verify that the Serie is Unique.
					</div>

			    </div>
			  </div>
			</div>

			<br/>

			<!-- Start of Row 3  -->

			<div class="row toogleDetail" >
			
			  <div class="col-sm-12">
			  
					<div class="card">
					  <div class="card-header">
					    Memory RAM:
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>

							<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">Frecuency</th>
							      <th scope="col">Model</th>
							      <th scope="col">Type</th>
							      <th scope="col">Quantity</th>
							    </tr>
							  </thead>
							  <tbody ID="tableRam">

							  </tbody>
							</table>

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRam">Add Ram</button>

					  </div>
					</div>	
			    			    
			    
			  </div>
			  
			</div>
			
			<!-- End of Row 3  -->


			<!-- Modal for RAM-->

				<div class="modal fade" id="modalRam" tabindex="-1" role="dialog" aria-labelledby="modalRamExample" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalRamExample">New RAM</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="needs-validation" id="formRam" novalidate>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Type:</label>
				            <input type="text" class="form-control" id="typeRam" required>
					   		  <div class="invalid-feedback">
					          Please write a valid Type Ram.
					         </div>
				          </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Frecuency:</label>
				            <input type="text" class="form-control" id="frecuencyRam" required>
					         <div class="invalid-feedback">
					          Please write a valid Frecuncy.
					         </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Model:</label>
				            <input type="text" class="form-control" id="modelRam" required>
					        <div class="invalid-feedback">
					          Please write a valid Model.
					        </div>
				          </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Quantity:</label>
				            <input type="text" class="form-control" id="quantityRam" required>
					        <div class="invalid-feedback">
					          Please write a valid Quantity.
					        </div>
				          </div>
				          </div>

				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="addRam">Add Memory Ram</button>

				        </form>
				      </div>
				      <div class="modal-footer">
				      </div>

				        <div class="alert alert-success" id="messageSuccessfullRam">
						  <strong>Success!</strong> Memory Ram was added successfully.
						</div>

				        <div class=" alert alert-danger" id="messageDangerRam">
						  <strong>Error!</strong> <br/>
						  Please verify the information.<br/>
						</div>

				    </div>
				  </div>
				</div>

			<br/>
			<!-- Start of Row 4  -->

			<div class="row toogleDetail" >
			
			  <div class="col-sm-12">
			  
					<div class="card">
					  <div class="card-header">
					    PCI:
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>

							<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">Serie</th>
							      <th scope="col">Model</th>
							      <th scope="col">Type</th>
							    </tr>
							  </thead>
							  <tbody id="tablePci">

							  </tbody>
							</table>

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPCI">Add PCI</button>

					  </div>
					</div>	
			    			    
			    
			  </div>
			  
			</div>
			
			<!-- End of Row 4  -->

			<!-- Modal for PCI-->

				<div class="modal fade" id="modalPCI" tabindex="-1" role="dialog" aria-labelledby="modalPCIExample" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalPCIExample">New PCI</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="needs-validation" id="formPci" novalidate>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">serie:</label>
				            <input type="text" class="form-control" id="seriePci" required>
					        <div class="invalid-feedback">
					          Please write a valid Serie.
					        </div>
				          </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">model:</label>
				            <input type="text" class="form-control" id="modelPci" required>
					        <div class="invalid-feedback">
					          Please write a valid model.
					        </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">type:</label>
				            <input type="text" class="form-control" id="typePci" required>
					        <div class="invalid-feedback">
					          Please write a valid type.
					        </div>
				          </div>

				          </div>

				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="addPci">Add Pci</button>

				        </form>
				      </div>
				      <div class="modal-footer">

				      </div>
				        <div class="alert alert-success" id="messageSuccessfullPci">
						  <strong>Success!</strong> PCI was added successfully.
						</div>

				        <div class=" alert alert-danger" id="messageDangerPci">
						  <strong>Error!</strong> <br/>
						  Please verify the information.<br/>
						</div>
				    </div>
				  </div>
				</div>

			<br/>
			<!-- Start of Row 5  -->

			<div class="row toogleDetail" >
			
			  <div class="col-sm-12">
			  
					<div class="card">
					  <div class="card-header">
					    Storage:
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>

							<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">Serie</th>
							      <th scope="col">Model</th>
							      <th scope="col">Type</th>
							    </tr>
							  </thead>
							  <tbody id="tableStorage">

							  </tbody>
							</table>

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalStorage">Add Storage</button>

					  </div>
					</div>	
			    			    
			    
			  </div>
			  
			</div>
			
			<!-- End of Row 5  -->

			<!-- Modal for Storage-->

				<div class="modal fade" id="modalStorage" tabindex="-1" role="dialog" aria-labelledby="modalStorageExample" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalStorageExample">New Storage</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="needs-validation" id="formStorage" novalidate>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">serie:</label>
				            <input type="text" class="form-control" id="serieStorage" required>
					        <div class="invalid-feedback">
					          Please write a valid Serie.
					        </div>
				          </div>
				          <div class="form-group">

				            <label for="recipient-name" class="col-form-label">model:</label>
				            <input type="text" class="form-control" id="modelStorage" required>
					        <div class="invalid-feedback">
					          Please write a valid model.
					        </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">type:</label>
				            <input type="text" class="form-control" id="typeStorage" required>
					        <div class="invalid-feedback">
					          Please write a valid type.
					        </div>
				          </div>

				          </div>

				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="addStorage">Add Storage</button>

				        </form>
				      </div>
				      <div class="modal-footer">

				      </div>

				        <div class="alert alert-success" id="messageSuccessfullStorage">
						  <strong>Success!</strong> Storage was added successfully.
						</div>

				        <div class=" alert alert-danger" id="messageDangerStorage">
						  <strong>Error!</strong> <br/>
						  Please verify the information.<br/>
						</div>

				    </div>
				  </div>
				</div>

			<br/>
			<!-- Start of Row 6  -->

			<div class="row toogleDetail" >
			
			  <div class="col-sm-12">
			  
					<div class="card">
					  <div class="card-header">
					    CPU:
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>

							<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">VID</th>
							      <th scope="col">QDF</th>
							      <th scope="col">Name</th>
							    </tr>
							  </thead>
							  <tbody id="tableCpu">

							  </tbody>
							</table>

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCpu">Add CPU</button>

					  </div>
					</div>	
			    			    
			    
			  </div>
			  
			</div>

			<!-- Modal for CPU-->

				<div class="modal fade" id="modalCpu" tabindex="-1" role="dialog" aria-labelledby="modalCpuExample" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalCpuExample">New Cpu</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="needs-validation" id="formCpu" novalidate>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Visual Id:</label>
				            <input type="text" class="form-control" id="cpuVid" required>
					        <div class="invalid-feedback">
					          Please write a valid VID.
					        </div>
				          </div>
				          <div class="form-group">

				            <label for="recipient-name" class="col-form-label">QDF:</label>
				            <input type="text" class="form-control" id="cpuQdf" required>
					        <div class="invalid-feedback">
					          Please write a valid QDF.
					        </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Name:</label>
				            <input type="text" class="form-control" id="cpuName" required>
					        <div class="invalid-feedback">
					          Please write a valid Name.
					        </div>
				          </div>

				          </div>

				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="addCpu">Add Cpu</button>

				        </form>
				      </div>
				      <div class="modal-footer">

				      </div>

				        <div class="alert alert-success" id="messageSuccessfullCpu">
						  <strong>Success!</strong> Cpu was added successfully.
						</div>

				        <div class=" alert alert-danger" id="messageDangerCpu">
						  <strong>Error!</strong> <br/>
						  Please verify the information.<br/>
						</div>

				    </div>
				  </div>
				</div>
			
			<!-- End of Row 6  -->
			<br/>
			<!-- Start of Row 7  -->

			<div class="row toogleDetail" >
			
			  <div class="col-sm-12">
			  
					<div class="card">
					  <div class="card-header">
					    PCH:
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>

							<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">VID</th>
							      <th scope="col">QDF</th>
							      <th scope="col">Name</th>
							    </tr>
							  </thead>
							  <tbody id="tablePch">

							  </tbody>
							</table>

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPCH">Add PCH</button>

					  </div>
					</div>	
			    			    
			    
			  </div>
			  
			</div>

			<!-- End of Row 7  -->

			<!-- Modal for PCH-->

				<div class="modal fade" id="modalPCH" tabindex="-1" role="dialog" aria-labelledby="modalPCHExample" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalPCHExample">New PCH</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="needs-validation" id="formPch" novalidate>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Visual ID:</label>
				            <input type="text" class="form-control" id="pchVid" required>
					        <div class="invalid-feedback">
					          Please write a valid VID.
					        </div>
				          </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">QDF:</label>
				            <input type="text" class="form-control" id="pchQdf" required>
					        <div class="invalid-feedback">
					          Please write a valid QDF.
					        </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Name:</label>
				            <input type="text" class="form-control" id="pchName" required>
					        <div class="invalid-feedback">
					          Please write a valid Name.
					        </div>
				          </div>

				          </div>

				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="addPch">Add PCH</button>

				        </form>
				      </div>
				      <div class="modal-footer">

				      </div>

				        <div class="alert alert-success" id="messageSuccessfullPch">
						  <strong>Success!</strong> Cpu was added successfully.
						</div>

				        <div class=" alert alert-danger" id="messageDangerPch">
						  <strong>Error!</strong> <br/>
						  Please verify the information.<br/>
						</div>

				    </div>
				  </div>
				</div>

			<br/>
			<!-- Apply settings -->
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
    <script src="/js/detailPlatform.js"></script>
    <script src="/js/selectedOptionsIndex.js"></script>  


    <script>

    	$('#listSilicon').DataTable();
    	$('#listRam').DataTable();
    	$('#listHardDisk').DataTable();
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
