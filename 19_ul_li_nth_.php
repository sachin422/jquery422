<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("ul li:nth-child(2)").css("border","1px solid red");
					
					// select li position 2nd in ul and put css border style to that li
					
				});
			</script>
		</head>
		<body>
			
				<ul>
					<li>first</li>
					<li>second</li>
					<li>third</li>
				</ul>
			
		</body>
	</head>
</html>