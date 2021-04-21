<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
<?php include "templates/header.php"?>
<html>
 <head>
  <title>PHP Test</title>
  <style>
	div{
		border-radius: 15px;
		border:solid 1px black;
		margin: 100px auto auto auto; 
		width:500px;
		height:600px;
		text-align: center; 
		background-color:#E7EBE0FF;
		padding: 1px;
		color:black;
	}
	
	#div2{
		border-radius: 15px;
		border:none;
		width:280px;
		height:100px;
		text-align: center; 
		background-color:transparent;
		padding: 1px;		
	}
	
	#div2:hover{
		transform: scale(1.2);
	}
	
	.button{
		background-color:red; 
		color:white; 
		font-size:16;
		border-radius: 30px; 
		padding: 14px; 
		height:70px; 
		width:200px;
	}
  </style>
 </head>
 <body>
 
	<div>
	
	<h1>Confirmed!</h1>

	 <?php 
	 if(isset($_REQUEST['submit'])) {
	  $name = $_POST['name'];
	  $time = $_POST['time'];
	  $day = $_POST['day'];
	  $apt = $_POST['apt'];
	  $msg = $_POST['msg'];
	  $day = $_POST['day'];
	  switch($day){

		case 'mon':
			echo "Reservation for Monday<br>";
			break;
		case 'tue':
			echo "Reservation for Tuesdayy<br>";
			break;
		case 'wed':
			echo "Reservation for Wednesday<br>";
			break;
		case 'thur':
			echo "Reservation for Thursday<br>";
			break;
		case 'fri':
			echo "Reservation for Friday<br>";
			break;
		case 'sat':
			echo "Reservation for Saturday<br>";
			break;
		case 'sun':
			echo "Reservation for Sunday<br>";
			break;
		}
		
	  echo "<br>Name: ".$name."<br><br>"."Apartment: ".$apt."<br><br>Personal Comments: <br>".$msg."<br><br>";
	  
		switch($time){

		case '12AM':
			echo "Your time slot is reserved from <br> 12:00 AM - 3:00 AM";
			break;
		case '3AM':
			echo "Your time slot is reserved from <br> 3:00 AM - 6:00 AM";
			break;
		case '6AM':
			echo "Your time slot is reserved from <br> 6:00 AM - 9:00 AM";
			break;
		case '9AM':
			echo "Your time slot is reserved from <br> 9:00 AM - 12:00 PM";
			break;
		case '12PM':
			echo "Your time slot is reserved from <br> 12:00 PM - 3:00 PM";
			break;
		case '3PM':
			echo "Your time slot is reserved from <br> 3:00 PM - 6:00 PM";
			break;
		case '6PM':
			echo "Your time slot is reserved from <br> <br> 6:00 PM - 9:00 PM";
			break;
		case '9PM':
			echo "Your time slot is reserved from <br> 9:00 PM - 12:00 AM";
			break;
		}
	 }
	 ?> 
	 	<div id="div2">
		<button type="button" class="button" onclick="location.href='Reserve.php'">
		Return</button>
		</div>
	</div>

			<footer style="margin-left: 800px; margin-bottom: 1px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer>
 </body>
</html>