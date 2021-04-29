<?php
include "header.php";
include "nav.php";
require_once "connect.php";
echo 'Already have an account? <a style="text-decoration:none" href="login.php">Log in</a><br>';

session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
	header("Location: home.php");
}

if (isset($_POST) && !empty($_POST)) {
	if (isset($_POST['username']) && !empty($_POST['username']) &&
		isset($_POST['password']) && !empty($_POST['password'])) {
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
		$hashed_password = password_hash($hashed_password, PASSWORD_DEFAULT);
		
		$stmt = $conn->prepare("INSERT INTO Users(username, password) VALUES(?, ?)");
		$stmt->bind_param("ss", $username, $hashed_password);
		if ($stmt->execute()) {
			$_SESSION['logged_in'] = true;
			header("Location: home.php");
		} else {
			var_dump($conn->error);
		}
	} else {
		print_r('Error: Must enter username and password');
	}
}
// var_dump($_SESSION);

?>


<?php if (!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == false): ?>
	<h1>Sign Up</h1>
	<form class="signup" method="POST">
		
		<input placeholder="Username" type="text" name="username" />
		<br><br>
		<input placeholder="Password" type="password" name="password" />
		<br><br>
		<input class="button button1" type="submit" value="Sign Up" />
	</form>
	<?php else: ?>
		<h1>You're already logged in</h1>
		
		<?php endif; include "footer.php";?>
		