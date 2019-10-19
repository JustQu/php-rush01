$(window).on("load",function(){
	$.ajax({
		url: 'getProfile.php'
	})
	.done(function(out){
		new_el(out, "login", '#profinfo');
		new_el(out, "rank", '#profinfo');
		new_el(out, "aboutme", '#profinfo');
		$('.aboutme').find('div').attr('contenteditable', 'true');
		$('.aboutme').find('div').bind('click', function (){
			confirm('Are you sure you want to')
		})
	});
})




function new_el(data, name, where)
{
	var el  = $('<div/>', {
		text: name,
		class: name
	});
	$(where).append(el);
	var new_el  = $('<div/>', {
		text: data,
		class: 'pinfo'
	});
	$(el).append(new_el);
}