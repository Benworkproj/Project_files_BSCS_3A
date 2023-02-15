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
	$query = "SELECT * FROM employee ORDER BY Emp_ID";
	$result = mysqli_query($conn, $query);
?>
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
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edgge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href= "StarbsL.png" type="image">
    <link rel="stylesheet" href="sales.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                <a href="Employee_Add.php" >Add Employee</a>
                <a href="#" class="active" style="color: black;">View Employee List</a>
				<a href="Payroll.php" >Payroll</a>
                <a href="LogOut.php">Log out</a>
            </div>
            </div>
        </div>
    </header>
	<section class="sales container">
    <h2 class="section-title">Employee</h2>
	<div class="sales-content">
	<table>
	  <tr>
		<th>Employee ID</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Birthday</th>
		<th>Nationality</th>
		<th>Civil Status</th>
		<th>Department</th>
		<th>Employee Status</th>
	  </tr>
	  <?php
		if (mysqli_num_rows($result) > 0) {
		  $sn=1;
		  while($data = mysqli_fetch_assoc($result)) {
	   ?>
	<tr>
	   <td><?php echo $data['Emp_ID']; ?> </td>
	   <td><?php echo $data['Emp_FName']; ?> </td>
	   <td><?php echo $data['Emp_MName']; ?> </td>
	   <td><?php echo $data['Emp_LName']; ?> </td>
	   <td><?php echo $data['Emp_Gender']; ?> </td>
	   <td><?php echo $data['Birthday']; ?> </td>
	   <td><?php echo $data['Nationality']; ?> </td>
	   <td><?php echo $data['Civil_Status']; ?> </td>
	   <td><?php echo $data['Department']; ?> </td>
	   <td><?php echo $data['Emp_Status']; ?> </td>
	</tr>
	<?php
	  $sn++;}}?>
	</table>
	</div>
	</section>
</body>    
</html>



