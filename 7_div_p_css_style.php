<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("div>p").css("border","1px solid red");
					
					// select all p inside all divs in dom and apply css style 
					
				});
			</script>
		</head>
		<body>
				<div>first <p>para 1 (apply to this paragraph only)</p></div>	
				<div>second</div><p>para 2 (not apply this para because this is not inside div tag)</p>	
				<div>third</div>	
				<div>fourth</div>	
		</body>
	</head>
</html>