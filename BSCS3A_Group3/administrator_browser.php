<?php
    if(isset($_POST["administrator_login"])){
        echo '
                <script>
                window.location.href = "administrator_login.php";
                </script>';
    }
    if(isset($_POST["user_login"])){
        echo '
                <script>
                window.location.href = "user_login.php";
                </script>';
    }
    if(isset($_POST["point_of_sale"])){
        echo '
                <script>
                window.location.href = "point_of_sale.php";
                </script>';
    }
    if(isset($_POST["items_browser"])){
        echo '
                <script>
                window.location.href = "items_browser.php";
                </script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Browser</title>
    <link rel="stylesheet" href="style.css">
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="center_form">
    <img src="https://i.imgur.com/B9glwZL.png" alt="Casan's Footwear Logo" width="400">
    <form action="" method="post">
        <div class="flex_container_column">
            <div class="flex_container_row" id="banner_row">
                <img src="https://i.imgur.com/hbmxGVs.png" alt="image" onclick="location.href='administrator_login.php'">
                <img src="https://i.imgur.com/ZamKnxw.png" alt="image" onclick="location.href='user_login.php'">
            </div>
            <br>
            <div class="flex_container_row" id="banner_row">
                <img src="https://i.imgur.com/fyGfZJ0.png" alt="image" onclick="location.href='point_of_sale.php'">
                <img src="https://i.imgur.com/athXVqN.png" alt="image" onclick="location.href='items_browser.php'">
            </div>
        </div>
    </form>
</div>
</body>
</html>