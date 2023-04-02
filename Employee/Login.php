<!DOCTYPE html>
<html>
<head>
	<title>Employee Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="Validate.js"></script>
</head>
<body>

<div class="container mt-4 shadow p-5">
		<h2 class="text-center">Employee Login</h2>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form action="Users.php" method="POST">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
					</div>
					<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
					<p id="error-message" class="text-danger mt-2"></p>
				</form>
			</div>
		</div>
	</div>

 

</body>
</html>
