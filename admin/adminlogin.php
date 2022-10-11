<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css1\style.css">
	<title></title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
	<header>
		<div class="container center-div shadow ">
			<div class="heading text-center mb-5 text-white font-weight-bolder bg-primary">ADMIN LOGIN PAGE</div>
			<div class="container row d-flex flex-row justify-content-center mb-5">
				<div class="admin-form shadow p-2">
				<form action="adminlogincode.php" method="POST">
					<div class="form-group">
					<label>Email ID</label>
					<input type="text" class="form-control"  name="user" id="user" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control" name="password" id="password"  autocomplete="off">
				</div>
				<input type="submit"  name="submit" class="btn btn-danger" value="SUBMIT">
			
		</div>

</div>
</div>
</form>
	</header>

</body>
</html>