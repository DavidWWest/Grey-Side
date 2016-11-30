$(document).ready(function() {
	$(".button").click(function() {
		$(this).fadeOut(40);
		$(this).fadeIn(40);
	});

});

function pull() {
	$.get("pull.php", function(data) {
		var time = new Date().toString();
		var content = "<p>" + time + "</p><p>" + data + "</p>";
		document.getElementById("pull").innerHTML = content;
	});
}
