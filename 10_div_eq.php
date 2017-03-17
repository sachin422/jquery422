<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("div").eq(2).css("background-color","#fc0");
					
					// select particular div from body and apply css style
					
				});
			</script>
		</head>
		<body>
			<div>zero</div>	
			<div>first</div>	
			<div>second</div>	
			<div>third</div>	
		</body>
	</head>
</html>