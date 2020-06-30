<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>
	<title>Chart</title>

</head>

<body>
	<div id="total_active"></div>
	<br>
	<div id="total_confirmed"></div>
	<br>
	<div id="total_recovered"></div>
	<br>
	<div id="total_death"></div>
	<br>

	<div id="Dtotal_active"></div>
	<br>
	<div id="Dtotal_confirmed"></div>
	<br>
	<div id="Dtotal_recovered"></div>
	<br>
	<div id="Dtotal_death"></div>
	<br>

	


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
	$(document).ready(function () {
		var url = "https://api.covid19india.org/states_daily.json"

		$.getJSON(url, function (data) {


			var Ttotal_recovered, Ttotal_death, Ttotal_confirmed
			var TDtotal_active, TDtotal_recovered, TDtotal_death, TDtotal_confirmed




			var dt = []
			var status = []
			var dl = []


			$.each(data.states_daily, function (id, obj) {
				if (obj.status == "Confirmed") {
					dt.push(obj.date)
					//status.push(obj.status)
					dl.push(obj.dl)
				}

			})
			last_date_id = dt.length
			last_date = data.states_daily[last_date_id - 1]

			///get today date

			var today = new Date();
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
			var yyyy = today.getFullYear();

			todayDate = dd + '/' + mm + '/' + yyyy;

			//console.log(data)

			// total_active = data.statewise[0].active
			// total_confirmed = data.statewise[0].confirmed
			// total_recovered = data.statewise[0].recovered
			// total_death = data.statewise[0].deaths

			// Dtotal_active = data.statewise[3].active
			// Dtotal_confirmed = data.statewise[3].confirmed
			// Dtotal_recovered = data.statewise[3].recovered
			// Dtotal_death = data.statewise[3].deaths

			// $("#total_active").append(total_active)
			// $("#total_confirmed").append(total_confirmed)
			// $("#total_recovered").append(total_recovered)
			// $("#total_death").append(total_death)

			// $("#Dtotal_active").append(Dtotal_active)
			// $("#Dtotal_confirmed").append(Dtotal_confirmed)
			// $("#Dtotal_recovered").append(Dtotal_recovered)
			// $("#Dtotal_death").append(Dtotal_death)

			var myChart2 = document.getElementById("myChart3").getContext('2d')
			var chart = new Chart(myChart2, {
				type: 'line',
				data: {
					labels: dt,
					datasets: [
						{
							label: "Confirmed Cases",
							data: dl,
							backgroundColor: "#f1c40f",
							minBarLength: 100,
						}
					]
				},
				options: {}
			})

		})
	})
</script>

</html>