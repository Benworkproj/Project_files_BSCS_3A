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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href= "StarbsL.png" type="image">
    <title>Starbucks</title>
    <style>
        body{
          background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),  url(bg.jpg);
          height: 100vh;
          background-size: cover;
          background-position: center;
          image-rendering: pixelated;
          margin: 0;
          padding: 0;
          font-family: arial;
          white-space: nowrap;
        }

        .header{
           white-space: nowrap;
        }
        .navbar{
            background-color:#fff;  
            overflow: hidden;   
            white-space: nowrap;         
        }
        .navbar ul{
            overflow: hidden;
            white-space: nowrap;
        }
        .navbar li{
            position: relative;
            display: inline-block;
            left: 480px;
            list-style: none; 
            margin: 19px 20px;
            white-space: nowrap;
            
        }
        .navbar li a{
            padding: 10px 10px;
            text-decoration: none;
            color: black;
            white-space: nowrap;
        }
        .navbar li a:hover{
            color: green;
            font-weight: bold;
            white-space: nowrap;

        }
        .navbar ul li.active a{
            background-color: #04AA6D;
            color: white;
            white-space: nowrap;

        }
        .navbar img {
            position: absolute;
            left: 45px;
            top: 4px;
            width: 79px;
            height: auto;
            white-space: nowrap;
            
        }
		.center{
			caret-color: 	#fffcfc;
			color: 	#fffcfc;
			position: absolute;
			top:55%;
			left:50%;
			transform: translate(-50%,-50%);
			width: 800px;
			height: 380px;
			background:linear-gradient(#0b421a,rgba(0, 0, 0, 0.89));
			border-radius: 10px;
		}
        .title{
            position: relative;
            text-align: center;
            white-space: nowrap;            
          }

          .title h1{
            font: Century Gothic;
            color: #fff;
            font-size: 70px;
            text-shadow:-1px 4px 0 #000
            white-space: nowrap;
			border-bottom: 2px solid silver;
          }
          .title p{
            font: calibri;
            color: white;
            text-shadow:  -1px 1px 0 #000
            white-space: nowrap;
          }
          .button{
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%,-50%);
            white-space: nowrap;
          }

          .btn{
            border: 1px solid #fff;
            padding: 10px 30px;
            color: #fff;
            text-decoration: none;
            transition: 0.6s ease;
            white-space: nowrap; 
          }

          .btn:hover{
            background-color: #fff;
            color: #000;
            font-weight: bold;
            white-space: nowrap;
          }
    </style>
	    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edgge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href= "StarbsL.png" type="image">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Starbucks</title  


<body>
    <header>
        <nav class="navbar">
            <img src="StarbsL.png">
              <ul>
                <li class="active"><a href="#">HOME</a></li>
				<li><a href="LogOut.php">LOG OUT</a></li>  				
              </ul>
          </nav>
    </header>
	<div class="center">
	<div class="title">
            <h1>STARBUCKS</h1>
            <p>"While we are a coffee company at heart, Starbucks provides much more than the best cup of coffee. 
            <br>
            We offer a community gathering place where people come together to connect and discover new things."</p>
    </div>
    <div class="button">
            <br><br><br>
			<a href="try.php" class="btn">ORDERING</a>
            <a href="Employee_Add.php" class="btn">EMPLOYEE</a>
            <a href="POS.php" class="btn">POINT OF SALE</a>
    </div>
	</div>
</body>

</html>