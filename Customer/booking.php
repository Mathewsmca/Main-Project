<!DOCTYPE html>
<html>
<head>
	<title>Car Booking System</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		label {
			margin-top: 20px;
			font-weight: bold;
		}
		input[type=text], select, input[type=date], input[type=time] {
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 1px 1px 5px grey;
			width: 300px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			margin: 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		.error { color: red; margin: 10px; }
		.confirmation { color: green; margin: 10px; }
	</style>
</head>
<script>
	function confirm()
	{
		alert('Submitted Successfully');
	}
</script>
<body>
	<h1 style="text-align: center;">Booking Now </h1>
	<?php
	if (isset($error_message)) {
		echo '<div class="error">' . $error_message . '</div>';
	}
	if (isset($confirmation_message)) {
		echo '<div class="confirmation">' . $confirmation_message . '</div>';
	}
	?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div class="container">
			<label for="pickup-location">Pickup Location:</label>
			<input type="text" id="pickup-location" name="pickup-location" placeholder="Enter pickup location">

			<label for="pickup-date">Pickup Date:</label>
			<input type="date" id="pickup-date" name="pickup-date" placeholder="Enter pickup date">

			<label for="pickup-time">Pickup Time:</label>
			<input type="time" id="pickup-time" name="pickup-time" placeholder="Enter pickup time">

			<label for="dropoff-location">Dropoff Location:</label>
			<input type="text" id="dropoff-location" name="dropoff-location" placeholder="Enter dropoff location">

			<label for="dropoff-date">Dropoff Date:</label>
			<input type="date" id="dropoff-date" name="dropoff-date" placeholder="Enter dropoff date">

			<label for="dropoff-time">Dropoff Time:</label>
			<input type="time" id="dropoff-time" name="dropoff-time" placeholder="Enter dropoff time">

			<input type="submit" value="Confirm now" onclick="confirm()">
			
		</div>
	</form>
</body>
</html>
