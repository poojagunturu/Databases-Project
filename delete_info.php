<!--Purpose of page:  	Displays Employee Information Deleted
	Called by: 		  	del_emp_data.php
	Calls:  			del_emp_data.php (upon pressing Back to Form-button)
						manager_homepage.php (upon pressing Back to Homepage-button)
-->
<?php
// Create connection
$conn = mysqli_connect("r01rmmpc7.device.mst.edu", "root", "DB@p3!");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,"test"); 
// create a variable
$ssn="";
if (isset($_POST['ssn'])) {
	$ssn = $_POST['ssn'];
}

mysqli_query($conn,"DELETE FROM Employees WHERE SSN='$ssn';");

if(mysqli_affected_rows($conn) > 0){
	echo("<body style=\"background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;\">");
	echo ("<p>Employee Date Deleted</p>");
	//echo ("<span>You have selected :<b> ".$_POST['attribute']."</b></span>");
	echo("<br><a href = \"manager_homepage.php\"><img src = \"m_bth.png\" alt = \"back to homepage\" vspace = 15><br>");
	echo("<a href = \"delete_emp_data.php\"><img src = \"m_btf.png\" alt = \"back to form\">");
} 
else {
	echo("<body style=\"background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;\">");
	echo ("<h4>Employee Data NOT Deleted</h4>");
	echo ("<p>Error description: </p>" .mysqli_error ($conn));
	echo("<br><a href = \"manager_homepage.php\"><img src = \"m_bth.png\" alt = \"back to homepage\" vspace = 15><br>");
	echo("<a href = \"del_emp_data.php\"><img src = \"m_btf.png\" alt = \"back to form\">");
}
?>







