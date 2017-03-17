<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("p").clone().appendTo(document.body);
					
					// select all p(paragraph) tags, duplicate all selected tags and append to body tag
					
				});
			</script>
		</head>
		<body>
				<p>para 1</p>
				<div>first</div>
				
			
		</body>
	</head>
</html>