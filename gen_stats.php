<!--Purpose of page:  	Displays Generate Statistics page
	Called by: 		  	manager_homepage.php
	Calls:  			bargraph.html (upon pressing an option from the choose an option dropdown menu)
-->

<!DOCTYPE html>
<html>
<head>
<title>Generate Statistics</title>
</head>
<body style="background-color:#c5d8f7;
			 font-family:Trebuchet MS;
			 text-align:center;
			 font-size:25px;">
			 
<h1 style="font-size:300%;">Generate Statistics</h1>

<img src="apples.png" alt="logo">

<style>
.dropbtn {
    background-color: #FFFFFF;
    color: black;
    padding: 10px;
    font-size: 25px;
	font-family:Trebuchet MS;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #000000;
	color: white;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
</head>
<body>


<p>Choose what you want to see statistics on:</p>

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">  Choose an option  </button>
  <div id="myDropdown" class="dropdown-content">
    <a href="../chartjs/bargraph.html">No. of visits in the month of May</a>
  </div>
</div>
<br><a href = "manager_homepage.php"><img src = "m_bth.png" alt = "back to homepage" vspace = 15><br>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
