

<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>

	<title>LTR - Memories Ram</title>
	
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
			
			<br/>
			<!-- Start of Row 2  -->
				<div class="row">
				  <div class="col-sm-12">
					<div class="card text-center">
					  <div class="card-header">
					    <span></span>
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"><span>List of Memory's Ram</span></h5>
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
				<br/>
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<table class="table" id="listRam">
						<thead>
							<tr>
								<th>ID Ram</th>
								<th>Type</th>
								<th>Frecuency</th>
								<th>Model</th>
								<th>Quantity</th>
								<th>Platform Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php include("../php/getRam.php"); ?>
						</tbody>
					</table>
				</div>


				<div>
					<hr/>
				</div>

				<a href="../" class="btn btn-info" role="button">Add new Memory Ram</a>

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
    <script src="/js/detailPlatform.js"></script>  


    <script>
    	
    	$('#listRam').DataTable();

    </script>
     
</body>
</html>