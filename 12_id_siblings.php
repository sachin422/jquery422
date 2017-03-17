<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("#first ~ div").css("border", "1px solid red");
					
					// select all div after id first from its level and apply css border style
					
				});
			</script>
		</head>
		<body>
			<div>zero</div>	
			<div id="first">first</div>	
			<div>second</div>	
			<div>third</div>	
		</body>
	</head>
</html>