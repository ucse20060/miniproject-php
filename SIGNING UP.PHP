<html lang="en">
<head>
	<!-- <meta charset="UTF-8"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<title>SIGHUP</title>
</head>
<body>
<style>
	body{
		background:URL("connected_dots_colorful_triangles.jpeg");
	}
</style>
<div class="columns">
	<div class="column is-offset-4">
		<h1 class="title has-text-white  pt-4">SDCK BANK</h1>
	</div>
</div>
<form   action="backendsighup.php" method="post">
	<div class="columns">
		<div class="column is-offset-4">
			
			<label for="" class="is-size-5 has-text-primary">Username</label><br>
			<input type="text" class="input is-outlined column is-5 " name="username"><br>
			<label for=""  class="is-size-5 has-text-primary">Emaill</label><br>
			<input type="text" class="input is-outlined  column is-5"name="emaill"><br>
			<label for=""  class="is-size-5 has-text-primary">Make a 4 digit pin </label><br>
			<input type="text" class="input is-outlined   column is-5" name="pin"><br>
			<label for=""  class="is-size-5 has-text-primary">Phone Number </label><br>
			<input type="text" class="input is-outlined     column is-5" name="phone_number"><br>
			<label for="" class="is-size-5 has-text-primary">Birth date </label><br>
			<input type="date" class="input is-outlined        column is-5 "name="birth_date"><br>
			<label for=""  class="is-size-5 has-text-primary">Address</label><br>
			<input type="text" class="input is-outlined      column is-5" name="location"><br>
			<label for="" class="is-size-5 has-text-primary">Password</label><br>
			<input type="password" class="input is-outlined       column is-5" name="password"><br>
				<label for=""  class="is-size-5 has-text-primary">Password Repert</label><br>
			<input type="text" class="input is-outlined    column is-5 " name="password_pass"><br>
			
			<div class="mt-5">
				<button class="button is-primary px-6  mr-3"  name="sub" type="submit">sighup</button>
				<button class="button is-inverted is-outlined px-6">Login </button>
			</div>
		</div>
	</div>
</form>
</body>
</html>