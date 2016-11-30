$(document).ready(function() {
	$(".button").click(function() {
		$(this).fadeOut(40);
		$(this).fadeIn(40);
	});

});

function pull() {
	$.get("pull.php", function(data) {
		alert(data);
	});
}
