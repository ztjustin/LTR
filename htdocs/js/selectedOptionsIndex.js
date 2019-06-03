$( document ).ready(function() {



$('#selectBu').change(function() {

 
    $.ajax({
        type:"GET",
        url:  '../php/getUbicationByBuOpen.php',
        data : {"bu" : $('#selectBu option:selected').val()},

            beforeSend: function(){
                $("#selecUbication").html("loading...");
            },
        success : function(response) {
            $("#selectUbication").html(response);
        },
        error: function(xhr, ajaxOptions, thrownError) {

        }
    });


});


$('#selectBu').change(function() {
 
    $.ajax({
        type:"GET",
        url:  '../php/getUbicationByBuOpen.php',
        data : {"bu" : $('#selectBu option:selected').val()},

            beforeSend: function(){
                $("#ubicationShared").html("loading...");
            },
        success : function(response) {
            $("#ubicationShared").html(response);
        },
        error: function(xhr, ajaxOptions, thrownError) {

        }
    });


});



$('#selectSharedUbication').change(function(){


	if ($('#selectSharedUbication').val() == '1') {

		$("#ubicationShared").show();
		$("#ubicationShared").prop('disabled', false);


	}else{

		$("#ubicationShared").hide();
		$("#ubicationShared").prop('disabled', true);

	}


});


});