$(function () {
	//var cnv = document.createElement("canvas");
	var cnv = document.getElementById("myCanvas");
	var ctx = cnv.getContext("2d");

	ctx.strokeStyle = "red";
	var w = cnv.width;
	var h = cnv.height;
	var span = 8;
	var img = new Image(64, 64);
	ctx.beginPath();
	 for (var i = 0; i <= w; i+= span) {
		 for (var j = 0; j <= h; j+= span) {
			 ctx.strokeRect(i, j, 8, 8);
		 }
	}
	// var img = new Image();
	// img.onload = function(){
	// 	ctx.drawImage(img, 0, 8, 1 * 8, 4 * 8);
	// };
	// ctx.strokeStyle = "pink";
	// ctx.strokeRect(64,64, 64, 64);
	// img.src = "https://i.pinimg.com/originals/c5/f9/74/c5f974ac144391a830196f97a9130141.jpg";

	// var img2 = new Image();
	// img2.src = "https://i.pinimg.com/originals/a1/40/a5/a140a5c1206d3cd334cf1781d0d41d0b.png";
	// img2.onload = function () {
	// 	ctx.drawImage(img2, 64, 64, 64, 64);
	//}

	// ctx.strokeStyle = "green";
	// ctx.fill(); // *14
	// ctx.moveTo(40, 140);
	// ctx.lineTo(20, 40);
	// ctx.lineTo(60, 100);
	// ctx.stroke(); // *22
	//for (var x = -0.0; x <= w; x += span) ctx.strokeRect(x, 0, 0.5, h);
	//for (var y = -0.0; y <= h; y += span) ctx.strokeRect(0, y, w, 0.5);
	// сохрнить в рисунок
	$("#cimg").attr("src", cnv.toDataURL());
	// добавить как фон для div
	$('#m').css("background-image", "url('" + cnv.toDataURL() + "')");
});

$(document).ready(function(){
	$.ajax({
		url: 'getmap.php',
		method: 'POST',
		dataType: 'json',
	})
	.done(function(map) {
		alert(map);
		map.forEach(function(element){
			alert(element['type']);
			console.log(element['type']);
		})
	});
	$('#myCanvas').click(function(){

	})
})