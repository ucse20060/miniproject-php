<?php session_start();
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=`, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<title>Deposit</title>
</head>
<body>
<style>
      body{
          background:URL("connected_dots_colorful_triangles.jpeg");
      }
	.tops{
			margin-top: 100px;
		}
</style>
<div class="columns">
	<div class="column is-offset-4">
		<h1 class="title has-text-white  pt-4">SDCK BANK </h1>
	</div>
</div>

<form action="backendairtime.php" method="post">
	<div class="columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-5 has-text-white">Account Balance</label><br>
		<input type="text"class="input is-outlined column is-5 " readonly=""placeholder="<?php echo $_SESSION['totalamount']"><br>

			<label for=""  class="is-size-5 has-text-white">Phone Number  </label><br>
			<input type="text" class="input is-outlined  column is-5" name="phone_number"><br>



			<label for=""  class="is-size-5 has-text-white">Amount to Buy  </label><br>
			<input type="text" class="input is-outlined   column is-5" name="amount"><br>	
			<div class="mt-5">
			
				<button class="button is-primary is-outlined px-6 mb-5" name="buy" type="submit">Buy Airtime </button>
			</div>



		</div>
	</div>
</form>
</body>
</html>