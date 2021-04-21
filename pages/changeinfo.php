<html>
	<head>
		<style>
			div{
				text-align:center;
			}
		</style>
	</head>
	<body>
	<div>
<?php 
include "templates/header.php";
include "dbconfig.php";
?>

	<?php 
		$password1 = $_GET['passwordnew1'];
		$password2 = $_GET['passwordnew2'];
		$user = $_SESSION['username'];
		if(isset($_REQUEST['change'])){	
			if(empty($password1) || empty($password2))					
			{
				echo "Please type a password";
			}
			else if($password1 == $password2)
			{
				$querychange= "UPDATE account set password='$password1' where email='$user'";
				$querychange_run = mysqli_query($connection, $querychange);
				$_SESSION['password']=$password1;
				die("Successfully changed");
				
			}
			else echo "Passwords did not match";
		}
		else echo "Couldn't compare";
	?>
	</div>
			<footer style="margin-left: 800px; margin-top: 650px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer>
	</body>
</html>