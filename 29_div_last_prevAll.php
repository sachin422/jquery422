<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("div:last").prevAll().css("border","1px solid red");
					
					// select 3rd index element and apply css border style
					
				});
			</script>
		</head>
		<body>
				
				<div>first</div>
				<div>second</div>
				<div>third</div>
				<div>fourth</div>
				
			
		</body>
	</head>
</html>