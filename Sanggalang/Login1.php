<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style10.css" >
  <title>Login</title>
</head>
<br>
<dic class="logo">
<body style="background:url(hh.jpg); background-repeat: no-repeat; background-size:100% 100%">
<center><b><h1><img src="logogarden.png" alt="image" width="200" height="200">
</h1></b></center>

<?php
    if (isset($_POST["loginbtn"])) {

        $user = $_POST["user"];
        $pass = $_POST["pass"];

        if ($user == "webpage1modified" && $pass == "00000") {
            header("Location:webpage1modified.php");
        } else if ($user == "webpage12" && $pass == "00000") {
            header("Location: Web12.php");
        } else if ($user == "webpage3" && $pass == "00000") {
            header("Location:Webpage3.php");
        } else {
            echo "Your Username and Password does not match.";
        }
    };

  ?>
    <dic class="column">
    <fieldset style="width: 350px; height: 400px; background:#CBC3E3;">

   <div class="imgcontainer">
    <img src="images-removebg-preview.png" alt="image" width="100" height="100">  
  </div>
  <form action="login1.php" method="post">
        <center><label for="user"><b>Username</b></center>
        <input type="text" placeholder="Enter Username" name="user" required></label><br>
         <br>
        <center><label for="pass"><b>Password</b></label></center>
        <input type="password" placeholder="Enter Password" name="pass" required><br>
         <br>
        <button type="submit" name="loginbtn">Login</button>

        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </label>
       <br>
      <div class="container">
        <span class="pass">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Forgot <a href="#">password?</a></span>
      </div>

    </fieldset>
  </form>
  </div>
</body>
</html>