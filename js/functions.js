// If JavaScript is enabled remove 'no-js' class and give 'js' class
jQuery('html').removeClass('no-js').addClass('js');

// Add .osx class to html if on Os/x
if ( navigator.appVersion.indexOf("Mac")!=-1 ) 
	jQuery('html').addClass('osx');

// When DOM is fully loaded
jQuery(document).ready(function($) {


/* --------------------------------------------------------	
	 Footer Contact Form
   --------------------------------------------------------	*/	

	$('#send').click(function(){ // when the button is clicked the code executes
		$('.error').fadeOut('slow'); // reset the error messages (hides them)

		var error = false; // we will set this true if the form isn't valid

		var nombre = $('input#nombre').val(); // get the value of the input field
		if(nombre == "" || nombre == " " || nombre == "Nombre") {
			$('#err-nombre').fadeIn('slow'); // show the error message
			error = true; // change the error state to true
		}

		var telefono = $('input#telefono').val(); // get the value of the input field
		if(telefono == "" || telefono == " " || telefono == "Teléfono") {
			$('#err-telefono').fadeIn('slow'); // show the error message
			error = true; // change the error state to true
		}

		var email_compare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
		var email = $('input#email').val(); // get the value of the input field
		if (email == "" || email == " " || email == "E-mail") { // check if the field is empty
			$('#err-email').fadeIn('slow'); // error - empty
			error = true;
		}else if (!email_compare.test(email)) { // if it's not empty check the format against our email_compare variable
			$('#err-emailvld').fadeIn('slow'); // error - not right format
			error = true;
		}

		var empresa = $('input#empresa').val(); // get the value of the input field
		if(empresa == "" || empresa == " " || empresa == "Empresa") {
			$('#err-empresa').fadeIn('slow'); // show the error message
			error = true; // change the error state to true
		}
    
		var mensaje = $('textarea#mensaje').val(); // get the value of the input field
		if(mensaje == "" || mensaje == " " || mensaje == "Mensaje") {
			$('#err-mensaje').fadeIn('slow'); // show the error message
			error = true; // change the error state to true
		} 

		if(error == true) {
			$('#err-form').slideDown('slow');
			return false;
		}

		var data_string = $('#ajax-form').serialize(); // Collect data from form
		//alert(data_string);

		$.ajax({
			type: "POST",
			url: $('#ajax-form').attr('action'),
			//url:'contacto.php',
			data: data_string,
			timeout: 6000,
			error: function(request,error) {
				if (error == "timeout") {
					$('#err-timedout').slideDown('slow');
				}
				else {
					$('#err-state').slideDown('slow');
					$("#err-state").html('Ha ocurrido un problema: ' + error + '');
				}
			},
			success: function() {
				//$('#ajax-form').slideUp('slow');
				$('#ajaxsuccess').slideDown('slow');
        $('#ajaxsuccess').delay(4000);
        $('#ajaxsuccess').fadeOut(1000);

        $("#nombre").val('');
        $("#email").val('');
        $("#telefono").val('');
        $('#empresa').val('');
        $("#mensaje").val('');


			}
		});

		return false; // stops user browser being directed to the php file
	}); // end click function

/* --------------------------------------------------------	
	 Flex Initialize
   --------------------------------------------------------	*/	

$(window).load(function() {
  $('.slider1').flexslider({ 
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }, 
  });

  $('.slider2').flexslider({
    animation: "slide",
    slideshow: false,
    animationLoop: false    
  });
});
  
});
