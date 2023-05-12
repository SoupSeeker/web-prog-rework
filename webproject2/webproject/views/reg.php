<?php
// Used this resource to help create this registration: https://codeshack.io/secure-registration-system-php-mysql/
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'users';
// Use data from above to try to connect to mamp mysql server
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Check if the $_POST array has the data set, otherwise exit
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	exit('Please complete the registration form!');
}
// Also check if any of the fields are empty
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	exit('Please complete the registration form');
}
// First we need to check if the username is already taken
if ($stmt = $con->prepare('SELECT id, password FROM paperusers WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();		// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) { 	// Username already exists, prompt user to retry
		echo 'Username exists, please choose another!';
	} else {					// If nothing is found, the username is available
		if ($stmt = $con->prepare('INSERT INTO paperusers (username, password, email) VALUES (?, ?, ?)')) {
			// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
			$stmt->execute();
			echo 'You have successfully registered! You can now login!';
		} else {
			// Something went wrong when trying to prepare, check the naming / fields
			echo 'Something went wrong, please retry!';
		}
	}
	$stmt->close();
} else {
	// Something went wrong when trying to prepare, check the naming / fields
	echo 'Something went wrong, please retry!';
}
$con->close();
header('Location: /webproject/login.html');
?>
