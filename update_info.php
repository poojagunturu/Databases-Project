<!--Purpose of page:  	Displays Employee Information Updated
	Called by: 		  	update_emp_info.php
	Calls:  			update_emp_info.php (upon pressing Back to Form-button)
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
$ssn=$position=$zip=$f_name=$l_name=$start_date=$h_rate=$value="";
if (isset($_POST['ssn'])) {
	$ssn = $_POST['ssn'];
}

if ($_POST['attribute']=="position") {
	if(isset($_POST['value'])){
		$position = $_POST['value'];
		mysqli_query($conn,"UPDATE Employees SET Position='$position' WHERE SSN='$ssn';");
	}
}
else if ($_POST['attribute']=="zip") {
	if(isset($_POST['value'])){
		$zip = $_POST['value'];
		mysqli_query($conn,"UPDATE Employees SET ZIP='$zip' WHERE SSN='$ssn';");
	}
}
else if ($_POST['attribute']=="f_name") {
	if(isset($_POST['value'])){
		$f_name = $_POST['value'];
		mysqli_query($conn,"UPDATE Employees SET FName='$f_name' WHERE SSN='$ssn';");
	}
}
else if ($_POST['attribute']=="l_name") {
	if(isset($_POST['value'])){
		$l_name = $_POST['value'];
		mysqli_query($conn,"UPDATE Employees SET LName='$l_name' WHERE SSN='$ssn';");
	}
}
else if ($_POST['attribute']=="start_date") {
	if(isset($_POST['value'])){
		$start_date = $_POST['value'];
		mysqli_query($conn,"UPDATE Employees SET Start_date='$start_date' WHERE SSN='$ssn';");
	}
}
else if($_POST['attribute']=="h_rate") {
	if(isset($_POST['value'])){
		$h_rate = $_POST['value'];
		mysqli_query($conn,"UPDATE Employees SET Hourly_Rate='$h_rate' WHERE SSN='$ssn';");
	}
}

if(mysqli_affected_rows($conn) > 0){
	echo("<body style=\"background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;\">");
	echo ("<p>Employee Date Updated!</p>");
	//echo ("<span>You have selected :<b> ".$_POST['attribute']."</b></span>");
	echo("<br><a href = \"manager_homepage.php\"><img src = \"m_bth.png\" alt = \"back to homepage\" vspace = 15><br>");
	echo("<a href = \"update_emp_info.php\"><img src = \"m_btf.png\" alt = \"back to form\">");
} 
else {
	echo("<body style=\"background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;\">");
	echo ("<h4>Employee Data NOT Updated</h4>");
	echo ("<p>Error description: </p>" .mysqli_error ($conn));
	echo("<br><a href = \"manager_homepage.php\"><img src = \"m_bth.png\" alt = \"back to homepage\" vspace = 15><br>");
	echo("<a href = \"update_emp_info.php\"><img src = \"m_btf.png\" alt = \"back to form\">");
}
?>







