<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar jquery ui</title>
		<script src="script/jquery-ui/external/jquery/jquery.js" charset="utf-8"></script>
		<script src="script/jquery-ui/jquery-ui.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="script/jquery-ui/jquery-ui.min.css">
		<style media="screen">
			.testeffect{
				padding: 20px;
				background-color: red;
				color: white;
			}
		</style>
	</head>
	<body>
		
		<div class="dialog" title="Apakah anda yakin akan menghapusnya?">
			jika iya silakan klik tombol oke dibawah ini 
		</div>
		<button  id="opener" type="button" name="button">Open dialog box</button>
		
		<form action="">
			<input id="datepicker" type="text" name="" value="">
			<input id="negara" type="text" name="negara" placeholder="negara anda berasal">
		</form>
		
		<div  class="testeffect">
			
		</div>
		
		<script>
			$(document).ready(function(){
				$(".dialog").dialog({
					autoOpen: false,
					modal: true,
					show: {
						effect: "clip",
						easing: "linear",
						duration: 500
					},
					hide: {
						duration: 500
					},
					buttons: {
						cancel: function(){
							$(this).dialog("close");
						},
						"Delete user": function(){
							alert("user berhasil di delete");
						}
					}
				});
				
				$("#opener").click(function(){
					$(".dialog").dialog("open");
				})
				
				$("#datepicker").datepicker({
					showAnim: "slideDown",
					numberOfMonths: 2,
					dateFormat: "dd MM, yy"
				});
				
				//data autocomplete negara
				var data_autocomplete_negara = [
					"Php",
					"Javascript"
				];
				
				$("#negara").autocomplete({
					source: data_autocomplete_negara
				});
				
				$(".testeffect").hover(function(){
					$(this).effect("bounce", "slow");
				})
			})
		</script>
	</body>
</html>