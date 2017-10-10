$(document).ready(function(){
	$("#tooltip").tooltip({
		placement:"top",
		title:"<h1> hai hai saya tooltip</h1>",
		animation:true,
		delay:{
			show:300,
			hide:500
		},
		html:true
	});
	
	$("#tooltip_input").tooltip({
		trigger:"manual"
	});
	$("#info_login_icon").click(function(){
		$("#tooltip_input").tooltip("toggle");
	})
	
	$("#popover_btn").popover();
})