<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
			
		
			<h1>Profile Page</h1> <br><hr><br>
			
				<p style="font-weight: bold; font-size: 25px; text-decoration: underline;">Your account details are below :</p><br>
				<table style="font-size: 20px;">
					<tr>
						<td style="text-decoration: underline;">Username</td>
						<td>&nbsp:&nbsp<?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td style="text-decoration: underline;">Password</td>
						<td>&nbsp:&nbsp<?=$password?></td>
					</tr>
					<tr>
						<td style="text-decoration: underline;">Email-ID</td>
						<td>&nbsp:&nbsp<?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>