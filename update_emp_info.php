<!--Purpose of page:  	Displays Update Employee Information
	Called by: 		  	manager_homepage.php
	Calls:				update_info.php (upon pressing the submit-button)
-->

<html>
<title>Update Employee Info</title>
<body style="background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;">
			 
<h1 style="font-size:300%;">Update Employee Information</h1>

<img src="apples.png" alt="logo">
<h2>Enter data of the employee whose information needs to updated:</h2>

<form action="update_info.php" method='post'>
SSN:<input style="font-size:25px" type="text" name="ssn" maxlength="9"/><br>
<p>Choose attribute to be updated:</p>
<input type="radio" name="attribute" value="position" checked> Position<br>
<input type="radio" name="attribute" value="zip"> ZIP<br>
<input type="radio" name="attribute" value="f_name"> First Name<br>
<input type="radio" name="attribute" value="l_name"> Last Name<br>
<input type="radio" name="attribute" value="start_date"> Start Date<br>
<input type="radio" name="attribute" value="h_rate"> Hourly Rate<br>
<p>Enter new data for the attribute selected:</p>
<input style="font-size:25px" type="text" name="value"/><br><br>
<input style="font-size:25px" type="submit">  

</form>

</body>
</html>
