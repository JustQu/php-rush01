$(document).ready(function(){
	$('.menubutton').click(function(){
		if ($('#game_info').is(":hidden"))
			$('#game_info').show();
		else
			$('#game_info').hide();
	});
});

$('#123').submit(function(){
	alert('pepa');
	location.href ='google.com'
}).done(function(){
	
})