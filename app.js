$(document).ready(function(){
	$.ajax({
		url: "http://localhost/chartjs/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var cust_id = [];
			var visits = [];

			for(var i in data) {
				cust_id.push("Customer ID: " + data[i].CID);
				visits.push(data[i].No_of_Visits);
			}

			var chartdata = {
				labels: cust_id,
				datasets : [
					{
						label: 'No of Visits',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: visits
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});