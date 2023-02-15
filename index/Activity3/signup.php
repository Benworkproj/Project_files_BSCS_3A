<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: red;
		border: none;
		margin-left: 30%;
	}

	#box{

		
		background-color: white;
		margin-top: 100px;
		margin-left: 40%;
  		width: 300px;
  		padding: 10px;
  		border: 3px solid black;
		
	}
	a{
		margin-left: 30%;
	}
	input[type=text] {

		width: 100%;

	}
		input[type=password] {

		width: 100%;
	}

	body{
		background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
	}


	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 50px;margin: 10px;color: red; margin-left: 24%; margin-bottom: 10px; ; font-weight: bold;">Sign Up</div>
			<label for="username">Username</label><br>
			<input id="username" type="text" name="user_name" required autocomplete="off"><br><br>
			<label for="password" required autocomplete="off">Password</label><br>
			<input id="password" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>