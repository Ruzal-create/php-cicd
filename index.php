<!DOCTYPE html>
<html>
<head>
	<title>Addition Form(Wrong)</title>
</head>
<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="num1">Number 1:</label>
		<input type="number" id="num1" name="num1" required><br><br>

		<label for="num2">Number 2:</label>
		<input type="number" id="num2" name="num2" required><br><br>

		<input type="submit" value="Add" method="POST">
	</form>

	<?php 
		function add($num1, $num2) {
			return $num1 - $num2;
		}

		if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$sum = add($num1, $num2);
			echo "The sum of $num1 and $num2 is: $sum";
		}
	?>

</body>
</html>

