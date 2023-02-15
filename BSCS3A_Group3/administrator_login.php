<?php
    $username = "";
    $password = "";

    if (isset($_POST["log_in"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $conn = new mysqli('localhost','root','','employee');
        $sql = "SELECT * FROM employeedatabase WHERE username = '$username'";    
        $result = mysqli_query($conn, $sql);
        $rowvalid = $result->fetch_assoc();

        if($rowvalid["username"] == $username){
            if($rowvalid["password"] == $password){
                echo '
                <script>
                alert("Login Successfully");
                window.location.href = "employee_list.php";
                </script>';
            }
            else{
                echo '
                <script>
                alert("Invalid Password");
                window.location.href = "administrator_login.php";
                </script>';
            }
        }
        else{
            echo '
            <script>
            alert("Invalid Username");
            window.location.href = "administrator_login.php";
            </script>';
        }
    }
    if (isset($_POST["sign_up"])){
        echo '
            <script>
            window.location.href = "administrator_signup.php";
            </script>';
    }
    if (isset($_POST["back"])){
        echo '
            <script>
            window.location.href = "administrator_browser.php";
            </script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center_form">
    <img src="https://i.imgur.com/hbmxGVs.png" alt="Casan's Footwear Logo" width="400">
    <form action="" method="post">
        <div class="subform">
                <!--Get username -->
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?php $username = readline() ;?>"><br>
                <!--Get password -->
                <label for="password">Password:</label>
                <input type="password" name="password" value="<?php $password = readline();?>"><br>
                <br>
                <!--Log In button -->
                <input name="log_in" type="submit" value="Log In" id="big_button">
                <hr>

                <div>
                    <label for="sign_up">Don't have an account?</label>
                    <input name="sign_up" type="submit" value="Sign Up">
                    <input name="back" type="submit" value="Back">
                </div>
        </div>
    </form>
</div>
</body>
</html>