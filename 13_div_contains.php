<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("div:contains('sachin422')").css("border", "1px solid red");
					
					// select all div contains string sachin422 and apply css border style
					
				});
			</script>
		</head>
		<body>
			<div>first</div>	
			<div>second</div>	
			<div>sachin422</div>	
			<div>fourth</div>	
		</body>
	</head>
</html>