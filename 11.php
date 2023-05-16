<!DOCTYPE html>
<html>
<head>
	
	<title>Verify User Using PHP</title>
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
		input[type=password] {
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
	<h1>Verify User using PHP</h1>
	<form method="post" action="verify.php">
		<label for="name">User Name:</label>
		<input type="text" name="username" id="name"><br><br>
		<label for="pass">Password:</label>
		<input type="password" name="pass" id="pass"><br><br>
		<input type="submit" value="Verify User">
	</form>

   
</body>
</html>


<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "php";

// Connect to MySQL database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the username and password submitted by the user
$user = $_POST['username'];
$pass = $_POST['pass'];

// Prepare SQL statement to verify user
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

// Check if user exists in the database
if (mysqli_num_rows($result) > 0) {
    // User is valid, do something here
    echo "User verified!";
} else {
    // User is invalid, do something here
    echo "Invalid username or password!";
}

// Close the database connection
mysqli_close($conn);
?>
