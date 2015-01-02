<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/lib/bootstrap.css" type="text/css" />
		<title></title>
	</head>
	<body class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form class="" role="form" action="insert-data.php" method="post">
				<div class="form-group">
					<label>Latitude</label><input type="text" name="latitude" class="form-control" placeholder="latitude" required>
				</div>
				<div class="form-group">
					<label>Longitude</label><input type="text" name="longitude" class="form-control" placeholder="longitude" required>
				</div>
				<div class="form-group">
					<label>Elevation</label><input type="text" name="elevation" class="form-control" placeholder="elevation" required>
				</div>
				<div class="form-group">
					<label>Title</label><input type="text" name="title" class="form-control" placeholder="title" required>
				</div>
				<div class="form-group">
					<label>Distance</label><input type="text" name="distance" class="form-control" placeholder="distance">
				</div>
				<div class="form-group">
					<label>Has detail page?</label><span class=""><input type="radio" name="datail_page" class="" value="1">Yes</span>
												   <span class=""><input type="radio" name="datail_page" class="" value="0">No</span>
				</div>
				<div class="form-group">
					<label>Web page</label><input type="text" name="webpage" class="form-control" placeholder="web page">
				</div>
				<div class="form-group">
					<input type="submit" name="button_ok" class="form-control btn-primary" value="OK">
				</div>
				</form>
			</div>
		</div>
	</body>
</html>