<?php

include("../admin/includes/conn.php");
include("../function/webpage2-function.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee's Profile</title>
	<link rel="stylesheet" href="../css/styles2.css">
	<script src="../function/webpage2.js"></script>
</head>
<style>

</style>
<body>
	<div class="header">Cookie Dough & Co. Payroll Form</div>
	<form method="GET">
		<div class="container">
			<div class="div1">
				<div class="title">
					<H3 style="text-align:center;">Employee Basic Info</H3>
					<div class="box">
						<div class="image"><img src="https://www.enwallpaper.com/wp-content/uploads/2022/01/wallpapersden.com-76396-2200x2480-1-500x564.jpg"> </div>
						<div class="select">
							<button class="btn">Choose File</button>
						</div>
					</div>
				</div>     
			</div>

			<div class="div2"> 
				<div class="profile1">
					<div class="info1">
						Employee Number: <input type="text" name="employee_id" value="<?php if(isset($_GET['employee_id'])){echo $_GET['employee_id'];} ?>"  autocomplete="off"> <br><br>
						Position: <input type="text" name="position_id" value="<?= $row['position_id']; ?>" disabled> <br> <br>
						First Name:  <input name="firstname" value="<?= $row['firstname']; ?>" disabled> <br> <br>
						Last Name: <input name="lastname" value="<?= $row['lastname']; ?>" disabled> <br><br>
						
					</div>

					<div class="info1">
					Address: <input name="address" value="<?= $row['address']; ?>" disabled> <br> <br>
						Contact Info: <input name="contact_info" value="<?= $row['contact_info']; ?>" disabled> <br> <br>
						Gender: <input name="Gender" value="<?= $row['gender']; ?>" disabled> <br> <br>
					</div> 
				</div>
				
				<div class="profile1">
					<div class="info1">
						<h4>BASIC PAY</h4> <br>
						Rate / Hour: <input type="number" id="basic_pay_rate" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"><br> <br>
						No. of Hour / Cut Off: <input type="number" id="basic_pay_num_of_hour" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>=48 && event.charCode<=57))"><br> <br>
						Income / Cut Off: <input id="basic_pay" disabled ="true"> <br> <br>
					</div>

					<div class="info1">
						<h4>HONORARIUM</h4> <br>
						Rate / Hour: <input type="number" id="honorarium_rate" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"> <br> <br>
						No. of Hour / Cut Off: <input type="number" id="honorarium_num_of_hour" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"> <br> <br>
						Income / Cut Off: <input id="honorarium" disabled="true"> <br> <br>
					</div> 
				</div>

				<div class="profile1">
							<div class="info1">
								<h4>OTHER INCOME</h4> <br>
								Rate / Hour: <input type="number" id="other_income_rate" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"> <br> <br>
								No. of Hour / Cut Off: <input type="number" id="other_income_num_of_hour" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"> <br> <br>
								Income / Cut Off: <input id="other_income" disabled="true" > <br> <br>
							</div> 

							<div class="info1">
								<h4>INCOME SUMMARY</H4> <br>
									Gross Income: <input id="gross_income" disabled="true"> <br> <br>
									Net Income: <input id="net_income" disabled="true"> <br> <br>
							</div> 
				</div>     
			</div>

						<div class="div2">
								<div class="profile2">
									<div class="info2">
										<h4>REGULAR DEDUCTIONS</h4> <br>
										SSS Contribution: <input id="sss_contribution" disabled="true"> <br> <br>
										Philhealth Contribution: <input id="ph_contribution" disabled="true"> <br> <br>
										Pagibig Contribution: <input type="number" id="pagibig_contribution" disabled="true" value=100> <br> <br>
										Tax: <input id="tax" disabled="true"> <br> <br>
									</div>

									<div class="info2">
										<h4>OTHER REGULAR DEDUCTIONS</h4><br>
										SSS Loan: <input type="number" id="sss_loan" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"> <br> <br>
										PAGIBIG Loan: <input type="number" id="pagibig_loan" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"> <br> <br>
										Faculty Savings Deposit: <input type="number" id="fsd" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"> <br> <br>
										Faculty Savings Loan: <input type="number" id="fsl" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"> <br> <br>
										Salary Loan: <input type="number" id="salary_loan" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))"> <br> <br>
										Other Loan: <input type="number" id="other_loan" onkeypress="return(event.charCode!=8 && event.charCode==0 || (event.charCode>= 48 && event.charCode<=57))" > <br> <br>
									</div>

									<div class="info2">
										<h4>DEDUCTION SUMMARY</h4> <br>
										Total Deductions: <input id="total_deductions" disabled="true"> <br> <br>
									</div> 
								</div> 

								<div class="buttons">
									<button type="submit" name='get_id'>ID</button>
									<button type="button" onclick="calculate_GI()">CALCULATE GROSS INCOME</button>
									<button type="button" onclick="calculate_NI()">CALCULATE NET INCOME</button>
									<button onclick="location.href = 'http://localhost/Cookie%20Dough%20&%20Co/index/webpage2.php';">NEW</button>
									<button type ="button" onclick="window.close();">EXIT</button>
								</div>
						</div>
		</div>
	</form>
</body>
</html>
