<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("div").not(".green, #blue").css("border", "1px solid red");
					
					// select all div but only those div who have class green and id blue apply css border style
					
				});
			</script>
		</head>
		<body>
			
				<div>first</div>
				<div>second</div>
				<div class="green">third</div>
				<div>fourth</div>
				<div class="green">fifth</div>
				<div id="blue">sixth</div>
			
		</body>
	</head>
</html>