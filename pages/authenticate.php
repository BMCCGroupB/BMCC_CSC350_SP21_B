<?php 
	session_start();
	include "templates/dbconfig.php";
?>

<link rel="stylesheet" href="templates/styles.css">
<script type="text/javascript" src="templates/script.js"></script>
<html>
	<head>
		<style>
			div{
				text-align:center;
				margin-top:200px;
			}
			
		</style>
	</head>
	
	<body>

		<div>
		<?php

				echo "Successfully connected to Database <br>";
				$username = $_GET['user'];  
				$password = $_GET['password'];  
				$username = stripcslashes($username);  
				$password = stripcslashes($password);  
				$username = mysqli_real_escape_string($connection, $username);  
				$password = mysqli_real_escape_string($connection, $password);  
			  
				$sql = "select *from accounts where Username = '$username' and Password = '$password'";  
				$result = mysqli_query($connection, $sql);  
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
				$count = mysqli_num_rows($result); 
				
			
				
				if($count == 1){ 
					if($row['Admin']== true){
						echo "Admin login Successful!";						
						$_SESSION['username'] = $username;
						$_SESSION['password'] = $password;
						$apt = $row['Apartment'];
						$_SESSION['apt'] = $apt;
						echo "<br>Redirecting you to admin page";
						header("Refresh:5; url=admin.php");
					}
					else {
						echo "Login Successful! ";
						$_SESSION['username']=$username;
						$_SESSION['password']=$password;
						$apt = $row['Apartment'];
						$_SESSION['apt'] = $apt;
						echo "<br><br>Welcome ".$_SESSION['username'];
						
						$sql2 = "select *from tenantinformation where Apartment = '$apt'";
						$result2 = mysqli_query($connection, $sql2);
						$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
						$count2 = mysqli_num_rows($result2);
						if($count2 == 1) 
						{
							if($row2['Name'] == "" && $row2['Phone'] == "" && $row2['Email'] == "")
							{
								echo "<br><br>Please fill out the information needed:
								<form style='color:black'  action='filloutinfo.php'>
								<br>
								  <label id='label' for=name>&nbsp;<strong>Name:</strong></label>
								  <input type='text' id='name' name='name'><br><br>
								  <label id='label' for=name>&nbsp;<strong>Phone Number:</strong></label>
								  <input type='text' id='phone' name='phone'><br><br>		
								  <label id='label' for=name>&nbsp;<strong>Email:</strong></label>
								  <input type='text' id='email' name='email'><br><br>		
								  <input type='submit' value='Confirm' id='submitAll' name='submitAll' style='height:30px; width:100px'>
								</form>";
							}
							
							
							else if($row2['Name'] == "")
							{
								echo "<br><br>Please fill out the information needed:
								<form style='color:black'  action='filloutinfo.php'>
								<br>
								  <label id='label' for=name>&nbsp;<strong>Name:</strong></label>
								  <input type='text' id='name' name='name'><br><br>		
								  <input type='submit' value='Confirm' id='submitName' name='submitName' style='height:30px; width:100px'>
								</form>";
							}
							
							else if($row2['Phone'] == "")
							{
								echo "<br><br>Please fill out the information needed:
								<form style='color:black'  action='filloutinfo.php'>
								<br>
								  <label id='label' for=name>&nbsp;<strong>Phone Number:</strong></label>
								  <input type='text' id='phone' name='phone'><br><br>		
								  <input type='submit' value='Confirm' id='submitPhone' name='submitPhone' style='height:30px; width:100px'>
								</form>";
							}
							
							else if($row2['Email'] == "")
							{
								echo "<br><br>Please fill out the information needed:
								<form style='color:black'  action='filloutinfo.php'>
								<br>
								  <label id='label' for=name>&nbsp;<strong>Email:</strong></label>
								  <input type='text' id='email' name='email'><br><br>		
								  <input type='submit' value='Confirm' id='submitEmail' name='submitEmail' style='height:30px; width:100px'>
								</form>";
							}
							
							
							else 
							{	
								$_SESSION['phone'] = $row2['Phone'];
								$_SESSION['name'] = $row2['Name'];
								echo "<br><br>You will be redirected to the homepage in 5 seconds. <br> If page does not automatically load, click here: <a href='landing.php'>Go to home page</a>";				
								header("Refresh:5; url=landing.php");
							}
						}
					}
				}  
						
				else{
					echo "Failed to log in <br><br><br> <a href='login.php'>Please sign in again";
				}		
		
		?>
		</div>
	</body>
</html>