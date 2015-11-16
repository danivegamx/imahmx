$(document).ready(StartServices);

function StartServices()
{
	$('.hour-pref').on('click',function(){
		$('.hour-pref').removeClass('hour-pref-selected');
		$('.hour-pref').attr('h-selected',false);
		$(this).addClass('hour-pref-selected');
		$(this).attr('h-selected',true);
	});

	$('#login').on('click',function(){
		var usr = $('#login-field-username').val();
		var pss = $('#login-field-password').val();

		$.ajax({
			data    : "username="+usr+"&password="+pss,
			type    : 'POST',
			url     : 'controller/login.php',
			success : function(data) {
				if(data == "true") {
					alert('ok!')
				}
				else {alert("Aiñ :(")}
			}
		});

	});
}
