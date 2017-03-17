<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("div").slice(0, 2).wrapInner("<b></b>");
					
					// select particular div index 0,1,2 and wrap their inner contents with bold tag 
					
				});
			</script>
		</head>
		<body>
			
				<div>first</div>
				<div>second</div>
				<div>third</div>
				<div>fourth</div>
				<div>fifth</div>
				<div>sixth</div>
			
		</body>
	</head>
</html>