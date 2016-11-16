$(document).ready(function () { // Can I have some jQuery, chocolate on top please?

	/* It's a kinda of magic Fred! */
	var magicnumber = 0 + parseInt(window.location.hash.replace( /#/g, ''));

	var soweird = window.getComputedStyle(document.querySelector('body div#contents div.rabbithole'), ':after').getPropertyValue('content').replace( /"/g, '');
	
	try{
		for (i = 0; i < magicnumber; i++) {
			soweird = atob(soweird);
		}
		
		if (soweird.length < 30) {
			$('body div#contents div.rabbithole').html(soweird+"...");
		}

		console.log(soweird);

	}catch(e){
		$('body div#contents div.rabbithole').html("You have gone too far and broke my heart :'(<br/>");
	}


});