
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dinoco Invoice Maker V2.1 (Modified by Renny, Original by Unitts)</title>
		
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
				<div class="row">
					<div class="col-md-6">
						<form action="output.php" method="POST">
						<div class="form-group">
						  <label for="dealership">Dealership</label><br>
							 <select name="dealership" class="form-control">
								 <option value="exotics" class="form-control" id="exotics" name="exotics" >Dinoco Exotics</option>
								 <option value="imports" class="form-control" id="imports" name="imports" >Dinoco Imports</option>
							</select> 
						</div>
						<div class="form-group">
						  <label for="client_name">Client Name</label>
						  <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Example: Mr John Doe">
						</div>
						<div class="form-group">
						  <label for="vehicle_make">Vehicle Make and Model</label>
						  <input type="text" class="form-control" id="vehicle_make" name="vehicle_make" placeholder="Example: Ford Focus">
						</div>
						<div class="form-group">
						  <label for="status_import">Import Status</label>
						          <select class="form-control" id="status_import" name="status_import">
								  <option value="Accepted">Accepted</option>
								  <option value="Denied">Denied</option>
								</select>
						</div>
						<div class="form-group">
						  <label for="deny_reason">Deny reason <small>Please use this if you select denied</small></label>
						  <input type="text" class="form-control" id="deny_reason" name="deny_reason" placeholder="i.e car is not from America">
						</div> 
						<div class="form-group">
						  <label for="orginial_price">Orginial Price <small> Do not enter '$' the script does that for you.</small></label>
						  <input type="text" class="form-control" id="orginial_price" name="orginial_price" placeholder="eg 12,000" >
						</div>
						<div class="form-group">
						  <label for="final_price">Final Price <small> Do not enter '$' the script does that for you.</small></label>
						  <input type="text" class="form-control" id="final_price" name="final_price" placeholder="Eg 14,000" >
						</div>
						<div class="form-group">
						  <label for="date_due">Date Due</label>
						  <input type="text" class="form-control" id="date_due" name="date_due" placeholder="DD/MM/YR" >
						</div> 
                                                <div class="form-group">
                                                  <label for="date_due">Pay by</label>
                                                  <input type="text" class="form-control" id="pay_by" name="pay_by" placeholder="DD/MM/YR" >
                                                </div>
						<div class="form-group">
						  <label for="from_person">From</label>
						  <input type="text" class="form-control" id="from_person" name="from_person" placeholder="Example Huw Edwards" required>
						</div> 
						<input class="btn btn-success" type="submit" value="Submit">
						</form>
					</div>
					<div class="col-md-6">
						<center>
						<div class="page-header">
							<img src="https://i.imgur.com/CZDuXox.png" class="img-responsive">
						</div>
						<p>This tool allows you to auto create invoices, it is an upgraded version of my previous tool made for the faction.<br>Modified by Renny yeet.<br> Changes I've made:<br>- Added dropdown for the two dealerships<br>- Fixed some typos</p>
						</center>
					</div>					
				</div>
			</div>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
