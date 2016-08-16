$(window).scroll(function(){
	    if($(window).scrollTop() >230) {
		$("#greet").fadeOut("300");
} 
else {
	$("#greet").fadeIn("200");
}

});