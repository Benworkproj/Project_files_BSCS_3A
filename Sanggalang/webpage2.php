
<!DOCTYPE html>
<html>
<head>
  <title>Payslip form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body style="background-color: orange">
  <header>
    <ul>
      <li><img src="pizza.png" alt="logo"></li>
      <li><a href="#" class="active">Menu</a></li>
      <li><a href="#">Payslip form</a></li>
      <li><a href="Webpage3.php">Point of sale</a></li>
      <li id="contact"><a href="Home.php">Log Out</a></li>
    </ul>
  </header>
<form method="post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);>
    <CENTER><h1><U>EMPLOYEE'S PAYSLIP FORM</h1></U></CENTER>
 <div class="column left">
  <div class="right1">
      
      <form>
  <fieldset style="width: 700px; background:#DEB887;">
   
    <label for="price">Employee Number:&nbsp;&nbsp;&nbsp; 
    <input type="text" name="empnumber" size="20" value="<?php echo $empnumber; ?>">
    <label for="price">Number of Dependent(s):&nbsp;&nbsp;&nbsp;
    <input type="text" name="numberofdependents" size="20" value="<?php echo $numberofdependents; ?>"><br><br>
    <label for="price">First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="fname" size="20" value="<?php echo $fname; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <label for="price">Paydate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date" name="paydate" style="width: 265px;" value="<?php echo $paydate; ?>"><br><br>
    </label>
    <label for="price">Middle Name:&nbsp;&nbsp;&nbsp;
    <input type="text" name="mname" size="20" value="<?php echo $mname; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="price">Employee Status:&nbsp;&nbsp;&nbsp;
    <input type="text" name="empstatus" size="20" value="<?php echo $empstatus; ?>"> 
    </label><br><br>

    <label for="price">Surname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="text" name="sname" size="20" value="<?php echo $sname; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="price">Department:&nbsp;&nbsp;&nbsp;
   <input type="text" name="department1" size="20" value="<?php echo $department1; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label><br><br>
    <label for="price">Civil Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="civilstatus" size="20" value="<?php echo $civilstatus; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
    <label for="price">Qualified Dependents:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="qualified_dependent_status" size="20" value="<?php echo $qualified_dependent_status; ?>">
    <br><br>
    <label for="price">Designation:&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="designation" size="20" value="<?php echo $designation; ?>">
    </label><br>

  
    </label>
</fieldset>
</div>
<p class="box">
  <img src="woman.jpg" alt="image" width="250" height="235">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button><center>Browse</center></button>
  <br><br><br><br><br><br><Br><br><br><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class=regular>
  <fieldset style="background:#DEB887;">
   <legend><center><h4>REGULAR DEDUCTIONS</h4></center></legend>
 <label for="sss">SSS Contribution: </label>    
  <input type="text" disabled="disabled" id="sss_contribution" name="sss_contribution" value="<?php echo($sss_contribution) ?>"> <br><br>

  <label for="philhealth">PhilHealth Contribution: </label>    
  <input type="text" disabled="disabled"  id="philhealth" name="philhealth" value="<?php echo($philhealth) ?>">  <br><br>

  <label for="pagibig">Pagibig Contribution:</label> 
  <input type="text"  disabled="disabled" id="pagibig" name="pagibig" value="<?php echo($pagibig) ?>" >  <br><br>

  <label for="tax">Tax:</label>
  <input type="text" disabled="disabled"  id="tax" name="tax" value="<?php echo($tax) ?>">  <br><br>
</fieldset>
 <fieldset  style="background:#DEB887;">
   <legend><h4>OTHER DEDUCTIONS</h4></legend>
     <label for="sssloan"> SSS Loan:   </label>  
  <input type="text" id="sssloan" name="sssloan" value="<?php echo($sssloan) ?>">  <br><br>

  <label for="pagibigloan">Pagibig Loan:    </label> 
  <input type="text"  id="pagibigloan" name="pagibigloan" value="<?php echo($pagibigloan) ?>"> <br><br>

  <label for="facultysavingsdeposit">Faculty Savings Deposit: </label>
  <input type="text"  id="facultysavingsdeposit" name="facultysavingsdeposit" value="<?php echo($facultysavingsdeposit) ?>">  <br><br>

  <label for="facultysavingsloan">Faculty Savings Loan: </label>
  <input type="text" id="facultysavingsloan" name="facultysavingsloan" value="<?php echo($facultysavingsloan) ?>">  <br><br>

  <label for="salaryloan">Salary Loan: </label>
  <input type="text"  id="salaryloan" name="salaryloan" value="<?php echo($salaryloan) ?>"> <br><br>

  <label for="Others">Others: </label>
  <input type="text" disabled="disabled" id="otherdeductions" name="otherdeductions" >  <br><br>
</fieldset>
  <fieldset  style="background:#DEB887;" >
   <legend><h4>DEDUCTION SUMMARY</h4></legend>
   <label for="totaldeductions">Total Deductions:  </label>   
  <input type="number" id="totaldeductions" disabled name="totaldeductions" value="<?php echo($totaldeductions) ?>">  <br><br>
</fieldset>
</div>
 <div class="field">
  <fieldset  style="background:#DEB887;">
   <legend><h4>BASIC PAY</h4></legend>
  <label for="rateperhour">Rate / Hour: </label>
  <input type="number" id="rateperhour / Hour" name="rateperhour" value="<?php echo($rateperhour) ?>"><br><br>
  
  <label for="cutoff">No. of Hours / Cut off: </label>
  <input type="number" id="cutoff" name="cutoff" value="<?php echo($cutoff) ?>"> <br><br>

  <label for="incomepercutoff">Income Per Cut Off:  </label>   
  <input type="number" disabled="disable" id="incomepercutoff" name="incomepercutoff" value="<?php echo($incomepercutoff) ?>"> <br><br>

</fieldset>

  <fieldset  style="background:#DEB887;">
   <legend><h4>HONORARIUM</h4></legend>
  
  <label for="rateperhour2">Rate / Hour: </label>    
  <input type="number" id="rateperhour2" name="rateperhour2" value="<?php echo($rateperhour2) ?>"> <br><br>
  
  <label for="cutoff2">No. of Hours/ Cut off: </label> 
  <input type="number" id="cutoff2" name="cutoff2" value="<?php echo($cutoff2)?>"> <br><br>
  
  <label for="totalhonorarium">Total Honorarium Pay: </label>    
  <input type="number" disabled="disable" id="totalhonorarium" name="totalhonorarium" value="<?php echo($totalhonorarium) ?>"> <br><br>

</fieldset>   


  <fieldset  style="background:#DEB887;">
   <legend><h4>OTHER INCOME</h4></legend>
 <label for="rateperhour3">Rate / Hour: </label>    
  <input type="number" id="rateperhour3" name="rateperhour3" value="<?php echo($rateperhour3) ?>"><br><br>
  
  <label for="cutoff3">No. of Hours/ Cut off:  </label>   
  <input type="number" id="cutoff3" name="cutoff3" value="<?php echo($cutoff3) ?>"> <br><br>
  
  <label for="totalotherincome">Total Other Income Pay:   </label>   
  <input type="number" disabled="disable" id="totalotherincome" name="totalotherincome" value="<?php echo($totalotherincome) ?>"> <br><br>


</fieldset>

  </form>

   <form>
  <fieldset  style="background:#DEB887;">
   <legend><h4>INCOME SUMMARY</h4></legend>

  <label >GROSS INCOME: </label>    
  <input type="text" disabled="disable" id="gross_income" name="gross_income" value="<?php echo($gross_income) ?>"> <br><br>

  <label>NET INCOME:  </label>  
  <input type="text" disabled="disable" id="netincome" name="netincome" value="<?php echo($netincome) ?>"> <br><br>
</fieldset>
  </form>
</div>
<br>
<div class="buttons">
        <button class="button1"  name="calculate" id="calculate">CALCULATE GROSS INCOME</button> 
     <button class="button5" name="net" id="net" >CALCULATE NET INCOME</button>
    <button class="button3" name="new" id="new" >NEW</button>
   <button class="button3">CANCEL</button>      
 <button class="button4">PRINT PAYSLIP</button>  
 <button class="button5">PREVIEW PAYSLIP DETAILS</button> 
 <button class="button6">EXIT</button></div> <br><br>
</div>
</div>

</body>
</html>