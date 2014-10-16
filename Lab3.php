<!doctype html>
<html lang="en">
	<meta charset="utf-8">
		<body>
			<script type="text/javascript" src="js/jquery.js"></script>
		
			<div id="loading">
				<img src="loadingBar.gif"/>
				<p id="demo" style="color:red">Please wait...</p>
			</div>
		
			<div id="inputFields" style="display:none">
			
				Username: <input type="text" name="username" id="username"></input><br>
				Password: <input type="password" name="pw" id="pw"> </input><br>    
	
				<button onclick="">Test</button>			
			</div>
		

			<script>
				var myVar=setInterval(function(){myTimer()},5000);
			
				function myTimer() {
					var d = new Date();
				
					$('#inputFields').show();
					document.getElementById("demo").innerHTML = '';
					document.getElementById("loading").innerHTML =' <h1 style="color:green">Ready to use.</h1>';
				}

			</script>
		</body>
</html>
