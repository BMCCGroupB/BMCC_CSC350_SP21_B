<?php
	$connection = mysqli_connect("localhost", "root", "", "mydb");	//function call to make a connection to the DBMS
	if(!$connection)
		die("Error connecting to DBMS" . mysql_connect_error());
			else
			{
				echo "Successfully connected to Database <br>";
				
				$email = $_GET['email'];
				$password = $_GET['password'];
				$sql = "select * from account";
				$result = mysqli_query($connection, $sql) or die("Error ".mysql_error());
				$row = mysqli_fetch_array($result);
				if($row['email'] == $email && $row['password'] == $password){
					echo "Login Successful! ";
					$_SESSION['username']=$email;
					echo "<br>Welcome ".$_SESSION['username'];
					echo "<br><a href='landing.php'>Go to home page</a>";
					echo "<br><a href='accinfo.php'>Edit your account info</a>";
				} 
				else{
					echo "Failed to log in <br><br><br> <a href='login.php'>Please sign in again";
				}

			}
		?>