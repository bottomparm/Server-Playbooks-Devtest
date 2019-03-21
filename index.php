<!DOCTYPE html>
<html>
<head>
    <title>Dylan's PHP App</title>
    <link rel="stylesheet" type="text/css" href="/public/style.css">
</head>
<body>
	<form method="post" action="server.php" >
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstName" value="">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastName" value="">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
</html>