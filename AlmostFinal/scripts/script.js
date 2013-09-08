$(document).ready(function(){
	var height = $("#floor_link").height();

	$("#floor_link").hover(function(){
		$(this).stop().animate({opacity: 0.75, fontSize: height * 1.2}, 300);
	},function(){
		$(this).stop().animate({opacity: 1.0, fontSize: height}, 300);
	});

	$("#floor_link").click(function(event) {
		$(".white_descript").hide();
		$(".links").show();

		event.preventDefault();
	});

	$(".back").click(function(event) {
		$(".white_descript").show();
		$(".links").hide();

		event.preventDefault();
	})
});
