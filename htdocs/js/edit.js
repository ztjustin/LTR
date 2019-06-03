$( document ).ready(function() {


/*Edit Platform*/

	var plat = new Object();
	plat.serialPlatform;
	plat.name;
	plat.ubication;
	plat.ActiveNumber;
	plat.referenceNumber;

	$('#formPlatform').submit(function (event) {


	plat['serialPlatform']	= $('#serialPlatform').val();
	plat['namePlatform']	= $('#namePlatform').val();
	plat['ubication']	= $('#ubication').val();
	plat['ActiveNumber']	= $('#ActiveNumber').val();
	plat['referenceNumber']	= $('#referenceNumber').val();

    event.preventDefault();
    if ($('#formPlatform')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {
        	$.ajax({

	        	data: {
	        		 "serialPlatform": plat['serialPlatform'],
	        	     "name": plat['namePlatform'],
	        	     "ubication": plat['ubication'],
	        	     "ActiveNumber": plat['ActiveNumber'],
	        	     "referenceNumber": plat['referenceNumber']

	                },
	            url:  '../php/updatePlatform.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){

	            	if (response == 1) {

	            		$('#myModal').modal('show');

						$('#myModal').bind('hidden.bs.modal', function () {
						   window.location = "../vistas/listPlatforms.php";
						 })

	            		
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


/*Edit Supply*/


var supply = new Object();
supply.serialPlatform;
supply.serie;
supply.model;


$('#formEditSupply').submit(function (event) {


supply['serialPlatform'] = $('#selectPlatform option:selected').val();
supply['serie']	= $('#serie').val();
supply['model']	= $('#modelSupply').val();


event.preventDefault();
if ($('#formEditSupply')[0].checkValidity() === false) {
    event.stopPropagation();
} else {
    	$.ajax({

        	data: {
        		 "serialPlatform": supply['serialPlatform'],
        	     "serie": supply['serie'],
        	     "model": supply['model']
                },
            url:  '../php/updateSupply.php',
            type: 'GET',

            beforeSend: function(){
                
            },

            success: function(response){
            	
            	if (response == 1) {

            		$('#myModal').modal('show');

					$('#myModal').bind('hidden.bs.modal', function () {
					   window.location = "../vistas/listPowerSupply.php";
					 })

            		
            	}

                   
            },

            error: function (xhr, ajaxOptions, thrownError) {
	        	alert(xhr.status);
	        	alert(thrownError);
	      }


      });
		 }
	$('#formEditSupply').addClass('was-validated');
});


/*Edit Silicon*/

$('#modalUpdateSilicon').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var idSiliconUpdate = button.data('id');
  var vid = button.data('vid');
  var qdf = button.data('qdf');
  var name = button.data('name');
  var type = button.data('type');
  // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  $("#idSiliconUpdate").val(idSiliconUpdate);
  $("#siliconUpdateVid").val(vid);
  $("#siliconUpdateQdf").val(qdf);
  $("#siliconUpdateName").val(name);
  $('#siliconUpdateType option[value="'+type+'"]').attr("selected",true);


	var silicon = new Object();
	silicon.idsilicon;
	silicon.vid;
	silicon.qdf;
	silicon.name;
	silicon.type;
	silicon.serialPlatform;

	$('#formUpdateSilicon').submit(function (event) {

	silicon['idsilicon'] = $('#idSiliconUpdate').val();
	silicon['vid']	= $('#siliconUpdateVid').val();
	silicon['qdf']	= $('#siliconUpdateQdf').val();
	silicon['name']	= $('#siliconUpdateName').val();
	silicon['type']	= $('#siliconUpdateType').val();
	silicon['serialPlatform'] = $('#serialPlatformUpdateSilicon').val();

	event.preventDefault();

	if ($('#formUpdateSilicon')[0].checkValidity() === false) {
	    event.stopPropagation();
	} else {
	    	$.ajax({

	        	data: {
	        		 "idsilicon": silicon['idsilicon'],
	        	     "vid": silicon['vid'],
	        	     "qdf": silicon['qdf'],
	        	     "name": silicon['name'],
	        	     "type": silicon['type'],
	        	     "serialPlatform": silicon['serialPlatform']
	                },
	            url:  '../php/updateSilicon.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){

	            	if (response == 1) {

	            		$("#messageSuccessfullUpdateSilicon").show();
	            		$("#messageDangerSilicon").hide();
	            		setTimeout(
						  function() 
						  {
	    
						    window.location = "../vistas/index.php?serialPlatform="+silicon['serialPlatform']+"";

						  }, 1000);


	            	}else{

						$("#messageDangerUpdateSilicon").show();
	            		
	            	}

	                   
	            },

	            error: function (xhr, ajaxOptions, thrownError) {
		        	alert(xhr.status);
		        	alert(thrownError);
		      }


	      });
			 }
		$('#formEditRam').addClass('was-validated');
	});

});


/*Edit Memory Ram*/

$('#modalRamUpdate').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var idRamUpdate = button.data('id');
	  var type = button.data('type');
	  var model = button.data('model');
	  var frecuency = button.data('frecuency');
	  var quantity = button.data('quantity');
	  // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  $("#idRamUpdate").val(idRamUpdate);
	  $("#typeRamUpdate").val(type);
	  $("#modelRamUpdate").val(model);
	  $("#frecuencyRamUpdate").val(frecuency);
	  $("#quantityRamUpdate").val(quantity);


	var ram = new Object();
	ram.idRam;
	ram.type;
	ram.frecuency;
	ram.model;
	ram.quantity;
	ram.serialPlatform;

	$('#formRamUpdate').submit(function (event) {

	ram['idRam'] = $('#idRamUpdate').val();
	ram['type']	= $('#typeRamUpdate').val();
	ram['frecuency']	= $('#frecuencyRamUpdate').val();
	ram['model']	= $('#modelRamUpdate').val();
	ram['quantity']	= $('#quantityRamUpdate').val();
	ram['serialPlatform'] = $('#serialPlatformRamUpdate').val();

	event.preventDefault();

	if ($('#formRamUpdate')[0].checkValidity() === false) {
	    event.stopPropagation();
	} else {
	    	$.ajax({

	        	data: {
	        		 "serialPlatform": ram['serialPlatform'],
	        	     "idRam": ram['idRam'],
	        	     "type": ram['type'],
	        	     "frecuency": ram['frecuency'],
	        	     "model": ram['model'],
	        	     "quantity": ram['quantity']
	                },
	            url:  '../php/updateRam.php',
	            type: 'GET',

	            beforeSend: function(){
	                
	            },

	            success: function(response){

	            	if (response == 1) {

	            		$("#messageSuccessfullUpdateRam").show();
	            		$("#messageDangerUpdateRam").hide();
	            		setTimeout(
						  function() 
						  {
	    
						    window.location = "../vistas/index.php?serialPlatform="+ram['serialPlatform']+"";

						  }, 1000);


	            	}else{

						$("#messageDangerUpdateRam").show();
	            		
	            	}


	                   
	            },

	            error: function (xhr, ajaxOptions, thrownError) {
		        	alert(xhr.status);
		        	alert(thrownError);
		      }


	      });
			 }
		$('#formRamUpdate').addClass('was-validated');
	});

})

/*Next Update*/



});

