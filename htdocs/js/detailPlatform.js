/**
 * Created by justin Zuniga Torres for PMV
 */

$( document ).ready(function() {
	
	$("#messageSuccessfullSilicon").hide();
	$("#messageDangerSilicon").hide();
	$("#messageSuccessfullUpdateSilicon").hide();
	$("#messageDangerUpdateSilicon").hide();
	$("#messageSuccessfullUpdateRam").hide();
	$("#messageSuccessfullSupply").hide();
	$("#messageDangerSupply").hide();
	$("#messageDangerPlatform").hide();
	$("#messageSuccessfullRam").hide();
	$("#messageDangerRam").hide();
	$("#messageSuccessfullUpdateRam").hide();
	$("#messageDangerUpdateRam").hide();
	$("#messageSuccessfullPci").hide();
	$("#messageDangerPci").hide();
	$("#messageSuccessfullStorage").hide();
	$("#messageDangerStorage").hide();
	$("#messageSuccessfullPch").hide();
	$("#messageDangerPch").hide();

	$(".toogleDetail").hide();


	/*Platform*/

	var platform = new Object();
	platform.serialPlatform;
	platform.name;
	platform.CheckDateIn;
	platform.CheckVerifiedDate;
	platform.ubication;
	platform.ubicationShared;
	platform.ActiveNumber;
	platform.referenceNumber;
	platform.project;
	platform.bu;
	platform.chasisSerial;
	platform.model;
	platform.isSharedUbication;
	platform.initialStatus;


	$('#formPlatform').submit(function (event) {


	platform['serialPlatform']	= $('#serialPlatform').val();
	platform['namePlatform']	= $('#namePlatform').val();
	platform['CheckDateIn']	= $('#CheckDateIn').val();
	platform['ubication']	= $('#selectUbication').val();
	platform['ubicationShared']	= $('#ubicationShared').val();
	platform['ActiveNumber']	= $('#ActiveNumber').val();
	platform['referenceNumber']	= $('#referenceNumber').val();
	platform['CheckVerifiedDate'] = $('#CheckVerifiedDate').val();
	platform['isSharedUbication'] = $('#selectSharedUbication').val();
	platform['project'] = $('#project').val();
	platform['bu'] = $('#selectBu').val();
	platform['chasisSerial'] = $('#chasisSerial').val();
	platform['model'] = $('#model').val();
	platform['initialStatus'] = $('#initialStatus').val();


    event.preventDefault();
    if ($('#formPlatform')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {
        	$.ajax({

	        	data: {

	        		 "serialPlatform": platform['serialPlatform'],
	        	     "name": platform['namePlatform'],
	        	     "CheckDateIn": platform['CheckDateIn'],
	        	     "ubication": platform['ubication'],
	        	     "ActiveNumber": platform['ActiveNumber'],
	        	     "referenceNumber": platform['referenceNumber'],
	        	     "isSharedUbication" : platform['isSharedUbication'],
	        	     "project" : platform['project'],
	        	     "bu" : platform['bu'],
	        	     "chasisSerial" : platform['chasisSerial'],
	        	     "model" : platform['model'],
	        	     "CheckVerifiedDate" : platform['CheckVerifiedDate'],
	        	     "ubicationShared" : platform['ubicationShared'],
	        	     "initialStatus" : platform['initialStatus']

	                },
	            url:  '../php/AddPlatform.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){


	            	if (response == 1) {

            		$('#myModal').modal('show');

					$('#myModal').bind('hidden.bs.modal', function () {
					   window.location.href = "../vistas/index.php?serialPlatform="+platform['serialPlatform']+"";
					 })
	            		


	            	}else{

	            		$("#messageDangerPlatform").show();
	            		$("#messageSuccessfullPlatform").hide();
	            		
	            	}

	                   
	            },

	            error: function (xhr, ajaxOptions, thrownError) {
		        	alert(xhr.status);
		        	alert(thrownError);
		      }


	      });
  		 }
    	$('#formPlatform').addClass('was-validated');
	});


	/*Power Supply*/



	var powerSupply = new Object();
	powerSupply.serie;
	powerSupply.model;


	$('#formSupply').submit(function (event) {


	powerSupply['serie'] = $('#serieSupply').val();
	powerSupply['model'] = $('#modelSupply').val();
	powerSupply['seriePlatform'] = $('#serialPlatform').val();

	alert(powerSupply['seriePlatform']);
	
    event.preventDefault();
    if ($('#formSupply')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {
        	$.ajax({

	        	data: {
	        		 "serie": powerSupply['serie'],
	        	     "model": powerSupply['model'],
	        	     "seriePlatform": powerSupply['seriePlatform']

	                },
	            url:  '../php/AddPowerSupply.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){

	            	alert(response);

	            	if (response == 1) {

	            		$("#messageSuccessfullSupply").show();
	            		$("#messageDangerSupply").hide();
	            		setTimeout(
						  function() 
						  {

						    $("#messageSuccessfullSupply").hide();
						    
						    $("#formSupply")[0].reset();


						  }, 3000);

	            		$('#TablePowerSupply').append('<tr><td>'+ powerSupply['serie'] +'</td><td>'+ powerSupply['model'] +'</td></tr>'); /*table*/

	            	}else{

						$("#messageDangerSupply").show();
						$("#formSupply")[0].reset();
	            		
	            	}

	                   
	            },

	            error: function (xhr, ajaxOptions, thrownError) {
		        	alert(xhr.status);
		        	alert(thrownError);
		      }


	      });
  		 }
    	$('#formSupply').addClass('was-validated');
	});

	/*RAM*/


	var ram = new Object();
	ram.type;
	ram.frecuency;
	ram.model;
	ram.quantity;
	ram.serialPlatform;


	$('#formRam').submit(function (event) {


	ram['type'] = $('#typeRam').val();
	ram['frecuency'] = $('#frecuencyRam').val();
	ram['model'] = $('#modelRam').val();
	ram['quantity'] = $('#quantityRam').val();
	ram['serialPlatformRam'] = $('#serialPlatformRam').val();



    event.preventDefault();
    if ($('#formRam')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {
        	$.ajax({

	        	data: {

	        		 "type": ram['type'],
	        	     "frecuency": ram['frecuency'],
	        	     "model": ram['model'],
	        	     "quantity": ram['quantity'],
	        	     "serialPlatformRam": ram['serialPlatformRam']

	                },

	            url:  '../php/AddRam.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){

				if (response == 1) {


	            		$("#messageSuccessfullRam").show();
	            		$("#messageDangerRam").hide();
	            		setTimeout(
						  function() 
						  {

							window.location = "../vistas/index.php?serialPlatform="+ram['serialPlatformRam']+"";

						  }, 1000);


	            	}else{

						$("#messageDangerRam").show();
						$("#formRam")[0].reset();
	            		
	            	}
	                   
	            },

	            error: function (xhr, ajaxOptions, thrownError) {
		        	alert(xhr.status);
		        	alert(thrownError);
		      }


	      });
  		 }
    	$('#formRam').addClass('was-validated');
	});


	/* PCI */

	var pci = new Object();
	pci.serie;
	pci.model;
	pci.type;
	pci.serialPlatform;


	$('#formPci').submit(function (event) {


	pci['serie'] = $('#seriePci').val();
	pci['model'] = $('#modelPci').val();
	pci['type'] = $('#typePci').val();
	pci['serialPlatform'] = $('#serialPlatform').val();

	event.preventDefault();

    if ($('#formPci')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {

        	$.ajax({

	        	data: {

	        		 "serie": pci['serie'],
	        	     "model": pci['model'],
	        	     "type": pci['type'],
	        	     "serialPlatform": pci['serialPlatform']

	                },

	            url:  '../php/AddPci.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){

				if (response == 1) {

	            		$("#messageSuccessfullPci").show();
	            		$("#messageDangerPci").hide();
	            		setTimeout(
						  function() 
						  {

						  	$("#messageSuccessfullPci").hide();

						    $("#formPci")[0].reset();


						  }, 3000);

	            		$('#tablePci').append('<tr><td>'+ pci['serie'] +'</td><td>'+ pci['model'] +'</td><td>'+ pci['type'] + '</td></tr>'); /*table*/

	            	}else{

						$("#messageDangerPci").show();
						$("#formPci")[0].reset();
	            		
	            	}
	                   
	            },

	            error: function (xhr, ajaxOptions, thrownError) {
		        	alert(xhr.status);
		        	alert(thrownError);
		      }


	      });
  		 }
    	$('#formPci').addClass('was-validated');
	});

	
	/* STORAGE */


	var storage = new Object();
	storage.serie;
	storage.type;
	storage.model;
	storage.serialPlatform;


	$('#formStorage').submit(function (event) {


	storage['serie'] = $('#serieStorage').val();
	storage['type'] = $('#typeStorage').val();
	storage['model'] = $('#modelStorage').val();
	storage['serialPlatform'] = $('#serialPlatform').val();

	event.preventDefault();

    if ($('#formStorage')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {

        	$.ajax({

	        	data: {

	        		 "serie": storage['serie'],
	        	     "type": storage['type'],
	        	     "model": storage['model'],
	        	     "serialPlatform": storage['serialPlatform']

	                },

	            url:  '../php/AddStorage.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){


				if (response == 1) {

	            		$("#messageSuccessfullStorage").show();
	            		$("#messageDangerStorage").hide();
	            		setTimeout(
						  function() 
						  {

						  	$("#messageSuccessfullStorage").hide();

						    $("#formStorage")[0].reset();


						  }, 3000);

	            		$('#tableStorage').append('<tr><td>'+ storage['serie'] +'</td><td>'+ storage['type'] +'</td><td>'+ storage['model'] + '</td></tr>'); /*table*/

	            	}else{

						$("#messageDangerStorage").show();
						$("#formStorage")[0].reset();
	            		
	            	}
	                   
	            },

	            error: function (xhr, ajaxOptions, thrownError) {
		        	alert(xhr.status);
		        	alert(thrownError);
		      }


	      });
  		 }
    	$('#formStorage').addClass('was-validated');
	});


	/* Silicon */


	var silicon = new Object();
	silicon.vid;
	silicon.qdf;
	silicon.name;
	silicon.type;
	silicon.serialPlatform;


	$('#formSilicon').submit(function (event) {


	silicon['vid'] = $('#siliconVid').val();
	silicon['qdf'] = $('#siliconQdf').val();
	silicon['name'] = $('#siliconName').val();
	silicon['type'] = $('#siliconType').val();
	silicon['serialPlatform'] = $('#serialPlatformSilicon').val();


	event.preventDefault();

    if ($('#formSilicon')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {

        	$.ajax({

	        	data: {

	        		 "vid": silicon['vid'],
	        	     "qdf": silicon['qdf'],
	        	     "name": silicon['name'],
	        	     "type": silicon['type'],
	        	     "serialPlatform": silicon['serialPlatform']

	                },

	            url:  '../php/AddSilicon.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){


				if (response == 1) {

	            		$("#messageSuccessfullSilicon").show();
	            		$("#messageDangerSilicon").hide();
	            		setTimeout(
						  function() 
						  {

						  	window.location.href = "../vistas/index.php?serialPlatform="+ silicon['serialPlatform']  +"";


						  }, 1000);

	            	}else{

						$("#messageDangerSilicon").show();
						$("#formSilicon")[0].reset();
	            		
	            	}
	                   
	            },

	            error: function (xhr, ajaxOptions, thrownError) {
		        	alert(xhr.status);
		        	alert(thrownError);
		      }


	      });
  		 }
    	$('#formSilicon').addClass('was-validated');
	});


	/* PCH */


	var pch = new Object();
	pch.vid;
	pch.qdf;
	pch.name;
	pch.serialPlatform;


	$('#formPch').submit(function (event) {


	pch['vid'] = $('#pchVid').val();
	pch['qdf'] = $('#pchQdf').val();
	pch['name'] = $('#pchName').val();
	pch['serialPlatform'] = $('#serialPlatform').val();

	event.preventDefault();

    if ($('#formPch')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {

        	$.ajax({

	        	data: {

	        		 "vid": pch['vid'],
	        	     "qdf": pch['qdf'],
	        	     "name": pch['name'],
	        	     "serialPlatform": pch['serialPlatform']

	                },

	            url:  '../php/AddPch.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){


				if (response == 1) {

	            		$("#messageSuccessfullPch").show();
	            		$("#messageDangerPch").hide();
	            		setTimeout(
						  function() 
						  {

						  	$("#messageSuccessfullPch").hide();

						    $("#formPch")[0].reset();


						  }, 3000);

	            		$('#tablePch').append('<tr><td>'+ pch['vid'] +'</td><td>'+ pch['qdf'] +'</td><td>'+ pch['name'] + '</td></tr>'); /*table*/

	            	}else{

						$("#messageDangerPch").show();
						$("#formPch")[0].reset();
	            		
	            	}
	                   
	            },

	            error: function (xhr, ajaxOptions, thrownError) {
		        	alert(xhr.status);
		        	alert(thrownError);
		      }


	      });
  		 }
    	$('#formPch').addClass('was-validated');
	});

});