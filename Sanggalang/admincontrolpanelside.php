<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <style>
            body {
                font-family: "Lato", sans-serif;
            }

            .sidenav {
                height: 100%;
                width: 300px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #ffcc55;
                overflow-x: hidden;
                padding-top: 20px;
            }

            .sidenav a {
                padding: 6px 6px 6px 32px;
                text-decoration: none;
                font-size: 18px;
                color: #black;
                display: block;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .main {
                margin-top: 30px;
                margin-left: 320px; /*Same as the width of the sidenav */
            }

            .loader-img {
                width: 100px;
                height: 100px;
                position: absolute;
                top: calc(50% - 50px);
                left: calc(50% - 50px);
                z-index: 1;
                display: none;
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }
        </style>
    </head>
    <body>
        <div class="sidenav">
            <h3 style="padding-top: 10px; padding-bottom: 30px; padding-left: 20px; color: white; font-weight: bold;">ZION GREY EGG AND RICE DEALER INVENTORY SYSTEM</h3>
            <a href="Home.php">Home</a>
            <a href="web12.php" class="nav" link="employee">Employee</a>
            <a href="web12.php" class="nav" link="payroll">Payroll</a>
            <a href="web12.php" class="nav" link="payroll_report">Employee Payroll Report</a>
            <a href="webpage1modified.php" class="nav" link="point_of_sale_a">Point of Sale A</a>
            <a href="#" class="nav" link="sales_of_pos_a">Sales of Point of Sale A</a>
            <a href="webpage3.php" class="nav" link="point_of_sale_b">Point of Sale B</a>
            <a href="#" class="nav" link="sales_of_pos_b">Sales of Point of Sale B</a>
            <a href="#" class="nav" link="user_account">User Account</a>
            <a href="login.php">Logout</a>
        </div>

        <div id="content" class="main">
            <h2>Zion Grey Egg and Rice Dealer </h2>
        </div>

        <img src="image.jpg" class="loader-img">
    </body>
</html>