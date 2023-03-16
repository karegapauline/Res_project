<?php

// Define a list of valid emails and their corresponding roles
$users = [
	"admin@example.com" => "admin",
	"tenant@example.com" => "tenant",
	"maintenance@example.com" => "maintenance"
];

// Get the email and password from the login form
$email = $_POST["email"];
$password = $_POST["password"];

// Check if the email and password are valid
if (array_key_exists($email, $users) && $password == "password") {
	// Redirect the user to the appropriate page based on their role
	$role = $users[$email];
	switch ($role) {
		case "admin":
			header("Location: admin.php");
			break;
		case "tenant":
			header("Location: tenant.php");
			break;
		case "maintenance":
			header("Location: maintenance.php");
			break;
	}
	exit();
} else {
	// Display an error message if the email or password is invalid
	echo "Invalid email or password.";
}

?>
