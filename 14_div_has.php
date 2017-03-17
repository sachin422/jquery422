<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("div:has(p)").css("border","1px solid red");
					
					// select all div which have p tag and apply css border style
					
				});
			</script>
		</head>
		<body>
			<div>first</div>	
			<div>second</div>	
			<div>sachin422 <p>para</p></div>	
			<div>fourth</div>	
		</body>
	</head>
</html>