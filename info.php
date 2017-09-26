<!--Purpose of page:  	Displays New Employee Added page
	Called by: 		  	new_emp_form.php
	Calls:				new_emp_form.php (upon pressing Back to Form-button)
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
$ssn=$position=$zip=$fname=$lname=$startdate=$hrate="";
if (isset($_POST['ssn'])) {
    $ssn = $_POST['ssn'];
}
if (isset($_POST['position'])) {
   $position = $_POST['position'];
}
if (isset($_POST['zip'])) {
    $zip = $_POST['zip'];
}
if (isset($_POST['f_name'])) {
    $fname = $_POST['f_name'];
}
if (isset($_POST['l_name'])) {
    $lname = $_POST['l_name'];
}
if (isset($_POST['start_date'])) {
    $startdate = $_POST['start_date'];
}
if (isset($_POST['h_rate'])) {
    $hrate = $_POST['h_rate'];
}


//Execute the query
mysqli_query($conn,"INSERT INTO Employees VALUES('$ssn','$position','$zip','$fname', '$lname', '$startdate','$hrate')");

if(mysqli_affected_rows($conn) > 0){
	echo("<body style=\"background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;\">");
	echo ("<p>Employee Added!</p>");
	echo("<br><a href = \"manager_homepage.php\"><img src = \"m_bth.png\" alt = \"back to homepage\" vspace = 15><br>");
	echo("<a href = \"new_emp_form.php\"><img src = \"m_btf.png\" alt = \"back to form\">");
} 
else {
	echo("<body style=\"background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;\">");
	echo ("<h4>Employee NOT Added</h4>");
	echo ("<p>Error description: </p>" .mysqli_error ($conn));
	echo("<br><a href = \"manager_homepage.php\"><img src = \"m_bth.png\" alt = \"back to homepage\" vspace = 15><br>");
	echo("<a href = \"new_emp_form.php\"><img src = \"m_btf.png\" alt = \"back to form\">");
}

?>







