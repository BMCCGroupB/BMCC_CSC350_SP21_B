<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
<?php include "templates/header.php"?>
<html>
	<head>
	<script>
		function showPass() {
		  var x = document.getElementById("myInput");
		  if (x.type === "password") {
			x.type = "text";
		  } else {
			x.type = "password";
		  }
		}
		
			function changeMessage(c)
	{
		
		if (c == 'info') 
			document.getElementById("message").innerHTML = 
			"<?php
			$password = $_SESSION['password'];
			echo "Apartment: ".$_SESSION['apt']."<br><br>";
			echo "Email: ".$_SESSION['username']."<br><br>";
			echo "Password: <input type='password' value = $password id='myInput' <br><br>";
			echo "<input type='checkbox' onclick='showPass()'>Show Password";						
			?> <br><br> <a href='templates/destroy.php'>Sign out</a>";				
			
			else if (c == 'pass'){
			document.getElementById("message").innerHTML = 	"<form style='text-align:center;'"+
			"action='changeinfo.php'>"+	
			"<label for='password'><br><br>New Password:</label>"+ 
			"<input type='password'  id='myInput' name='passwordnew1' style='width:200px; height: 20px;'>"+
			"<input type='checkbox' onclick='showPass()'>Show Password<br>"+
			"<label for='password' style='margin-left:-213px;'>Confirm New Password:</label>"+
			"<input type='password' name='passwordnew2' style='; width:200px; height: 20px;'><br>"+
			"<input type='submit' value='Change password' name='change' style='height:30px; width:150px;'></form>";
			}
			
			else document.getElementById("message").innerHTML = "Work in Progress";
	}
	
	</script>
		<style>
			body{
				background-repeat: no-repeat;
				background-size: 1950px 1000px;				
			}
			
			div 
			{ 
				text-align: center;
			}

			#email {				
			border-radius: 10px;
			border: 2px solid black;
			padding: 15px; 
			margin-top:10px;
			width: 350px;
			height: 1px; 
			}
			
			#password {
			border-radius: 10px;
			border: 2px solid black;
			padding: 15px; 
			width: 350px;
			height: 1px; 
			}
			
			#submission {
			  width: 100%;
			  background-color:#02afe6;;
			  color: white;
			  padding: 5px 10px;
			  margin: 10px 0;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			}
			
			#submission:hover{
			transform: scale(1.2);
			}
			
			#div2
			{ 
				width:250px;
				margin-top: 80px;
				margin-left: 820px;
				text-align: center; 
			}
			
			.button {
				font-size:25px; 
				color:white; 
				background-color:#02afe6; 
				border-radius: 20px; 
				padding: 15px;
				opacity:0.9;
			}
			
			.button:hover{
			transform: scale(1.1);
			}
		</style>
	</head>
	
	<body>
	<div>
		<h1> My Account </h1>
	</div>
	
	<div class="div2">
		<button class="button" type="button" onclick=changeMessage("info")> Account Information </button>
		<button class="button" type="button" onclick=changeMessage("pass")> Change Password </button>
		<button class="button" type="button" onclick=changeMessage("reservation")> View time slot </button>
	</div>
		<br>
	<div>
	<p id="message"> </p>
	</div>
	<script>
		function display()
		{
			var x = document.getElementById("form");
		  if (x.style.display === "none") {
			x.style.display = "block";
		  } else {
			x.style.display = "block";
		  }
		}
	</script>
		<footer style="margin-left: 800px; position:fixed; bottom: 1px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer>
	</body>
</html>