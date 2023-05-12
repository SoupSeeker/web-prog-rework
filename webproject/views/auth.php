<?php
//Used this resource to get this working: https://codeshack.io/secure-login-system-php-mysql/
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'users';
// Use data from above to try to connect to mamp mysql server
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Check if the $_POST array has the data set, otherwise exit
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}
// Prevent SQLi by preparing statement
if ($stmt = $con->prepare('SELECT id, password FROM paperusers WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);	
	$stmt->execute();
	$stmt->store_result();	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);	// Account exists, now we verify the password.
		$stmt->fetch();
		// Note: we used password_hash in our registration file to store the hashed passwords, so we need to use password_verify
		if (password_verify($_POST['password'], $password)) {
			// Verification success! User has logged-in!
			// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			header('Location: /webproject/main.html');
		} else {	
			echo 'Incorrect username and/or password!';	// Incorrect password
		}
	} else {
		echo 'Incorrect username and/or password!';	// Incorrect username
	}	

	$stmt->close();
}
?>