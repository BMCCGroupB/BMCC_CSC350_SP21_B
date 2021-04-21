<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
<?php include "templates/header.php"?>
<html>
	<head>
	<script>
	function changeMessage(c)
	{
		if (c == 'day1') 
			document.getElementById("message").innerHTML = 
			"Monday: 12:00AM - 3:00AM <br><br> Monday: 3:00AM - 6:00AM <br><br> Monday: 6:00AM - 9:00AM <br><br> Monday: 9:00AM - 12:00PM <br><br> Monday: 12:00PM - 3:00PM <br><br> Monday: 3:00PM - 6:00PM <br><br> Monday: 6:00PM - 9:00PM <br><br> Monday: 9:00PM - 12:00AM";				
		
		else if (c == 'day2')
		document.getElementById("message").innerHTML = 
			"Tuesday: 12:00AM - 3:00AM <br><br> Tuesday: 3:00AM - 6:00AM <br><br> Tuesday: 6:00AM - 9:00AM <br><br> Tuesday: 9:00AM - 12:00PM <br><br> Tuesday: 12:00PM - 3:00PM <br><br> Tuesday: 3:00PM - 6:00PM <br><br> Tuesday: 6:00PM - 9:00PM <br><br> Tuesday: 9:00PM - 12:00AM";
		
		else document.getElementById("message").innerHTML = "Work in Progress";
	}
</script>
		<style>

			* {box-sizing: border-box;}
			ul {list-style-type: none;
			}
		
			.month {
			  padding: 30px 25px;
			  width: 40%;
			  background: #02afe6;
			  text-align: center;
			  font-family:"Verdana";
			  color:fff;
			}

			.month ul {
			  margin: 0;
			  padding: 0;
			}

			.month ul li {
			  color: white;
			  font-size: 20px;
			  text-transform: uppercase;
			  letter-spacing: 3px;

			}

			.weekdays {
			  margin: 0;
			  padding: 10px 0;
			  width:40%;
			  background-color: #ddd;
			}

			.weekdays li {
			  display: inline-block;
			  width: 13.6%;
			  color: #666;
			  text-align: center;
			}

			.days {
			  padding: 10px 0;
			  background: #eee;
			  margin: 0;
			  width:40%;
			}

			.days li {
			  list-style-type: none;
			  display: inline-block;
			  width: 13.6%;
			  text-align: center;
			  margin-bottom:5px;
			  font-size:20px;
			  color: #777;
			}

			.days li .current {
			  padding: 5px;
			  background: #02afe6;
			  color: white !important
			}
			
			li a:hover {
		  background-color: #02afe6;
		  }
		  
		li a {
		  display: block;
		  text-align: center;
		  
		  text-decoration: none; 
		}
		
		input:hover{
		transform: scale(1.2);
		}
		
		#form{
			float:right;
			margin-right:500px;
		}
		
		#foot{
			background-color:red;
			color:green;
			border-radius: 0.2rem;
		}
		
		</style>
		
	</head>
	
	<body><br>
<div class="month">      
		<h1  id="month"> </h1>
      <span style="font-size:20px">2021</span>
	<p style="color:white;"; id="demo"></p>
</div>


<div>  <div id="form">
	<form method="post" action="timeslot.php" target="_parent">
	<input type="submit" value="Monday" id="day" style="height:140px; width:100px;">
	<input type="submit" value="Tuesday" id="tue" style="height:140px; width:100px;">
	<input type="submit" value="Wednesday" id="wed" style="height:140px; width:100px;">
	<input type="submit" value="Thursday" id="thur" style="height:140px; width:100px;"> <br> <br>
	<input type="submit" value="Friday" id="fri" style="height:140px; width:100px;">
	<input type="submit" value="Saturday" id="sat" style="height:140px; width:100px;">
	<input type="submit" value="Sunday" id="sun" style="height:140px; width:100px;">
	</form>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">

	<li> <a style="padding: 40px 16px;" onclick = changeMessage("day1")> 1 </a></li> 
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("day2") id="day2">2</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>3</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>4</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>5</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>6</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>7</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>8</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>9</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>10</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>11</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>12</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>13</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>14</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>15</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>16</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>17</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>18</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>19</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>20</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>21</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>22</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>23</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>24</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>25</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>26</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>27</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>28</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>29</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>30</a></li>
	<li> <a style="padding: 40px 16px;" onclick = changeMessage("")>31</a></li>
	
</ul>
		<script>
		//Live date
		var d = new Date();
		document.getElementById("demo").innerHTML = d;
		
		//Live month
		var monthNames = ["January", "February", "March", "April", "May", "June",
		"July", "August", "September", "October", "November", "December"
		];

		document.getElementById("month").innerHTML = monthNames[d.getMonth()];
		

//----------------------------------------------------------------------------------
		function newPage()
		{
			var x = document.getElementById("form");
		  if (x.style.display === "none") {
			x.style.display = "block";
		  } else {
			x.style.display = "block";
		  }
		}

		document.getElementById("day").onclick = function() {newPage()};
		
		// When the user clicks on <div>, open the popup
		</script>
		<footer style="margin-left: 800px; margin-bottom: 1px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer>
		
	</body>
</html>