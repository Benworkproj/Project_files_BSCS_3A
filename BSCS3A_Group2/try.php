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
	
	if(isset($_POST["submit_check"])){
		$drinkValue = explode(",", $_POST['drinks']);
		$drinkType= $drinkValue[0];
		$drinkPrice=$drinkValue[1];
	}
	
	if(isset($_POST["submit_enter"])){
		$drinkType= $_POST['product'];
		$drinkPrice= $_POST['price'];
		$drinkQuantity = $_POST['quantity'];
		if ($drinkType == ""){
			echo "<script> alert('Pick a product first'); </script>";
		}
		else {
			if ($drinkQuantity == ""){
				echo "<script> alert('Enter quantity first'); </script>";
			}
			else {
				$drinkTotalQuantity = $drinkQuantity;
				$drinkBill = strval($drinkPrice) * $drinkQuantity;
			}
		}
	}
	if(isset($_POST["submit_enterc"])){
		$drinkType= $_POST['product'];
		$drinkPrice= $_POST['price'];
		$drinkQuantity = $_POST['quantity'];
		$drinkBill = $_POST['totalb'];
		$drinkTotalQuantity = $_POST['totalq'];
		$drinkCash = $_POST['cash'];
		if ($drinkType == ""){
			echo "<script> alert('Pick a product first'); </script>";
		}
		else {
			if ($drinkBill == ""){
				echo "<script> alert('Confirm quantity first'); </script>";
				$drinkTotalQuantity = "";
			}
			else {
				$drinkChange = (int)$drinkCash - (int)$drinkBill;
				if ($drinkCash == "") {
					echo "<script> alert('Enter cash first'); </script>";
					$drinkChange = "";
				}
				else{
					if ($drinkChange<0) {
						echo "<script> alert('Enter right amount of cash'); </script>";
						$drinkCash = "";
						$drinkChange = "";
					}
				}
			}
		}
		
	}
	if(isset($_POST["btn-buy"])){
		$drinkChange = $_POST['change'];
		if (!empty($drinkChange)) {
			echo "<script> alert('Thank you for ordering!'); </script>";
			$drinkType= $_POST['product'];
			$drinkPrice= $_POST['price'];
			$drinkQuantity = $_POST['quantity'];
			$drinkBill = $_POST['totalb'];
			$drinkTotalQuantity = $_POST['totalq'];
			$drinkCash = $_POST['cash'];
			$sql = mysqli_query($conn, "INSERT INTO transactions (Product_Name, Price, Quantity, Total_Bill, Total_Quantity, Cash_Given, Changes) VALUES ('$drinkType', '$drinkPrice', '$drinkQuantity', '$drinkBill', '$drinkTotalQuantity', '$drinkCash', '$drinkChange')");
			$drinkChange = "";
		}
		else{
			echo "<script> alert('Fill out the form first'); </script>";
			$drinkType= $_POST['product'];
			$drinkPrice= $_POST['price'];
			$drinkQuantity = $_POST['quantity'];
			$drinkBill = $_POST['totalb'];
			$drinkTotalQuantity = $_POST['totalq'];
			$drinkCash = $_POST['cash'];
		}
	}
	if(isset($_POST["btn-clr"])){
		$drinkType= "";
		$drinkPrice= "";
		$drinkQuantity = "";
		$drinkBill = "";
		$drinkCash = "";
		$drinkChange = "";
	}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edgge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href= "StarbsL.png" type="image">
    <link rel="stylesheet" href="try.css">
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
                <a href="#" class="active" style="color: black;" >Online Ordering</a>
                <a href="sales.php" >Online Ordering Sales</a>
                <a href="LogOut.php">Log out</a>
            </div>
            </div>
            
        </div>
    </header>
	
    <div class ="split left">
    <form action = "" method = "post">
    <section class="shop container">
        <h2 class="section-title">MENU</h2>
        <div class="shop-content">
            
            <!--BOX 1-->
            <div class="product-box">
                <input type="radio" name="drinks" id="Cream Frappuccino" value="Chai Tea Cream Frappuccino, 115" required>
                <label for="Cream Frappuccino"><img src="cafe/ChaiTeaCreamFrappuccino.jpg" id="Cream Frappuccino"alt="" class="product-img">
                <h2 class="product-title">Chai Tea Cream Frappuccino</h2>
				<span class="price">₱115.00</span>
				
            </div>
            <!--BOX 2-->
            <div class="product-box">
                <input type="radio" name="drinks" id="Caffe Misto" value="Caffe Misto, 115">
                <label for="Caffe Misto"><img src="cafe/CaffeMisto.jpg" id="Caffe Misto"alt="" class="product-img">
                <h2 class="product-title">Caffe Misto</h2>
                <span class="price">₱115.00</span>
                
            </div>
            <!--BOX 3-->
            <div class="product-box">
                <input type="radio" name="drinks" id="Espresso" value="Espresso, 125">
                <label for="Espresso"><img src="cafe/Espresso.jpg" id="Espresso"alt="" class="product-img">
                <h2 class="product-title">Espresso</h2>
                <span class="price">₱125.00</span>
                
            </div>
            <!--BOX 4-->
            <div class="product-box">
                <input type="radio" name="drinks" id="Flat White" value="Flat White, 205">
                <label for="Flat White"><img src="cafe/FlatWhite.jpg" id="Flat White"alt="" class="product-img">
                <h2 class="product-title">Flat White</h2>
                <span class="price">₱205.00</span>
                
            </div>
            <!--BOX 5-->
            <div class="product-box">
                <input type="radio" name="drinks" id="Green Tea Cream Frappuccino" value="Green Tea Cream Frappuccino, 205">
                <label for="Green Tea Cream Frappuccino"><img src="cafe/GreenTeaCreamFrappuccino.jpg" id="Green Tea Cream Frappuccino"alt="" class="product-img">
                <h2 class="product-title">Green Tea Cream Frappuccino</h2>
                <span class="price">₱205.00</span>
                
            </div>
            <!--BOX 6-->
            <div class="product-box">
                <input type="radio" name="drinks" id="Iced Matcha and Espresso Fusion" value="Iced Matcha and Espresso Fusion, 215">
                <label for="Iced Matcha and Espresso Fusion"><img src="cafe/IcedMatchaandEspressoFusion.jpg" id="Iced Matcha and Espresso Fusion"alt="" class="product-img">
                <h2 class="product-title">Iced Matcha & Espresso Fusion</h2>
                <span class="price">₱215.00</span>
                
            </div>
            <!--BOX 7-->
            <div class="product-box">
                <input type="radio" name="drinks" id="JavaChipFrappuccino" value="Java Chip Frappuccino, 210">
                <label for="JavaChipFrappuccino"><img src="cafe/JavaChipFrappuccino.jpg" id="JavaChipFrappuccino"alt="" class="product-img">
                <h2 class="product-title">Java Chip Frappuccino</h2>
                <span class="price">₱210.00</span>
                
            </div>
            <!--BOX 8-->
            <div class="product-box">
                <input type="radio" name="drinks" id="Mocha Frappuccino" value="Mocha Frappuccino, 205" >
                <label for="Mocha Frappuccino"><img src="cafe/TripleMochaFrappuccino.jpg" id="Mocha Frappuccino"alt="" class="product-img">
                <h2 class="product-title">Mocha Frappuccino</h2>
                <span class="price">₱205.00</span>
            </div>
            <!--BOX 9-->
            <div class="product-box">
                <input type="radio" name="drinks" id="RubyGrapefruitandHoney" value="Ruby Grape fruit and Honey, 215">
                <label for="RubyGrapefruitandHoney"><img src="cafe/IcedShakenBlackTeawithRubyGrapefruitandHoney.jpg" id="RubyGrapefruitandHoney"alt="" class="product-img">
                <h2 class="product-title">Ruby Grape fruit and Honey</h2>
                <span class="price">₱215.00</span>
            </div>
        </div>
        <br>
        <input type="submit" name="submit_check" value="CHECKOUT" class= "submit ch" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'">
            <br>
            <br>
            <br>
            
    </section>
	</form>
    </div>
    <div class ="split right">
        <div class = "cart-title">
            <h2>YOUR CART</h2>
            <h3>Order Details:</h3>
            <form action ="" method = "post">
                Product: <input type="text" name="product" size = "60" value="<?php echo @$drinkType;?>" readonly=""><br><br>
                Price: <input type="text" name="price" size = "60" value="<?php echo @$drinkPrice;?>" readonly=""><br>
                Quantity: <input type="number" name="quantity" size = "100" min="1" value="<?php echo @$drinkQuantity;?>">
				<input type="submit" name="submit_enter" value="ENTER QUANTITY" class= "submit ent" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'"><br><br>

                Total Bill: <input type="text" name="totalb" size = "56" value="<?php echo @$drinkBill;?>" readonly=""><br><br>
                Total Quantity: <input type="text" name="totalq" size = "51" value="<?php echo @$drinkTotalQuantity;?>" readonly=""><br>
				Cash Given:<input type="number" name="cash" size = "54" min="1" value="<?php echo @$drinkCash;?>">
				<input type="submit" name="submit_enterc" value="ENTER CASH" class= "submit cash" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'"><br><br>

				Change: <input type="text" name="change" size = "57" value="<?php echo @$drinkChange;?>" readonly=""><br><br>
        </div>
                <input type="submit" name="btn-buy" value="Buy" class= "submit buy" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'">
				<input type="submit" name="btn-clr" value="Clear" class= "submit clr" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'">	
		</form>
	</div>
</body>    
</html>