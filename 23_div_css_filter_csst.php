<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("div").css("background", "#fc0").filter(".middle").css("border", "1px solid red");
					
					// select all div apply background color, then filter only those tag which have css class middle and apply css border to those middle class element only
					
				});
			</script>
		</head>
		<body>
			
				<div>first</div>
				<div>second</div>
				<div class="middle">third</div>
				<div>fourth</div>
				<div>fifth</div>
				<div class="middle">sixth</div>
			
		</body>
	</head>
</html>