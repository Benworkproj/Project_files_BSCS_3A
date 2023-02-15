<?php
		$empnumber="1230 "; 
		$numberofdependents="3";
		$empstatus="Self-employed"; 
		$department1="IT department";
		$paydate="January 23,2023"; 

		$fname="Angela"; 
		$mname="Baliguat"; 
		$sname="Sanggalang"; 
		$civilstatus="Single"; 
		$designation="Working student"; 
		$qualified_dependent_status="Mother"; 

/*Basic Pay*/
$rateperhour;
$incomepercutoff;
$cutoff; 


/*Honorarium*/
$rateperhour2;
$cutoff2 ;
$totalhonorarium;

/*Other Income*/
$rateperhour3;
$cutoff3 ;
$totalotherincome;


/*Income Summary*/
$gross_income = "";
$netincome ="";

/*Regular Deductio  ns*/
$sss_contribution ="";
$philhealth= "" ;
$pagibig = "";
$tax = "" ;
 /*otherdeductions   Deductions*/
 $sssloan ="";
 $pagibigloan ="";
 $facultysavingsdeposit ="";
 $facultysavingsloan ="";
 $salaryloan ="";
 $totaldeductions ="";

$netincome = "";

/*computation*/

if(isset($_POST['calculate'])){
    /*Basic Pay*/
    $rateperhour = $_POST['rateperhour'];
    $cutoff = $_POST['cutoff'];
    $incomepercutoff = $rateperhour * $cutoff;

    /*Honorarium*/
    $rateperhour2 = $_POST['rateperhour2'];
    $cutoff2 = $_POST['cutoff2'];
    $totalhonorarium = $rateperhour2 * $cutoff2;

    /*Otherincome*/
    $rateperhour3 = $_POST['rateperhour3'];
    $cutoff3 = $_POST['cutoff3'];
    $totalotherincome = $rateperhour3 * $cutoff3;

     /*Income Summary*/
     $gross_income = $incomepercutoff + $totalhonorarium + $totalotherincome;

     /*Regular Deductions*/

           $tax = $gross_income * 0.10;
           $sss_contribution = $gross_income * 0.10;
           $pagibig = 100;
           $philhealth = 100;
                
     
     /*Other Deductions*/
     $sssloan = $_POST['sssloan'];
     $pagibigloan = $_POST['pagibigloan'];
     $facultysavingsdeposit = $_POST['facultysavingsdeposit'];
     $facultysavingsloan = $_POST['facultysavingsloan'];
     $salaryloan = $_POST['salaryloan'];

}

elseif (isset($_POST['net'])) { 
    $rateperhour = $_POST['rateperhour'];
    $cutoff = $_POST['cutoff'];
    $incomepercutoff = $rateperhour * $cutoff;

    /*Honorarium*/
    $rateperhour2 = $_POST['rateperhour2'];
    $cutoff2 = $_POST['cutoff2'];
    $totalhonorarium = $rateperhour2 * $cutoff2;

    /*Otherincome*/
    $rateperhour3 = $_POST['rateperhour3'];
    $cutoff3 = $_POST['cutoff3'];
    $totalotherincome = $rateperhour3 * $cutoff3;

     /*Income Summary*/
     $gross_income = $incomepercutoff + $totalhonorarium+$totalotherincome;
     
     $tax = $gross_income * 0.10;
     $sss_contribution = $gross_income * 0.10;
     $pagibig = 100;
     $philhealth = 100;
      

               

                
     /*Other Deductions*/
     $sssloan = $_POST['sssloan'];
     $pagibigloan = $_POST['pagibigloan'];
     $facultysavingsdeposit = $_POST['facultysavingsdeposit'];
     $facultysavingsloan = $_POST['facultysavingsloan'];
     $salaryloan = $_POST['salaryloan'];


     $totaldeductions = (float)$sss_contribution + (float)$philhealth + (float)$pagibig+ (float)$tax+ (float)$sssloan + (float)$pagibigloan + (float)$facultysavingsdeposit + (float)$facultysavingsloan + (float)$salaryloan ; 
                $netincome = (float)$gross_income - (float)$totaldeductions; 

}
elseif (isset($_POST['new'])) {
   /*Basic Pay*/  
    $rateperhour="";
    $incomepercutoff="";
    $cutoff=""; 


    /*Honorarium*/
    $rateperhour="";
    $cutoff2="" ;
    $totalhonorarium="";

    /*Income Summary*/
    $gross_income = "";
    $netincome ="";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Payslip Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style12.css">
</head>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <body style="background-color: orange">
    <header>
    <ul>
      <li><img src="" alt=""></li>
      <li><a href="webpage1modified.php" class="active">Menu</a></li>
      <li><a href="Web12.php">Payslip form</a></li>
      <li><a href="Webpage3.php">Point of sale</a></li>
      <li id="contact"><a href="Home.php">Log Out</a></li>
    </ul>
  </header>

    <CENTER><u><h1>Employee's Payslip Form</h1></u></CENTER>
    <div class="column left">
        <div class="right1">
            <fieldset style="width: 750px; background:#f2d3bc;">
            <legend align="center"><h4>EMPLOYEE'S PERSONAL INFORMATION</h4></legend>
            <label for="price">Employee Number: &nbsp;&nbsp;&nbsp;
            <input type="text" name="empnumber" size="20" value="<?php echo $empnumber; ?>">&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="price">Number of Dependent(s):&nbsp;&nbsp;
            <input type="text" name="numberofdependents" size="20" value="<?php echo $numberofdependents; ?>"></label><br><br>
        
            <label for="price">First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="fname" size="20" value="<?php echo $fname; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="price">Paydate: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" name="paydate" style="width: 165px;" value="<?php echo $paydate; ?>"></label><br><br>

            <label for="price">Middle Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="mname" size="20" value="<?php echo $mname; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="price">Employee Status: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="empstatus" size="20" value="<?php echo $empstatus; ?>"></label><br><br>

            <label for="price">Surname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="sname" size="20" value="<?php echo $sname; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="price">Department: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="department1" size="20" value="<?php echo $department1; ?>"></label><br><br>

            <label for="price">Civil Status: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="civilstatus" size="20" value="<?php echo $civilstatus; ?>"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <label for="price">Qualified Dependents:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="qualified_dependent_status" size="20" value="<?php echo $qualified_dependent_status; ?>"><br><br>

            <label for="price">Designation: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="designation" size="20" value="<?php echo $designation; ?>"></label><br>
        </fieldset>
    </div>
    <br><br>

    <p class="box">
        <img src="woman1.jpg" alt="image" width="250" height="250">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button> Choose image</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br><br>
    <div class=regular>
    <fieldset style="background:#f2d3bc;">
    <legend align="center"><u><h4>REGULAR DEDUCTIONS</h4></legend></u>
        <label for="sss">SSS Contribution: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <br><input type="text" disabled="disabled" id="sss_contribution" name="sss_contribution" value="<?php echo($sss_contribution) ?>"> <br><br>

        <label for="philhealth">PhilHealth Contribution: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <br><input type="text" disabled="disabled"  id="philhealth" name="philhealth" value="<?php echo($philhealth) ?>">  <br><br>

        <label for="pagibig">Pagibig Contribution:  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
        <br><input type="text"  disabled="disabled" id="pagibig" name="pagibig" value="<?php echo($pagibig) ?>" >  <br><br>

        <label for="tax">Tax:  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" disabled="disabled"  id="tax" name="tax" value="<?php echo($tax) ?>">  <br><br>
    </fieldset>

    <fieldset  style="background:#f2d3bc;">
    <legend align="center"><u><h4>OTHER DEDUCTIONS</h4></legend></u>
        <label for="sssloan"> SSS Loan:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
        <br><input type="text" id="sssloan" name="sssloan" value="<?php echo($sssloan) ?>">  <br><br>

        <label for="pagibigloan">Pagibig Loan:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
        <br><input type="text"  id="pagibigloan" name="pagibigloan" value="<?php echo($pagibigloan) ?>"> <br><br>

        <label for="facultysavingsdeposit">Faculty Savings Deposit: &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <br><input type="text"  id="facultysavingsdeposit" name="facultysavingsdeposit" value="<?php echo($facultysavingsdeposit) ?>">  <br><br>

        <label for="facultysavingsloan">Faculty Savings Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <br><input type="text" id="facultysavingsloan" name="facultysavingsloan" value="<?php echo($facultysavingsloan) ?>">  <br><br>

        <label for="salaryloan">Salary Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <br><input type="text"  id="salaryloan" name="salaryloan" value="<?php echo($salaryloan) ?>"> <br><br>

        <label for="Others">Others: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" disabled="disabled" id="otherdeductions" name="otherdeductions" > 
    </fieldset>

    <fieldset  style="background:#f2d3bc;" >
        <legend align="center"><u><h4>DEDUCTION SUMMARY</h4></legend></u>
        <label for="totaldeductions">Total Deductions:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <br><input type="number" id="totaldeductions" disabled name="totaldeductions" value="<?php echo($totaldeductions) ?>"><br>
    </fieldset>
    </div>

    <div class="field">
    <fieldset  style="background:#f2d3bc;">
        <legend align="center"><u><h4>BASIC PAY</h4></legend></u>
        <label for="rateperhour">Rate / Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <br><input type="number" id="rateperhour / Hour" name="rateperhour" value="<?php echo($rateperhour) ?>"><br><br>
        
        <label for="cutoff">No. of Hours / Cut off:&nbsp;&nbsp;&nbsp;&nbsp;</label>
       <br> <input type="number" id="cutoff" name="cutoff" value="<?php echo($cutoff) ?>"> <br><br>

        <label for="incomepercutoff">Income Per Cut Off:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>   
        <input type="number" disabled="disable" id="incomepercutoff" name="incomepercutoff" value="<?php echo($incomepercutoff) ?>"> <br><br>
    </fieldset>

    <fieldset  style="background:#f2d3bc;">
        <legend align="center"><u><h4>HONORARIUM</h4></legend></u>
    
        <label for="rateperhour2">Rate / Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <br><input type="number" id="rateperhour2" name="rateperhour2" value="<?php echo($rateperhour2) ?>"> <br><br>
        
        <label for="cutoff2">No. of Hours/ Cut off: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
        <br><input type="number" id="cutoff2" name="cutoff2" value="<?php echo($cutoff2)?>"> <br><br>
        
        <label for="totalhonorarium">Total Honorarium Pay: &nbsp;&nbsp;&nbsp;</label>    
        <input type="number" disabled="disable" id="totalhonorarium" name="totalhonorarium" value="<?php echo($totalhonorarium) ?>"> <br><br>
    </fieldset>   

    <fieldset  style="background:#f2d3bc;">
        <legend align="center"><u><h4>OTHER INCOME</h4></legend></u>
        <label for="rateperhour3">Rate / Hour:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <br><input type="number" id="rateperhour3" name="rateperhour3" value="<?php echo($rateperhour3) ?>"><br><br>
        
        <label for="cutoff3">No. of Hours/ Cut off:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>   
        <br><input type="number" id="cutoff3" name="cutoff3" value="<?php echo($cutoff3) ?>"> <br><br>
        
        <label for="totalotherincome">Total Other Income Pay: </label>   
        <input type="number" disabled="disable" id="totalotherincome" name="totalotherincome" value="<?php echo($totalotherincome) ?>"> <br><br>
    </fieldset>

    <fieldset  style="background:#f2d3bc;">
        <legend align="center"><u><h4>INCOME SUMMARY</h4></legend></u>

        <label >Gross Income: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <br><input type="text" disabled="disable" id="gross_income" name="gross_income" value="<?php echo($gross_income) ?>"> <br><br>

        <label>Net Income:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
        <br><input type="text" disabled="disable" id="netincome" name="netincome" value="<?php echo($netincome) ?>"> <br><br>
    </fieldset>
    </div>
    <br>

    <div class="buttons">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <button class="button1"  name="calculate" id="calculate">CALCULATE GROSS INCOME</button> 
        <button class="button1" name="net" id="net" >CALCULATE NET INCOME</button>
        <button class="button1" name="new" id="new" >NEW</button>
        <button class="button1">CANCEL</button>      
        <button class="button1">PRINT PAYSLIP</button>  
        <button class="button1">PREVIEW PAYSLIP DETAILS</button>
        <button class="button1">EXIT</button>
    
</div>
</div>

</body>
</html>