<?php
	require'config.php';
	if(!empty($_SESSION["id"])){
	  header("Location: try.php");
	}
	if(isset($_POST["submit"])){
		$Name = $_POST["Name"];
		$Username = $_POST["Username"];
		$Password = $_POST["Password"];
		$RePassword = $_POST["RePassword"];
		$emp =  $_POST["select"];
		$Key =  $_POST["Key"];
		$duplicate = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$Username'");
		
		$upper = preg_match('@[A-Z]@', $Password);
		$lower = preg_match('@[a-z]@', $Password);
		$num    = preg_match('@[0-9]@', $Password);
		$special = preg_match('@[^\w]@', $Password);

		
		if(mysqli_num_rows($duplicate)>0){
			echo "<script> alert('Username already exist') </script>";
		}
		else{
			if(!$upper || !$lower || !$num || !$special || strlen($Password) < 8) {
				echo "<script> alert('Password should have a minimum of 8 Characters, have at least 1 Special characters, have at least 1 Number, and have at least 1 Letter')</script>";
			}
			else{
				if($Password == $RePassword){
				  if ($emp == "Admin" || $emp == "Employee"){
						if($Key == "adetech1999"){
							 $query = "INSERT INTO users (Name, Username, Password, user_type) values('$Name','$Username','$Password', '$emp')";
							  mysqli_query($conn, $query);
							  echo "<script> alert('Registration Successful'); </script>";
						}
						else{
							echo "<script> alert('Wrong Key! You Do Not Have The Permission To Sign Up As An Admin Or An Employee'); </script>";
						}
				  }
				  else if ($emp == "Customer"){
						$query = "INSERT INTO users (Name, Username, Password, user_type) values('$Name','$Username','$Password', '$emp')";
						mysqli_query($conn, $query);
						echo "<script> alert('Registration Successful'); </script>";
				  }
				  else{
					  echo "<script> alert('Select A User Status'); </script>";
				  }
				}
				else{
				  echo "<script> alert('Password Does Not Match'); </script>";
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html lang = "en" dir="ltr">
<head>
<style>
	::-webkit-scrollbar {
	  width: 10px;
	}
	::-webkit-scrollbar-track {
	  background: #f1f1f1; 
	}
	::-webkit-scrollbar-thumb {
	  background: #007042; 
	}
	::-webkit-scrollbar-thumb:hover {
	  background: #eac784;
	}
	</style>
    <meta charset="UTF-8">
    <link rel="icon" href= "StarbsL.png" type="image">
    <link rel="stylesheet" href="SignUp.css">
    <title>Starbucks</title>
</head>
<body>
    <header>
        <nav class="nav">
            <a href="LogIn.html"><img src="logo.png"></a>
            <a href="LogIn.html" class="logo">Starbucks</a>
            </nav>
        </header>
        <div class="center">
            <h1>Sign Up</h1>
            <form class="" action="" method="post" autocomplete="off">
                <div class="txt_field">
                    <input type="text" name="Name" id="Name" required>
                    <label>Name:</label>
                </div>
                <div class="txt_field">
                    <input type="text" name="Username" id="Username" required>
                    <label>Username:</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="Password" id="Password" required>
                    <label>Password:</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="RePassword" id="RePassword" required>
                    <label>Re-Enter Password:</label>
                </div>
				<label for="status">Choose your Status</label><br><br>
                <div class = "select">
                <select name = "select" id = "select">
                    <option value =  "Admin">Admin</option>
                    <option value =  "Employee">Employee</option>
                    <option value =  "Customer">Customer</option>
                </select>
                </div>
				<div class="txt_field">
                    <input type="password" name="Key" id="Key" required>
                    <label>Enter Verification Key:</label>
                </div>
				<p>Note: For Customers, Enter Any Character</p>
                <br>
                <input type="submit" name="submit" value="Sign Up" onclick="getInfo()"  onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'">
                <br>
                <br>
				<div class="login_link"><a href = "LogIn.php">Log In</a></div>
            </form>
			<br><br><br>
			</div>

</body>
</html>