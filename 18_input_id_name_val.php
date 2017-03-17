<html lang="en">
	<head>
		<head>
			<title>My First jquery file</title>
			<script src="jquery-3.2.0.js"></script>
			<script>
				$(function(){
					
					$("input[id][name$='man']").val("only this one");
					
					// select all input tag whose id exist and name attribute ends man and set their values to "only this one"
					
				});
			</script>
		</head>
		<body>
			<input />	
			<input id="first" />	
			<input id="second" name="milkmanmilkman" />	
		</body>
	</head>
</html>