


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edgge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href= "StarbsL.png" type="image">
    <link rel="stylesheet" href="POS.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Starbucks POS</title> 
</head>
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
        $quantity =0;
        $price =0;
        $Cash =0;
        $name = "";
        $result=0;
        $discountAmounted=0;
        $discount=0;
        $change=0;





    if (isset($_GET['submit'])) {
        $quantity =$_GET['quantity'];
        $price =$_GET['price'];
        $Cash =$_GET['Cash'];
        $name = $_GET['name'];


        $discountAmount = $quantity*$price;
        $discountAmounted= $discountAmount*0.25;
        $discount= ($quantity*$price)-$discountAmounted;
        $change='';
        $result = $discount;
        $sql ="INSERT INTO pos (Product_Name,Product_Quantity,Product_Price) VALUES('$name','$quantity','$price')";
        mysqli_query($conn, $sql);

    }
    if (isset($_GET['new'])){
        $quantity ='';
        $price ='';
        $Cash ='';
        $discount='';
        $result='';
        $discountAmounted='';
        $change='';

    }
    if (isset($_GET['changes'])) {
        $quantity =$_GET['quantity'];
        $price =$_GET['price'];
        $Cash =$_GET['Cash'];
        $name = $_GET['name'];


        $discountAmount = $quantity*$price;
        $discountAmounted= $discountAmount*0.25;
        $discount= ($quantity*$price)-$discountAmounted;
        $change='';
        $result = $discount;
        $change = $Cash-$discount;
        $result = $discount;
    }


    ?>
<body>

 <header>
        <div class="nav">
            <a href="Starbs.php"><img src="logo.png"></a>
            <a href="Starbs.php" class="logo">Starbucks</a>
            <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                <a href="POS.php"class="active"style="color: black;" >Point of Sale</a>
                <a href="sales_pos.php"  >Point of Sales's Sales</a>
                <a href="LogOut.php">Log out</a>
            </div>
            </div>
            
        </div>
    </header>
<div class = "split left">
    <div class="flexbox-container">
        <div class="flexbox-item flexbox-item-1"><img src="bread/bagel.png" width="100%" height="100%"></div>
        <div class="flexbox-item flexbox-item-2"><img src="bread/bluebery.png" width="100%" height="100%"></div>
        <div class="flexbox-item flexbox-item-3"><img src="bread/choco kwasoon.png" width="100%" height="100%"></div>
        <div class="flexbox-item flexbox-item-4"><img src="bread/glazed.png" width="100%" height="100%"></div>
        <div class="flexbox-item flexbox-item-5"><img src="bread/kwason.png" width="100%" height="100%"></div>
        <div class="flexbox-item flexbox-item-6"><img src="bread/lemon.png" width="100%" height="100%"></div>
        <div class="flexbox-item flexbox-item-7"><img src="bread/plain.png" width="100%" height="100%"></div>
        <div class="flexbox-item flexbox-item-8"><img src="bread/red velvet.png" width="100%" height="100%"></div>
        <div class="flexbox-item flexbox-item-9"><img src="bread/scone.png" width="100%" height="100%"></div>
    </div>
</div>

<div class="split right">
        
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get" >
        
        <div class ="Pos-Text">
        <strong> <label>PRODUCT NAME:</label></strong> <input type="text" name="name" value="<?=$name ?>"><br>
        <strong> <label>QUANTITY:</label></strong> <input type="number" name="quantity" value="<?=$quantity ?>" /><br>
        <strong> <label>PRICE:</label></strong> <input type="number" name="price" value="<?=$price ?>" /><br>
        <strong> <label>CASH GIVEN:</label></strong> <input type="number" name="Cash"  value="<?=$Cash ?>" />
        </div>


          <div class="buttons">
            <button type="submit" name="submit" value="submit">CALCULATE</button>
            <button type="submit" name="new" value="submit">NEW</button>
            <button type="submit" name="changes" value="changes">CHANGE</button>
        </div>

            
            <div class="Pos-result"><strong>
                <label for="result">Result: </label>
                <input type="text" value="<?=$result ?>" id="Result" disabled>
                <br>
                <label for="result">Total Quantity: </label>
                <input type="text" value="<?=$quantity ?>" id="quantity" disabled>
                <br>
                <label for="result">Total Discount Given: </label>
                <input type="text" value="<?=$discountAmounted ?>" id="DiscountGiven" disabled>
                <br>
                <label for="result">Total Discounted amount: </label>
                <input type="text" value=   "<?=$discount ?>" id="Discount" disabled>
                <br>
                <label for="result">Change: </label>
                <input type="text" value="<?=$change ?>" id="changee" disabled></strong>
            </div>
            
          </form>
    </div>



                                
</body>
</html>

