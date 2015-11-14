$(document).ready(StartServices);

function StartServices()
{
	$('.hour-pref').on('click',function(){
		$('.hour-pref').removeClass('hour-pref-selected');
		$('.hour-pref').attr('h-selected',false);
		$(this).addClass('hour-pref-selected');
		$(this).attr('h-selected',true);
	});

}