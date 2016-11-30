$(document).ready(function() {
	$(".button").click(function() {
		$(this).fadeOut(40);
		$(this).fadeIn(40);
	});

});

function pull() {
	document.getElementById("pull").innerHTML = "<div class=\"loader\"></div>"
	$.get("pull.php", function(data) {
		var time = new Date().toString();
		var content = "<p>" + time + "</p><p>" + data + "</p>";
		document.getElementById("pull").innerHTML = content.replace("\n", "</p><p>");
	});
}

function push() {
	var msg = "pushed from web interface";
	document.getElementById("push").innerHTML = "<div class=\"loader\"></div>"
	$.get("push.php", {"msg" : msg}, function(data) {
		var time = new Date().toString();
		var content = "<p>" + time + "</p><p>" + data + "</p>";
		document.getElementById("push").innerHTML = content.replace("\n", "</p><p>");
	});
}
