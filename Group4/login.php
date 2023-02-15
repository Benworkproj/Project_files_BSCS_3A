<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
			$password = ($_POST["password"]);
			$cpassword = ($_POST["cpassword"]);
			
			if (strlen($_POST["password"]) <= 8) {
				$passwordErr = "Your Password Must Contain At Least 8 Characters!";
			}
			elseif(!preg_match("#[0-9]+#",$password)) {
				$passwordErr = "Your Password Must Contain At Least 1 Number!";
			}
			elseif(!preg_match("#[A-Z]+#",$password)) {
				$passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
			}
			elseif(!preg_match("#[a-z]+#",$password)) {
				$passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
			} else {
				$cpasswordErr = "Your Password Must Contain At Least 1 Special Character!";
			}
		}

		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the username';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['admin'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	
	header('location: index.php');

?>