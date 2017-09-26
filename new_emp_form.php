<!--Purpose of page:  	Displays New Employee Form
	Called by: 		  	manager_homepage.php
	Calls:				info.php (upon pressing submit-button)
-->

<html>
<title>New Employee Form</title>
<body style="background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;">
			 
<h1 style="font-size:300%;">New Employee Form</h1>

<img src="apples.png" alt="logo">
<h2>Enter data in the following fields:</h2>

<form action="info.php" method='post'>
SSN:<input style="font-size:25px" type="text" name="ssn" maxlength="9"/>
Position: <input style="font-size:25px" type="text" name="position"/>
ZIP: <input style="font-size:25px" type="text" name="zip" maxlength="5"/><br/><br/>
First Name: <input style="font-size:25px" type="text" name="f_name"/>
Last Name: <input style="font-size:25px" type="text" name="l_name"/><br/><br/>
Start Date: <input style="font-size:25px" type="date" name="start_date"/>
Hourly Rate: <input style="font-size:25px" type="number" name="h_rate"/>/hr</br><br/>

<input style="font-size:25px" type="submit" value="Add Employee"/> 
<input style="font-size:25px" type="reset" value="Reset Form"/>
</form>

</body>
</html>