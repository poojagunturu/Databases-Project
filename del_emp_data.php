<!--Purpose of page:  	Displays Delete Employee Information
	Called by: 		  	manager_homepage.php
	Calls:  			delete_info.php (upon pressing Submit-button)
-->

<html>
<title>Delete Employee Data</title>
<body style="background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;">
			 
<h1 style="font-size:300%;">Delete Employee Form</h1>

<img src="apples.png" alt="logo">
<h2>Enter the SSN of employee whose data is to be deleted:</h2>

<form action="delete_info.php" method='post'>
SSN:<input style="font-size:25px" type="text" name="ssn" maxlength="9"/><br><br>

<input style="font-size:25px" type="submit" value="Delete Employee"/> 
<br><a href = "manager_homepage.php"><img src = "m_bth.png" alt = "back to homepage" vspace = 15><br>
</form>

</body>
</html>