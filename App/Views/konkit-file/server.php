<?php 
	session_start();


	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";


	$db = mysqli_connect('localhost', 'root', '', 'KonKit');

	// REGISTER Freelancer
	if (isset($_POST['reg_freelancer'])) {

		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


		if (empty($username)) { array_push($errors, "Username dibutuhkan!"); }
		if (empty($email)) { array_push($errors, "Email dibutuhkan!"); }
		if (empty($password_1)) { array_push($errors, "Password dibutuhkan!"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Kedua Password tidak sama");
		}


		if (count($errors) == 0) {
			$password = md5($password_1);
			$query = "INSERT INTO freelancer (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Register Berhasil";
			header('location: Login-Page-freelancer.php');
		}

	}



	// LOGIN Freelancer
	if (isset($_POST['login_freelancer'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username dibutuhkan!");
		}
		if (empty($password)) {
			array_push($errors, "Password dibutuhkan!");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM freelancer WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Anda sudah masuk";
				header('location: Dashboard.php');
			}else {
				array_push($errors, "password/username salah");
			}
		}
	}

?>