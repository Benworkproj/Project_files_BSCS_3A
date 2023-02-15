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
	} .center {
        text-align: center;
    }
	</style>
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
                <a href="POS.php" >Point of Sale</a>
                <a href="#" class="active" style="color: black;">Point of Sales's Sales</a>
                <a href="LogOut.php">Log out</a>
            </div>
            </div>
            
        </div>
    </header>
	<section class="sales container">
    <h2 class="section-title">Online Ordering Sales</h2>
	<div class="sales-content">
		<table class="center">
<tr>
<th>Product Name</th>
<th>Product Quantity</th>
<th>Product Price</th>
</tr>
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
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Product_Name,Product_Quantity,Product_Price FROM pos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Product_Name"]. "</td><td>" . $row["Product_Quantity"] . "</td><td>"
. $row["Product_Price"]. "</td></tr>";
}
echo "</table>";
}
$conn->close();
?>
</table>



	</div>
	</section>
</body>    
</html>



