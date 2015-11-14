$(document).ready(StartServices);

function StartServices()
{
	$('#add-widget').on('click',function(){
		$('#add-app-wrapper').slideDown();
	});

	$('#add-app-button').on('click',function(){
		$('#add-app-wrapper').slideUp();
	});

}