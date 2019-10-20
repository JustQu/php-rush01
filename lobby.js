$(document).ready(function(){
	$('.menubutton').click(function(){
		if ($('#game_info').is(":hidden"))
			$('#game_info').show();
		else
			$('#game_info').hide();
	});

	$('#123').submit(function(){
		$.ajax({
			type: 'POST',
			url:'game.php',
			success:function(id){
				console.log(id);
				window.location.href='game.php?id='+id;
			}
		})
		return false;
	});
});
