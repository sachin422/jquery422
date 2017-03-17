<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("div button:only-child").css("border", "1px solid red");
					
					// select button of that div which has only button
					
				});
			</script>
		</head>
		<body>
			
				<div>first div<button>btn</button><input /></div>
				<div>second div<button>btn</button></div>
				<div>third div</div>
				<div>fourth div</div>
			
		</body>
	</head>
</html>