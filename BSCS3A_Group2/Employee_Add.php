<?php
	require 'config.php';
	if(!empty($_SESSION["id"])){
	  $id = $_SESSION["id"];
	  $result = mysqli_query($conn, "SELECT * FROM users WHERE User_ID = $id");
	  $row = mysqli_fetch_assoc($result);
	}
	else{
	  header("Location: login.php");
	}
	
	if(isset($_POST["submit"])){
		$FName = $_POST["FName"];
		$MName = $_POST["MName"];
		$LName = $_POST["LName"];
		$Gender = $_POST["Gender"];
		$Birthday = $_POST["Birthday"];
		$Nationality = $_POST["Nationality"];
		$Civil =  $_POST["Civil"];
		$Department =  $_POST["Department"];
		$Employee_Status =  $_POST["Employee_Status"];	
		$query = "INSERT INTO employee (Emp_FName, Emp_MName, Emp_LName, Emp_Gender, Birthday, Nationality, Civil_Status, Department, Emp_Status) values('$FName','$MName','$LName','$Gender','$Birthday','$Nationality','$Civil','$Department','$Employee_Status')";
		mysqli_query($conn, $query);
		echo "<script> alert('Registration Successful'); </script>";
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
    <link rel="stylesheet" href="Employee_Add.css">
    <title>Starbucks</title>
</head>
<body>
    <header>
        <div class="nav">
            <a href="Starbs.php"><img src="logo.png"></a>
            <a href="Starbs.php" class="logo">Starbucks</a>
            <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                <a href="#" class="active" style="color: black;">Add Employee</a>
				<a href="Employee_Table.php" >View Employee List</a>
                <a href="Payroll.php" >Payroll</a>
                <a href="LogOut.php">Log out</a>
            </div>
            </div>
        </div>
    </header>
        <div class="center">
            <h1>Add Employee</h1>
            <form class="" action="" method="post" autocomplete="off">
                <div class="txt_field">
                    <input type="text" name="FName" id="FName" required>
                    <label>First Name:</label>
                </div>
				<div class="txt_field">
                    <input type="text" name="MName" id="MName" required>
                    <label>Middle Name:</label>
                </div>
				<div class="txt_field">
                    <input type="text" name="LName" id="LName" required>
                    <label>Last Name:</label>
                </div>
				<label for="status">Gender:</label><br>
                <div class = "select">
                <select name = "Gender" id = "Gender" required>
                    <option value =  "Male">Male</option>
                    <option value =  "Female">Female</option>
                    <option value =  "Others">Others</option>
                </select>
                </div>
				<br><br>
				<label for="status">Birthday:</label>
                <div class="txt_field" style="margin-top:-7px ;">
                    <input type="date" name="Birthday" id="Birthday" required>
                </div>
                <div class="txt_field">
                    <input type="text" name="Nationality" id="Nationality" required>
                    <label>Nationality:</label>
                </div>
				<label for="status">Civil Status:</label><br>
				<div class = "select">
                <select name = "Civil" id = "Civil" required>
                    <option value =  "Single">Single</option>
                    <option value =  "Married">Married</option>
                    <option value =  "Divorced">Divorced</option>
					<option value =  "Separated">Separated</option>
					<option value =  "Widowed">Widowed</option>
                </select>
				</div>
                <div class="txt_field">
                    <input type="text" name="Department" id="Department" required>
                    <label>Department:</label>
                </div>
				<div class="txt_field">
                    <input type="text" name="Employee_Status" id="Employee_Status" required>
                    <label>Employee Status:</label>
                </div>
                <input type="submit" name="submit" value="Add Employee" onclick="getInfo()"  onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'">
                <br>
                <br>
            </form>
			<br><br><br>
			</div>

</body>
</html>