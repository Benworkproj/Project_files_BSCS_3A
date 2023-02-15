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
	$query = "SELECT * FROM transactions ORDER BY Transaction_ID";
	$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang = "en">
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
    <meta http-equiv="X-UA-Compatible" content="IE=edgge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href= "StarbsL.png" type="image">
    <link rel="stylesheet" href="sales.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Starbucks</title  
</head>


<body>
	<header>
        <div class="nav">
            <a href="Starbs.php"><img src="logo.png"></a>
            <a href="Starbs.php" class="logo">Starbucks</a>
            <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                <a href="try.php" >Online Ordering</a>
                <a href="#" class="active" style="color: black;">Online Ordering Sales</a>
                <a href="LogOut.php">Log out</a>
            </div>
            </div>
            
        </div>
    </header>
	<section class="sales container">
    <h2 class="section-title">Online Ordering Sales</h2>
	<div class="sales-content">
	<table>
	  <tr>
		<th>Transaction ID</th>
		<th>Product</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total Bill</th>
		<th>Total Quantity</th>
		<th>Cash Given</th>
		<th>Change</th>
	  </tr>
	  <?php
		if (mysqli_num_rows($result) > 0) {
		  $sn=1;
		  while($data = mysqli_fetch_assoc($result)) {
	   ?>
	<tr>
	   <td><?php echo $data['Transaction_ID']; ?> </td>
	   <td><?php echo $data['Product_Name']; ?> </td>
	   <td><?php echo $data['Price']; ?> </td>
	   <td><?php echo $data['Quantity']; ?> </td>
	   <td><?php echo $data['Total_Bill']; ?> </td>
	   <td><?php echo $data['Total_Quantity']; ?> </td>
	   <td><?php echo $data['Cash_Given']; ?> </td>
	   <td><?php echo $data['Changes']; ?> </td>
	</tr>
	<?php
	  $sn++;}}?>
	</table>
	</div>
	</section>
</body>    
</html>



