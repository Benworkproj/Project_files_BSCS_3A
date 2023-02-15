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
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edgge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href= "StarbsL.png" type="image">
    <link rel="stylesheet" href="Payroll.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Starbucks</title>
	
       
</head>

<body>
    
    <header>
        <div class="nav">
            <a href="Starbs.php"><img src="logo.png"></a>
            <a href="Starbs.php" class="logo">Starbucks</a>
			<h2>PAYROLL</h2>
            <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                <a href="Employee_Add.php" >Add Employee</a>
                <a href="Employee_Table.php">View Employee List</a>
				<a href="#" class="active" style="color: black;">Payroll</a>
                <a href="LogOut.php">Log out</a>
            </div>
            </div>
            
        </div>
    </header>
	
    <h2 class="section-title">Payroll</h2>
    <div class ="split left">
        <div class = "info">
            <h2>EMPLOYEE'S INFORMATION</h2>
            <form action ="" method = "post">
				<div class = "select">
                <select name = "select" id = "select">
				<?php
				$query = "SELECT * FROM employee ORDER BY Emp_ID";
				$result = mysqli_query($conn, $query);
				if (mysqli_num_rows($result) > 0) {
				  $sn=1;
				  while($data = mysqli_fetch_assoc($result)) {
				?>
                    <option value =  "<?php echo $data['Emp_ID']; ?>"><?php echo $data['Emp_ID']; ?></option>
				<?php
				$sn++;}}?>
                </select><input type="submit" name="Search" value="Search" class= "Search" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'">
                </div>
				<?php
				$Emp_ID = "";
				$Emp_FName = "";
				$Emp_MName = "";
				$Emp_LName = "";
				$Civil_Status = "";
				$Department = "";
				$Emp_Status = "";
				$pdate ="";
				if(isset($_POST["Search"])){
					$select = $_POST['select'];
					$queries = "SELECT * FROM employee WHERE Emp_ID = $select";
					$results = mysqli_query($conn, $queries);
					if (mysqli_num_rows($results) > 0) {
					  $sn=1;
					  while($data = mysqli_fetch_assoc($results)){
						  $Emp_ID = $data['Emp_ID'];
						  $Emp_FName = $data['Emp_FName'];
						  $Emp_MName = $data['Emp_MName'];
						  $Emp_LName = $data['Emp_LName'];
						  $Civil_Status = $data['Civil_Status'];
						  $Department = $data['Department'];
						  $Emp_Status = $data['Emp_Status'];
					  $sn++;}}
				}
				?>
                Employee Number: <input type="text" name="emp-no" size="40" value="<?php echo $Emp_ID;?>" readonly=""><br><br>
				First Name: <input type="text" name="first"size="47" value="<?php echo $Emp_FName;?>" readonly=""><br><br>
				Middle Name: <input type="text" name="middle"size="45" value="<?php echo $Emp_MName;?>" readonly=""><br><br>
				Surname: <input type="text" name="surname" size="49" value="<?php echo $Emp_LName;?>" readonly=""><br><br>
				Civil Status: <input type="text" name="cv"size="47" value="<?php echo $Civil_Status;?>" readonly=""><br><br>
				Department: <input type="text" name="dept"size="46" value="<?php echo $Department;?>" readonly=""><br><br>
				Employee Status: <input type="text" name="stats"size="41" value="<?php echo $Emp_Status;?>" readonly=""><br><br>
				Paydate:<input type="date" name="pdate" id="pdate" value="<?php echo $pdate;?>">
 
        </div>
                
		</form>
	</div>
	<div class ="split right">
        <div class = "pay">
            <h2>BASIC INCOME</h2>
            <form action ="" method = "post">
			<?php
				$brate = 0;
				$bnum = 0;
				$bincome = 0;
				$hrate = 0;
				$hnum = 0;
				$hincome = 0;
				$orate = 0;
				$onum = 0;
				$oincome = 0;
				$gross = 0;
				$net = 0;
				
				$net = 0;
				$SSS = 0;
				$ph = 0;
				$pag = 100;
				$tax = 0;
				
				$sloan = 0;
				$ploan = 0;
				$fsd = 0;
				$fsl = 0;
				$saloan = 0;
				$oloan= 0;

				$tduct = 0;
				if(isset($_POST["btn-gross"])){
					$brate= $_POST['brate'];
					$bnum= $_POST['bnum'];
					$bincome= $brate * $bnum;
					$hrate= $_POST['hrate'];
					$hnum= $_POST['hnum'];
					$hincome= $hrate * $hnum;
					$orate= $_POST['hrate'];
					$onum= $_POST['hnum'];
					$oincome= $orate * $onum;
					$gross = $bincome + $hincome + $oincome;
				}
				if(isset($_POST["btn-net"])){
					$brate= $_POST['brate'];
					$bnum= $_POST['bnum'];
					$bincome= $_POST['bincome'];
					$hrate= $_POST['hrate'];
					$hnum= $_POST['hnum'];
					$hincome= $_POST['hincome'];
					$orate= $_POST['hrate'];
					$onum= $_POST['hnum'];
					$oincome= $_POST['oincome'];
					$gross = $_POST['gross'];
					
					$sloan = $_POST['sloan'];
					$ploan = $_POST['ploan'];
					$fsd = $_POST['fsd'];
					$fsl = $_POST['fsl'];
					$saloan = $_POST['saloan'];
					$oloan= $_POST['oloan'];
					
					//sss
				if ($gross>= 1000 && $gross<=1249){
					$employee_sss_contri=73.70;
					$employer_sss_contri=36.30;
					$SSS=$employee_sss_contri+$employer_sss_contri;}
				else if ($gross>=1250 && $gross<=1749){
					$employee_sss_contri=110.50;
					$employer_sss_contri=54.50;
					$SSS=$employee_sss_contri+$employer_sss_contri;} 
					else {
					$SSS=0;}

				//philhealth
				if ($gross<=8999 && $gross>=0){
					$employee_philhealth_contri=100.00;
					$employer_philhealth_contri=100.00;
					$ph=$employee_philhealth_contri+$employer_philhealth_contri;} 
				else if ($gross>=9000 && $gross<=9999){
					$employee_philhealth_contri=112.50;
					$employer_philhealth_contri=112.50;
					$ph=$employee_philhealth_contri+$employer_philhealth_contri;}
				else {
					$employee_philhealth_contri=437.50;
					$employer_philhealth_contri=437.50;
					$ph=$employee_philhealth_contri+$employer_philhealth_contri;}
					
				//example ( net income - from the table data) * .25 + tax from table base from net income range
				if ($gross<=8999.99 && $gross>=0){
					$tax=500.00;
				} 
				else {
					$tax=20.00;
				}
				
				$tduct = $SSS+$ph+floatval($pag)+$tax+floatval($sloan)+floatval($ploan)+floatval($fsd)+floatval($fsl)+floatval($saloan)+floatval($oloan);
				$net = $gross - $tduct;
				}
				
				
				
				
				
				
				?>
				Rate/Hour: <input type="text" name="brate" value="<?php echo $brate;?>"><br>
                No. of Hours/Cut Off: <input type="text" name="bnum" value="<?php echo $bnum;?>"><br>
				Income/Cut Off: <input type="text" name="bincome" value="<?php echo $bincome;?>" readonly=""><br>
				<h2>HONORARIUM INCOME</h2><br>
				
				Rate/Hour: <input type="text" name="hrate" value="<?php echo $hrate;?>"><br>
                No. of Hours/Cut Off: <input type="text" name="hnum" value="<?php echo $hnum;?>"><br>
				Income/Cut Off: <input type="text" name="hincome" value="<?php echo $hincome;?>" readonly=""><br>
				<h2>OTHER INCOME</h2><br>
				
				Rate/Hour: <input type="text" name="orate" value="<?php echo $orate;?>"><br>
                No. of Hours/Cut Off: <input type="text" name="onum" value="<?php echo $onum;?>"><br>
				Income/Cut Off: <input type="text" name="oincome" value="<?php echo $oincome;?>" readonly=""><br>
				<h2>SUMMARY INCOME</h2><br>
				
				GROSS INCOME: <input type="text" name="gross" value="<?php echo $gross;?>" readonly=""><br>
                NET INCOME: <input type="text" name="net" value="<?php echo $net;?>" readonly=""><br>
				
				<h2>REGULAR DEDUCTIONS</h2><br>
				SSS Contribution: <input type="text" name="SSS" value="<?php echo $SSS;?>" readonly=""><br>
                PhilHealth Contribution: <input type="text" name="ph" value="<?php echo $ph;?>" readonly=""><br>
				Pag-ibig Contribution: <input type="text" name="pag" value="<?php echo $pag;?>" readonly=""><br>
				Income Tax Contribution: <input type="text" name="tax" value="<?php echo $tax;?>" readonly=""><br>
				
				<h2>OTHER DEDUCTIONS</h2><br>
				SSS Loan: <input type="text" name="sloan" value="<?php echo $sloan;?>"><br>
                Pag-ibig Loan: <input type="text" name="ploan" value="<?php echo $ploan;?>"><br>
				Faculty Savings Deposit: <input type="text" name="fsd" value="<?php echo $fsd;?>"><br>
				Faculty Savings Loan: <input type="text" name="fsl" value="<?php echo $fsl;?>"><br>
				Salary Loan: <input type="text" name="saloan" value="<?php echo $saloan;?>"><br>
				Other Loans: <input type="text" name="oloan" value="<?php echo $oloan;?>"><br>
				
				<h2>DEDUCTION SUMMARY</h2><br>
				Total Deductions: <input type="text" name="tduct" value="<?php echo $tduct;?>" readonly=""><br>
        
                <input type="submit" name="btn-gross" value="Calculate Gross Income" class= "submit gross" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'" style="width:auto;">
				<input type="submit" name="btn-net" value="Calculate Net Income" class= "submit net" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'">	
				<input type="submit" name="btn-new" value="New" class= "submit new" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'">
				<input type="submit" name="btn-cancel" value="Cancel" class= "submit cancel" onmouseover="this.style.color='#007042'"onmouseout="this.style.color='black'">		
			</div>	
			</form>
	</div>

</body>
</html>