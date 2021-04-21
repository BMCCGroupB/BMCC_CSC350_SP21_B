<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
<?php include "templates/header.php"?>
<html>
	<head>
		<style>

			
		</style>
		<script>
		function checkForm(form)
		  {
		 
			if(!form.terms.checked) {
			  alert("You must accept to proceed");
			  form.terms.focus();
			  return false;
			}
			return true;
		  }
		</script>
	</head>
	
	<body><br>

		<h1 style="color:#02afe6; text-align:center;">Reserve a spot</h1>
		<br>
	
	<form style="text-align:center;" action="confirmation.php" method="post" onsubmit="return checkForm(this);">
	<label  for="day";><strong>Confirm Day:</strong></label><br>	
	<select name="day" id="day">
    <option value="mon">Monday</option>
    <option value="tue">Tuesday</option>
    <option value="wed">Wednesday</option>
    <option value="thur">Thursday</option>
	<option value="fri">Friday</option>
	<option value="sat">Saturday</option>
    <option value="sun">Sunday</option>
  </select>
	<br><br>
	<label  for="name"><strong>Name:</strong></label><br>
	<input  type="text" id="name" name="name"><br><br>
	<label  for="apt"><strong>Apartment Number:</strong></label><br>
	<input  type="text" id="apt" name="apt"><br><br>
	<label  for="phone"><strong>Phone Number:</strong></label><br>
	<input  type="phone" id="phone" name="phone"><br><br>
	
  <label for="time"><strong>Choose an available time:</strong></label> <br><br>
  <select name="time" id="time">
    <option value="12AM">12:00 AM - 3:00 AM</option>
    <option value="3AM">3:00 AM - 6:00 AM</option>
    <option value="6AM" id="2a">6:00 AM - 9:00 AM</option>
    <option value="9AM" id="time3">9:00 AM - 12:00 PM</option>
	<option value="12PM" id="time4">12:00 PM - 3:00 PM</option>
	<option value="3PM" id="time5">3:00 PM - 6:00 PM</option>
    <option value="6PM" id="time6">6:00 PM - 9:00 PM</option>
    <option value="9PM" id="time7">9:00 PM - 12:00 PM</option>
  </select>
  <br><br>
  	<label for="message"> <strong>Personal Comments:</strong></label> <br>  
	<textarea id="msg" name="msg" rows="10" cols="50"> </textarea> <br><br>
  <p><input type="checkbox" name="terms"> By checking this I understand that I must wear a mask<br>and maintain six feet apart from others at all times.</p>
  <input type="submit" id="submit" name="submit" value="Submit">
	</form>
	
		<footer style="margin-left: 800px; margin-bottom: 1px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer>	
		
	</body>
</html>