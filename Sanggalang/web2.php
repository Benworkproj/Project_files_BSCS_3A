<?php
		$empnumber="123456 "; 
		$numberofdependents="2";
		$empstatus="Job Order"; 
		$department1="Department of Information Technology";
		$paydate="March 30, 2021"; 

		$fname="HAYAG"; 
		$mname="ENRIQUEZ"; 
		$sname="MIKE BAEL"; 
		$civilstatus="Single"; 
		$designation="WorkingStudent"; 
		$qualified_dependent_status="ME"; 

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

    //sss contribution                 
                if($gross_income>= 1000 && $gross_income<=1249){ 
                    $sss_contribution=73.70; 
                } else if($gross_income>=1250 && $gross_income<=1749){                     
                    $sss_contribution=110.50; 
                } else if($gross_income>=1750 && $gross_income<=2249){ 
                    $sss_contribution=147.30; 
                } else if($gross_income>=2250 && $gross_income<=2749.99){                     
                    $sss_contribution=184.20; 
                } else if($gross_income>=2750 && $gross_income<=3249.99){                     
                    $sss_contribution=221.00; 
                } else if($gross_income>=3250 && $gross_income<=3749.99){                     
                    $sss_contribution=257.80; 
                } else if($gross_income>=3750 && $gross_income<=4249.99){                     
                    $sss_contribution=294.70; 
                } else if($gross_income>=4250 && $gross_income<=4749.99){                     
                    $sss_contribution=331.50; 
                } else if($gross_income>=4750 && $gross_income<=5249.99){                     
                    $sss_contribution=368.30; 
                } else if($gross_income>=5250 && $gross_income<=5749.99){                     
                    $sss_contribution=405.20; 
                } else if($gross_income>=5750 && $gross_income<=6249.99){                     
                    $sss_contribution=442.00; 
                } else if($gross_income>=6250 && $gross_income<=6749.99){                     
                    $sss_contribution=478.80; 
                } else if($gross_income>=6750 && $gross_income<=7249.99){ 
                    $sss_contribution=515.70; 
                } else if($gross_income>=7250 && $gross_income<=7749.99){ 
                    $sss_contribution=552.50; 
                } else if($gross_income>=7750 && $gross_income<=8249.99){ 
                    $sss_contribution=589.30; 
                } else if($gross_income>=8250 && $gross_income<=8749.99){                     
                    $sss_contribution=626.20; 
                } else if($gross_income>=8750 && $gross_income<=9249.99){ 
                    $sss_contribution=663.00; 
                } else if($gross_income>=9250 && $gross_income<=9749.99){ 
                    $sss_contribution=699.80; 
                } else if($gross_income>=9750 && $gross_income<=10249.99){ 
                    $sss_contribution=736.70; 
                } else if($gross_income>=10250 && $gross_income<=10749.99){                     
                    $sss_contribution=773.50; 
                } else if($gross_income>=10750 && $gross_income<=11249.99){ 
                    $sss_contribution=810.30; 
                } else if ($gross_income>=11250 && $gross_income<=11749.99){ 
                    $sss_contribution=847.20; 
                } else if($gross_income>=11750 && $gross_income<=12249.99){ 
                    $sss_contribution=884.00; 
                } else if($gross_income>=12250 && $gross_income<=12749.99){                     
                    $sss_contribution=920.80; 
                } else if($gross_income>=12750 && $gross_income<=13249.99){ 
                    $sss_contribution=957.70; 
                } else if($gross_income>=13250 && $gross_income<=13749.99){                     
                    $sss_contribution=994.50; 
                } else if($gross_income>=13750 && $gross_income<=14249.99){ 
                    $sss_contribution=1031.30; 
                } else if($gross_income>=14250 && $gross_income<=14749.99){                     
                    $sss_contribution=1068.20; 
                } else if($gross_income>=14750 && $gross_income<=15249.99){ 
                    $sss_contribution=1105.00; 
                } else if($gross_income>=15250 && $gross_income<=15749.99){ 
                    $sss_contribution=1141.80;    
                } else{ 
                    $sss_contribution=1178.70; 
                } 


                //PHILHEALTH TABLE CONTRIBUTIIOM
                 if($gross_income<=8999.99 && $gross_income>=0){ 
                    $philhealth=100.00; 
                } else if($gross_income>=9000 && $gross_income<=9999.99){ 
                    $philhealth=112.50; 
                } else if($gross_income>=10000 && $gross_income<=10999.99){                     
                    $philhealth=125.00; 
                } else if($gross_income>=11000 && $gross_income<=11999.99){                     
                    $philhealth=137.50; 
                } else if($gross_income>=12000 && $gross_income<=12999.99){                     
                    $philhealth=150.00; 
                } else if($gross_income>=13000 && $gross_income<=13999.99){                     
                    $philhealth=162.50; 
                } else if($gross_income>=14000 && $gross_income<=14999.99){                     
                    $philhealth=175.00; 
                } else if($gross_income>=15000 && $gross_income<=15999.99){ 
                    $philhealth=187.50; 
                } else if($gross_income>=16000 && $gross_income<=16999.99){                     
                    $philhealth=200.00; 
                } else if($gross_income>=17000 && $gross_income<=17999.99){ 
                    $philhealth=212.50; 
                } else if($gross_income>=18000 && $gross_income<=18999.99){                     
                    $philhealth=225.00; 
                } else if($gross_income>=19000 && $gross_income<=19999.99){ 
                    $philhealth=237.50; 
                } else if($gross_income>=20000 && $gross_income<=20999.99){                     
                    $philhealth=250.00; 
                } else if($gross_income>=21000 && $gross_income<=21999.99){ 
                    $philhealth=262.50; 
                } else if($gross_income>=22000 && $gross_income<=22999.99){                     
                    $philhealth=275.00; 
                } else if($gross_income>=23000 && $gross_income<=23999.99){ 
                    $philhealth=287.50; 
                } else if($gross_income>=24000 && $gross_income<=24999.99){ 
                    $philhealth=300.00; 
                } else if ($gross_income>=25000 && $gross_income<=25999.99){ 
                    $philhealth=312.50; 
                } else if($gross_income>=26000 && $gross_income<=26999.99){                     
                    $philhealth=325.00; 
                } else if($gross_income>=27000 && $gross_income<=27999.99){ 
                    $philhealth=337.50; 
                } else if($gross_income>=28000 && $gross_income<=28999.99){ 
                    $philhealth=350.00; 
                } else if ($gross_income>=29000 && $gross_income<=29999.99){ 
                    $philhealth=362.50; 
                } else if ($gross_income>=30000 && $gross_income<=30999.99){ 
                    $philhealth=375.00; 
                } else if($gross_income>=31000 && $gross_income<=31999.99){ 
                    $philhealth=387.50; 
                } else if($gross_income>=32000 && $gross_income<=32999.99){                     
                    $philhealth=400.00; 
                } else if($gross_income>=33000 && $gross_income<=33999.99){ 
                    $philhealth=412.50; 
                } else if($gross_income>=34000 && $gross_income<=34999.99){ 
                    $philhealth=425.00;                 
                } else{ 
                    $philhealth=437.50; 
                } 

                //PAGIBIG CONTRIBUTION
                $pagibig=100.00;

                //tax CONTRIBUTION
                  if($gross_income<=150 && $gross_income>=12500){ 
                        $tax=(($gross_income-0) + 0); 
                    } else if($gross_income>=12501 && $gross_income<=13333){                         
                        $tax=((($gross_income-12500)*.05) + 0); 
                    } else if($gross_income>=13334 && $gross_income<=15000){                         
                        $tax=((($gross_income-13333)*.10) + 41.67); 
                    } else if($gross_income>=15001 && $gross_income<=18333){                         
                        $tax=((($gross_income-15001)*.15) + 208.33); 
                    } else if($gross_income>=18334 && $gross_income<=24167){                         
                        $tax=((($gross_income-18333)*.20) + 708.33); 
                    } else if($gross_income>=24168 && $gross_income<=33333){                         
                        $tax=((($gross_income-24167)*.25) + 1875); 
                    } else if($gross_income>=33334 && $gross_income<=54167){ 
                        $tax=((($gross_income-33333)*.30) + 4166.67); 
                    } else{ 
                        $tax=((($gross_income-54167)*.32) + 10416.67); 
                    } 
     
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

      if($gross_income>= 1000 && $gross_income<=1249){ 
                    $sss_contribution=73.70; 
                } else if($gross_income>=1250 && $gross_income<=1749){                     
                    $sss_contribution=110.50; 
                } else if($gross_income>=1750 && $gross_income<=2249){ 
                    $sss_contribution=147.30; 
                } else if($gross_income>=2250 && $gross_income<=2749.99){                     
                    $sss_contribution=184.20; 
                } else if($gross_income>=2750 && $gross_income<=3249.99){                     
                    $sss_contribution=221.00; 
                } else if($gross_income>=3250 && $gross_income<=3749.99){                     
                    $sss_contribution=257.80; 
                } else if($gross_income>=3750 && $gross_income<=4249.99){                     
                    $sss_contribution=294.70; 
                } else if($gross_income>=4250 && $gross_income<=4749.99){                     
                    $sss_contribution=331.50; 
                } else if($gross_income>=4750 && $gross_income<=5249.99){                     
                    $sss_contribution=368.30; 
                } else if($gross_income>=5250 && $gross_income<=5749.99){                     
                    $sss_contribution=405.20; 
                } else if($gross_income>=5750 && $gross_income<=6249.99){                     
                    $sss_contribution=442.00; 
                } else if($gross_income>=6250 && $gross_income<=6749.99){                     
                    $sss_contribution=478.80; 
                } else if($gross_income>=6750 && $gross_income<=7249.99){ 
                    $sss_contribution=515.70; 
                } else if($gross_income>=7250 && $gross_income<=7749.99){ 
                    $sss_contribution=552.50; 
                } else if($gross_income>=7750 && $gross_income<=8249.99){ 
                    $sss_contribution=589.30; 
                } else if($gross_income>=8250 && $gross_income<=8749.99){                     
                    $sss_contribution=626.20; 
                } else if($gross_income>=8750 && $gross_income<=9249.99){ 
                    $sss_contribution=663.00; 
                } else if($gross_income>=9250 && $gross_income<=9749.99){ 
                    $sss_contribution=699.80; 
                } else if($gross_income>=9750 && $gross_income<=10249.99){ 
                    $sss_contribution=736.70; 
                } else if($gross_income>=10250 && $gross_income<=10749.99){                     
                    $sss_contribution=773.50; 
                } else if($gross_income>=10750 && $gross_income<=11249.99){ 
                    $sss_contribution=810.30; 
                } else if ($gross_income>=11250 && $gross_income<=11749.99){ 
                    $sss_contribution=847.20; 
                } else if($gross_income>=11750 && $gross_income<=12249.99){ 
                    $sss_contribution=884.00; 
                } else if($gross_income>=12250 && $gross_income<=12749.99){                     
                    $sss_contribution=920.80; 
                } else if($gross_income>=12750 && $gross_income<=13249.99){ 
                    $sss_contribution=957.70; 
                } else if($gross_income>=13250 && $gross_income<=13749.99){                     
                    $sss_contribution=994.50; 
                } else if($gross_income>=13750 && $gross_income<=14249.99){ 
                    $sss_contribution=1031.30; 
                } else if($gross_income>=14250 && $gross_income<=14749.99){                     
                    $sss_contribution=1068.20; 
                } else if($gross_income>=14750 && $gross_income<=15249.99){ 
                    $sss_contribution=1105.00; 
                } else if($gross_income>=15250 && $gross_income<=15749.99){ 
                    $sss_contribution=1141.80;    
                } else{ 
                    $sss_contribution=1178.70; 
                } 
                 
         //PHILHEALTH TABLE CONTRIBUTIIOM
                  if($gross_income<=8999.99 && $gross_income>=0){ 
                    $philhealth=100.00; 
                } else if($gross_income>=9000 && $gross_income<=9999.99){ 
                    $philhealth=112.50; 
                } else if($gross_income>=10000 && $gross_income<=10999.99){                     
                    $philhealth=125.00; 
                } else if($gross_income>=11000 && $gross_income<=11999.99){                     
                    $philhealth=137.50; 
                } else if($gross_income>=12000 && $gross_income<=12999.99){                     
                    $philhealth=150.00; 
                } else if($gross_income>=13000 && $gross_income<=13999.99){                     
                    $philhealth=162.50; 
                } else if($gross_income>=14000 && $gross_income<=14999.99){                     
                    $philhealth=175.00; 
                } else if($gross_income>=15000 && $gross_income<=15999.99){ 
                    $philhealth=187.50; 
                } else if($gross_income>=16000 && $gross_income<=16999.99){                     
                    $philhealth=200.00; 
                } else if($gross_income>=17000 && $gross_income<=17999.99){ 
                    $philhealth=212.50; 
                } else if($gross_income>=18000 && $gross_income<=18999.99){                     
                    $philhealth=225.00; 
                } else if($gross_income>=19000 && $gross_income<=19999.99){ 
                    $philhealth=237.50; 
                } else if($gross_income>=20000 && $gross_income<=20999.99){                     
                    $philhealth=250.00; 
                } else if($gross_income>=21000 && $gross_income<=21999.99){ 
                    $philhealth=262.50; 
                } else if($gross_income>=22000 && $gross_income<=22999.99){                     
                    $philhealth=275.00; 
                } else if($gross_income>=23000 && $gross_income<=23999.99){ 
                    $philhealth=287.50; 
                } else if($gross_income>=24000 && $gross_income<=24999.99){ 
                    $philhealth=300.00; 
                } else if ($gross_income>=25000 && $gross_income<=25999.99){ 
                    $philhealth=312.50; 
                } else if($gross_income>=26000 && $gross_income<=26999.99){                     
                    $philhealth=325.00; 
                } else if($gross_income>=27000 && $gross_income<=27999.99){ 
                    $philhealth=337.50; 
                } else if($gross_income>=28000 && $gross_income<=28999.99){ 
                    $philhealth=350.00; 
                } else if ($gross_income>=29000 && $gross_income<=29999.99){ 
                    $philhealth=362.50; 
                } else if ($gross_income>=30000 && $gross_income<=30999.99){ 
                    $philhealth=375.00; 
                } else if($gross_income>=31000 && $gross_income<=31999.99){ 
                    $philhealth=387.50; 
                } else if($gross_income>=32000 && $gross_income<=32999.99){                     
                    $philhealth=400.00; 
                } else if($gross_income>=33000 && $gross_income<=33999.99){ 
                    $philhealth=412.50; 
                } else if($gross_income>=34000 && $gross_income<=34999.99){ 
                    $philhealth=425.00;                 
                } else{ 
                    $philhealth=437.50; 
                } 


                //PAGIBIG CONTRIBUTION
                  $pagibig=100.00;
         //for single or married with qualified dependents                 
                    if($gross_income<=150 && $gross_income>=12500){ 
                        $tax=(($gross_income-0) + 0); 
                    } else if($gross_income>=12501 && $gross_income<=13333){                         
                        $tax=((($gross_income-12500)*.05) + 0); 
                    } else if($gross_income>=13334 && $gross_income<=15000){                         
                        $tax=((($gross_income-13333)*.10) + 41.67); 
                    } else if($gross_income>=15001 && $gross_income<=18333){                         
                        $tax=((($gross_income-15001)*.15) + 208.33); 
                    } else if($gross_income>=18334 && $gross_income<=24167){                         
                        $tax=((($gross_income-18333)*.20) + 708.33); 
                    } else if($gross_income>=24168 && $gross_income<=33333){                         
                        $tax=((($gross_income-24167)*.25) + 1875); 
                    } else if($gross_income>=33334 && $gross_income<=54167){ 
                        $tax=((($gross_income-33333)*.30) + 4166.67); 
                    } else{ 
                        $tax=((($gross_income-54167)*.32) + 10416.67); 
                    } 

                
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
  <title>Webpage 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style6.css">
</head>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<body style="background:url(bg4.jpg); background-repeat: no-repeat; background-size:100% 100%">

    <CENTER><h1>PAYROLL FORM</h1></CENTER>
    <div class="column left">
        <div class="right1">
            <fieldset style="width: 750px; background:#f2d3bc;">
            <legend><h4>EMPLOYEE'S INFORMATION</h4></legend>
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
        <img src="pro.png" alt="image" width="250" height="250">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button> Choose File</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br><br>
    <div class=regular>
    <fieldset style="background:#f2d3bc;">
    <legend><h4>REGULAR DEDUCTIONS</h4></legend>
        <label for="sss">SSS Contribution: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <input type="text" disabled="disabled" id="sss_contribution" name="sss_contribution" value="<?php echo($sss_contribution) ?>"> <br><br>

        <label for="philhealth">PhilHealth Contribution: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <input type="text" disabled="disabled"  id="philhealth" name="philhealth" value="<?php echo($philhealth) ?>">  <br><br>

        <label for="pagibig">Pagibig Contribution:  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
        <input type="text"  disabled="disabled" id="pagibig" name="pagibig" value="<?php echo($pagibig) ?>" >  <br><br>

        <label for="tax">Tax:  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" disabled="disabled"  id="tax" name="tax" value="<?php echo($tax) ?>">  <br><br>
    </fieldset>

    <fieldset  style="background:#f2d3bc;">
    <legend><h4>OTHER DEDUCTIONS</h4></legend>
        <label for="sssloan"> SSS Loan:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
        <input type="text" id="sssloan" name="sssloan" value="<?php echo($sssloan) ?>">  <br><br>

        <label for="pagibigloan">Pagibig Loan:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
        <input type="text"  id="pagibigloan" name="pagibigloan" value="<?php echo($pagibigloan) ?>"> <br><br>

        <label for="facultysavingsdeposit">Faculty Savings Deposit: &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text"  id="facultysavingsdeposit" name="facultysavingsdeposit" value="<?php echo($facultysavingsdeposit) ?>">  <br><br>

        <label for="facultysavingsloan">Faculty Savings Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" id="facultysavingsloan" name="facultysavingsloan" value="<?php echo($facultysavingsloan) ?>">  <br><br>

        <label for="salaryloan">Salary Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text"  id="salaryloan" name="salaryloan" value="<?php echo($salaryloan) ?>"> <br><br>

        <label for="Others">Others: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" disabled="disabled" id="otherdeductions" name="otherdeductions" >  <br><br>
    </fieldset>

    <fieldset  style="background:#f2d3bc;" >
        <legend><h4>DEDUCTION SUMMARY</h4></legend>
        <label for="totaldeductions">Total Deductions:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>   
        <input type="number" id="totaldeductions" disabled name="totaldeductions" value="<?php echo($totaldeductions) ?>">  <br><br>
    </fieldset>
    </div>

    <div class="field">
    <fieldset  style="background:#f2d3bc;">
        <legend><h4>BASIC PAY</h4></legend>
        <label for="rateperhour">Rate / Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number" id="rateperhour / Hour" name="rateperhour" value="<?php echo($rateperhour) ?>"><br><br>
        
        <label for="cutoff">No. of Hours / Cut off:&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number" id="cutoff" name="cutoff" value="<?php echo($cutoff) ?>"> <br><br>

        <label for="incomepercutoff">Income Per Cut Off:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>   
        <input type="number" disabled="disable" id="incomepercutoff" name="incomepercutoff" value="<?php echo($incomepercutoff) ?>"> <br><br>
    </fieldset>

    <fieldset  style="background:#f2d3bc;">
        <legend><h4>HONORARIUM</h4></legend>
    
        <label for="rateperhour2">Rate / Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <input type="number" id="rateperhour2" name="rateperhour2" value="<?php echo($rateperhour2) ?>"> <br><br>
        
        <label for="cutoff2">No. of Hours/ Cut off: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
        <input type="number" id="cutoff2" name="cutoff2" value="<?php echo($cutoff2)?>"> <br><br>
        
        <label for="totalhonorarium">Total Honorarium Pay: &nbsp;&nbsp;&nbsp;</label>    
        <input type="number" disabled="disable" id="totalhonorarium" name="totalhonorarium" value="<?php echo($totalhonorarium) ?>"> <br><br>
    </fieldset>   

    <fieldset  style="background:#f2d3bc;">
        <legend><h4>OTHER INCOME</h4></legend>
        <label for="rateperhour3">Rate / Hour:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <input type="number" id="rateperhour3" name="rateperhour3" value="<?php echo($rateperhour3) ?>"><br><br>
        
        <label for="cutoff3">No. of Hours/ Cut off:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>   
        <input type="number" id="cutoff3" name="cutoff3" value="<?php echo($cutoff3) ?>"> <br><br>
        
        <label for="totalotherincome">Total Other Income Pay: </label>   
        <input type="number" disabled="disable" id="totalotherincome" name="totalotherincome" value="<?php echo($totalotherincome) ?>"> <br><br>
    </fieldset>

    <fieldset  style="background:#f2d3bc;">
        <legend><h4>INCOME SUMMARY</h4></legend>

        <label >GROSS INCOME: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
        <input type="text" disabled="disable" id="gross_income" name="gross_income" value="<?php echo($gross_income) ?>"> <br><br>

        <label>NET INCOME:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
        <input type="text" disabled="disable" id="netincome" name="netincome" value="<?php echo($netincome) ?>"> <br><br>
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
        <button class="button1">EXIT</button><br><br><br>
    </div>
</div>
</div>

</body>
</html>