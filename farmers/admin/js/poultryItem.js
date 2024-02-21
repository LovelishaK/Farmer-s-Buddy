$(document).ready(function(){
	$(".itemHolder").on("click",function(){
		var screenWidth=window.innerWidth;
		var screenHeight=window.innerHeight;
		$("#itemBackgrounder").css("width",screenWidth);
		$("#itemBackgrounder").css("height",screenHeight);
		$("#itemBackgrounder").css("display","block");
		
		var setLeft=(screenWidth-$("#selectedItemHolder").width())/2;
		var setTop=(screenHeight-$("#selectedItemHolder").height())/2;
		
		$("#selectedItemHolder").css("display","block");
		$("#selectedItemHolder").css("top",setTop);
		$("#selectedItemHolder").css("left",setLeft);
	});
});