<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  	$client = $_POST['client_name'];
	$status = $_POST['status_import'];
	$op = $_POST['orginial_price'];
	$fp = $_POST['final_price'];
	$date = $_POST['date_due'];
	$from = $_POST['from_person'];
	$vehiclemake = $_POST['vehicle_make'];
	$denyreason = $_POST['deny_reason'];
	$paybydate = $_POST['pay_by'];
	$dealership = $_POST['dealership'];
} else {
	header ("Location: index.php");
	die();
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dinoco Invoice Maker V2</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<style>
		body{
			padding: 5%;
			/*background-image: url('https://i.imgur.com/kHtiXYu.jpg');*/
		}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="well">
			<textarea class="form-control" rows="10">
			<?php 
			
			if ($dealership == 'exotics'){
				echo "
				[center][img=https://i.imgur.com/2GgqLdP.png][/center]
				";
			} else {
				echo "
				[center][img=https://i.imgur.com/CZDuXox.png][/center]
				";
			}
			
			if ($status == 'Denied'){
				echo "				
[left]Dear $client
Thank you for your request, your vehicle request for $vehiclemake is now DENIED.

Reason: $denyreason

Thank you, 
$from [/left]";
			} else {
				echo "				
[left]Dear $client
Thank you for your request, your vehicle request for the $vehiclemake has been ACCEPTED.

The original cost of the vehicle: $$op
The cost of the vehicle after import fees: $$fp
The vehicle will arrive on: $date

Please transfer $$fp to 'Dinoco Ltd', you have until $paybydate to pay for this order.

Thank you, 
$from [/left]";				
			
				
			}
			?>
			</textarea>
			</div>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
