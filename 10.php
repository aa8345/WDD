<!DOCTYPE html>
<html>
<head>
    <title>My Simple PHP Webpage</title>
</head>
<body>
    <?php
       
        $name = "John"; 
        $age = 25; 
    ?>
    <h1>Welcome to My Webpage</h1>
    <p>My name is <?php echo $name; ?> and I am <?php echo $age; ?> years old.</p>
    <p>Today's date is <?php echo date("F j, Y"); ?>.</p>
</body>
</html>

/////
<!DOCTYPE html>
<html>
<head>
	<title>PHP Test Page</title>
</head>
<body>

<form action="new.php" method="POST">
Name:   <input type="text" name="name">
        <input type="submit">
</form>

<?php

$name = $_POST['name'];

echo "<h1>Hello, " . $name . "!</h1>";

// Use a conditional statement to print a message based on the time of day
$time = date("H"); // Get the current hour (in 24-hour format)

if ($time < "12") {
    echo "Good morning!";
} elseif ($time < "18") {
    echo "Good afternoon!";
} else {
    echo "Good evening!";
}
?>

</body>
</html>

////
<!DOCTYPE html>
<html>
<head>
	
	<title>Voter Eigibility Checker</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			max-width: 500px;
			margin: 0 auto;
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 5px 15px rgba(0,0,0,0.1);
			margin-top: 50px;
			box-sizing: border-box;
		}
		input[type=number] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #f4f4f4;
			margin-bottom: 10px;
			width: 100%;
			box-sizing: border-box;
			font-size: 16px;
		}
        input[type=text] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #f4f4f4;
			margin-bottom: 10px;
			width: 100%;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type=submit]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Voter Eigibility Checker</h1>
	<form method="post" action="submit.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name"><br><br>
		<label for="age">Age:</label>
		<input type="number" name="age" id="age"><br><br>
		<input type="submit" value="Check Eligibility">
	</form>

   
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Voter Eligibility Results</title>
</head>
<body>
	<h1>Voter Eligibility Results</h1>
	<?php
		$name = $_POST["name"];
		$age = $_POST["age"];

		if ($age >= 18) {
			echo "<p>$name is eligible to vote.</p>";
		} else {
			echo "<p>$name is not eligible to vote.</p>";
		}
	?>
</body>
</html>

