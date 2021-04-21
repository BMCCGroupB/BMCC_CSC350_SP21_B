<?php

$connection = mysqli_connect("localhost", "root", "", "mydb");	//function call to make a connection to the DBMS
	if(!$connection)
	{
		die("Error connecting to DBMS" . mysql_connect_error());
		
	}
	else
	{
        echo "Database connection established<br>";
		date_default_timezone_set("America/New_York");
		$timestart1 = "12AM";
		$timeend1 = "3AM";
		$date0 = date("m-d-y");
		$dateplus7 = date("M d, Y", strtotime('+7 days'));
		echo $date0 . "<br>";
		echo $dateplus7 . "<br>";
		$timenow = date("g:ia");
		$timenow2 = date("g:ia", strtotime('+3 hours'));
//		echo $timenow . "<br>";
//		echo $timenow2;
//		echo date("g:ia");
		

		

				  		
	}	
	//create table timeslots(start datetime, end datetime, email varchar(40), name varchar(40), occupied boolean, apt int)
	
	
?>

<?php

		if($connection){
		$sql = "insert into timeslots(date, start, end, email, name, occupied, apt) values ($date0, $timestart1, $timeend1, 'test@email.com', 'Justin', false, 1)" ;
		$result = mysqli_query($connection, $sql);
		$result_run = mysqli_query($connection, $sql);
		echo "Successful";
		}
		else echo "Error";
?>