<?php 
	session_start();
?>

<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
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
			$connection = mysqli_connect("localhost", "root", "", "mydb");	//function call to make a connection to the DBMS
			if(!$connection)
				die("Error connecting to DBMS" . mysql_connect_error());
			else
			{
				echo "Successfully connected to Database <br>";
				$username = $_GET['email'];  
				$password = $_GET['password'];  
				$username = stripcslashes($username);  
				$password = stripcslashes($password);  
				$username = mysqli_real_escape_string($connection, $username);  
				$password = mysqli_real_escape_string($connection, $password);  
			  
				$sql = "select *from account where email = '$username' and password = '$password'";  
				$result = mysqli_query($connection, $sql);  
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
				$count = mysqli_num_rows($result);  
				  
				if($count == 1){  
					echo "Login Successful! ";
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					echo "<br><br>Welcome ".$_SESSION['username'];
					echo "<br><br>You will be redirected to the homepage in 5 seconds. <br> If page does not automatically load, click here: <a href='landing.php'>Go to home page</a>";
					$apt = $row['apt'];
					$_SESSION['apt'] = $apt;
					header("Refresh:5; url=landing.php");
				}  
						
				else {
					echo "Failed to log in <br><br><br> <a href='login.php'>Please sign in again";
					}		
		}
		?>
		</div>
	</body>
</html>

<!--
				$email = $_GET['email'];
				$password = $_GET['password'];
				$sql = "select * from account";
				$result = mysqli_query($connection, $sql) or die("Error ".mysql_error());
				$row = mysqli_fetch_array($result);
				$apt = $row['apt'];
				if($row['email'] == $email && $row['password'] == $password){
					echo "Login Successful! ";
					$_SESSION['username']=$email;
					$_SESSION['password']=$password;
					
					echo "<br>Welcome ".$_SESSION['username'];
					echo "<br><a href='landing.php'>Go to home page</a>";
					echo "<br><a href='accinfo.php'>Edit your account info</a>";
					echo mysqli_num_fields($result);
				} 
				-->