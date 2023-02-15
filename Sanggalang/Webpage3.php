<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <title>Point of sales</title>
</head>
<body>
  <body style="background-color: orange;">
  <header>
    <ul>
      <li><img src="" alt=""></li>
      <li><a href="#" class="active">Menu</a></li>
      <li><a href="#">Payslip form</a></li>
      <li><a href="#">Point of sale</a></li>
      <li id="contact"><a href="Home.php">Log Out</a></li>
    </ul>
  </header>
<div class="row">
  <div class="column left">

  <br>
  <h3>ORDER DETAILS</h3>
  <div class="inputfield">
    <label>Name of an Item:</label>
    <input type="text" class="input" id="summary" name="summary" readonly> 
 </div>
  <label for="price">Price</br>
  <input type="text" id="price" name="price" readonly class="textfield">
  </label><br></br>
  <label for="quantity">Quantity<br>
  <input type="text" id="quantity" name="quantity" class="textfield">
  </label><br><br>
<div class="inputfield">
 <label>Discounts:</label>
 <div class="disc">
 <input type="radio" id="senior_disc" name="disc" class="discount"><label class="radiostyle">Senior Citizen</label>
 <input type="radio" id="card_disc" name="disc" class="discount"><label class="radiostyle">Discount Coupon</label>
 <input type="radio" id="emp_disc" name="disc" class="discount"><label class="radiostyle">Employee</label>
 <input type="radio" id="no_disc" name="disc" class="discount"><label class="radiostyle">No Discount</label>
 </div>
</div>
  <label for="price">Discount Amount<br>
  <input type="text" id="discount_amount" name="discount_amount" readonly class="textfield">
  </label><br><br>
  <label for="price">Discounted Amount<br>
  <input type="text" id="discounted_amount"name="discounted_amount"readonly class="textfield">
  </label><br><br>
  <label for="price">Total Bills<br>
  <input type="text" id="total_bills" name="total_bills"readonly class="textfield">
  </label><br><br>
  <label for="price">Total Quantity<br>
  <input type="text" id="total_quantity" name="total_quantity" readonly class="textfield">
  </label><br><br>
  <div class="inputfield">
    <label>Total Discount Given:</label>
    <input type="text" class="input" id="total_disc" name="total_discount" readonly>
 </div>
  <div class="inputfield">
      <label>Total Discounted Amount:</label>
      <input type="text" class="input" id="total_bills" name="total_bills" readonly>
  </div>
 
    <form action="" name="clc">
      <div class="cashname">
        <p>Cash Rendered:<p>
        <input type="text" class="type" id="cash_given" name="display" style="width: 260px; height: 30px; background-color: white;color: black;"><br>
      </div>
      
        <div class="cashname">
          <p>Change:<p>
        </div>
        <input type="text" class="type" id="change" name="change" style="width: 260px; height: 30px; background-color: white;color: black;"><br>
        <input class="btn" type="button" value="0" onclick="clc.display.value += '0'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="1" onclick="clc.display.value += '1'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="2" onclick="clc.display.value += '2'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="+" onclick="clc.display.value += '+'" style=" background-color: blue"><br>
        <input class="btn" type="button" value="3" onclick="clc.display.value += '3'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="4" onclick="clc.display.value += '4'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="5" onclick="clc.display.value += '5'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="-" onclick="clc.display.value += '-'" style="background-color: violet;"><br>
        <input class="btn" type="button" value="6" onclick="clc.display.value += '6'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="7" onclick="clc.display.value += '7'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="8" onclick="clc.display.value += '8'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="x" onclick="clc.display.value += '*'" style="background-color: pink;"><br>
        <input class="btn" type="button" value="9" onclick="clc.display.value += '9'" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="=" onclick="clc.display.value =eval(clc.display.value)" style=" background-color: #f3f3f2">
        <input class="btn" type="button" value="C" onclick="clc.display.value =''" style="background-color:#cc0000;">
        <input class="btn" type="button" value="&#247;" onclick="clc.display.value += '/'" style="background-color: green">

    </form>

          <button class="button" id="calculate" name="calculate">Calculate</button>
          <button class="button" id="changebutton" name="changebutton">Change</button>
          <button class="button" id="new" name="new">New</button>
          <button class="button" id="print" name="print">Print</button>
          <button class="button" id="exit" name="exit">Exit</button>

  </div>
  <div class="column right">
    
  
         
<br>

  </div>
  <div class="column center">
    <div class="gallery">
        <label class="product" for="order1">
              <img src="milktea1.jpg"><br>
            <input type="checkbox" name="order1"  id="order1" style="display: none">Okinawa</label>
         
        </label>
      </div>
      <div class="gallery">
        <label class="product" for="order2">
          <img src="milktea3.jpg"><br>
          <input type="checkbox" name="order2"  id="order2" style="display: none">Mango</label>
        </label>
      </div>
      <div class="gallery">
        <label class="product" for="order3">
            <img src="milktea4.jpg"><br>
            <input type="checkbox" name="order3"  id="order3" style="display: none">Chocolate</label>
        </label>
      </div>
      <div class="gallery">
        <label class="product" for="order4">
            <img src="milktea5.jpg"><br>
            <input type="checkbox" name="order4"  id="order4" style="display: none">Oreo</label>
        </label>
      </div>
      <div class="gallery">
        <label class="product" for="order5">
              <img src="milktea6.jpg"><br>
            <input type="checkbox" name="order5"  id="order5" style="display: none">Winter M</label>       
        </label>
      </div>
      <div class="gallery">
        <label class="product" for="order6">
            <img src="milktea7.jpg"><br>
            <input type="checkbox" name="order6"  id="order6" style="display: none">Strawberry</label>
          </label>
      </div>
        <div class="gallery">
        <label class="product" for="order7">
            <img src="milktea8.jpg"><br>
            <input type="checkbox" name="order7"  id="order7" style="display: none">Taro</label>
        </label>
      </div>
        <div class="gallery">
        <label class="product" for="order8">
            <img src="milktea9.jpg"><br>
            <input type="checkbox" name="order8"  id="order8" style="display: none">Red Velvet</label>
        </label>
      </div>
       <div class="gallery">
        <label class="product" for="order9">
              <img src="milktea10.jpg"><br>
            <input type="checkbox" name="order9"  id="order9" style="display: none">Ube</label>
        </label>
      </div>
      <div class="gallery">
        <label class="product" for="order10">
              <img src="milktea11.jpg"><br>
            <input type="checkbox" name="order10"  id="order10" style="display: none">Caramel</label>
        </label>
      </div>
      <br>
        <div class="gallery">
        <label class="product" for="order11">
              <img src="13.jpg"><br>
            <input type="checkbox" name="order11"  id="order11" style="display: none">Premium Donut A</label>
        </label>
      </div>
        <div class="gallery">
        <label class="product" for="order12">
            <img src="0.jpg"><br>
            <input type="checkbox" name="order12"  id="order12" style="display: none">Premium Donut B</label>
        </label>
      </div>
              <div class="gallery">
        <label class="product" for="order13">
            <img src="2.jpg"><br>
            <input type="checkbox" name="order13"  id="order13" style="display: none">Premium Donut C</label>
        </label>
      </div>
              <div class="gallery">
        <label class="product" for="order14">
            <img src="3.jpg"><br>
            <input type="checkbox" name="order14"  id="order14" style="display: none">Premium Donut D</label>
        </label>
      </div>
              <div class="gallery">
        <label class="product" for="order15">
            <img src="4.jpg"><br>
           <input type="checkbox" name="order15"  id="order15" style="display: none">Premium Donut E</label>
        </label>
      </div>
              <div class="gallery">
        <label class="product" for="order16">
            <img src="softdrinks.jpg"><br>
            <input type="checkbox" name="order16"  id="order16" style="display: none">Softdrinks</label>
        </label>
      </div>
              <div class="gallery">
        <label class="product" for="order17">
            <img src="coffee.jpg"><br>
            <input type="checkbox" name="order17"  id="order17" style="display: none">Hot Coffee</label>
        </label>
      </div>
                  <div class="gallery">
        <label class="product" for="order18">
            <img src="shake.jpg"><br>
            <input type="checkbox" name="order18"  id="order18" style="display: none">Shake</label>
        </label>
      </div>
              <div class="gallery">
        <label class="product" for="order19">
            <img src="juice1.jpg"><br>
            <input type="checkbox" name="order19"  id="order19" style="display: none">Juices</label>
        </label>
      </div>
              <div class="gallery">
        <label class="product" for="order20">
            <img src="coffe.jpg"><br>
            <input type="checkbox" name="order20"  id="order20" style="display: none">Iced Coffee</label>
        </label>
      </div>
</div>
</label>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  

$(document).ready(function() {

//DECLARATION OF GLOBAL VARIABLES

var price = 0;
var quantity = 0; 
var  discount_amount = 0;
var discounted_amount = 0;
var cash_given = 0;
var total_bills = 0;
var total_quantity = 0;



// FUNCTIONS FOR THE CHECKBOXES OF ITEMS
function price_ordersummary(price,summary) {
 document.getElementById("price").value = price;
 document.getElementById("summary").value = summary;
 document.getElementById("quantity").focus();
}
function price_ordersummary_empty(price,summary) {
 document.getElementById("price").value = "";
 document.getElementById("summary").value = "";
}

//FUNCTIONS FOR THE RADIO BUTTONS AND CHECKBOXES
function donut_bundle1(bundles1,bundles2,bundles3,donut2,bundle1,bundle2,
 bundle3) {

   $("#bundle1").prop( "checked", true );
   $("#bundle2").prop( "checked", true );
   $("#bundle3").prop( "checked", true );
   
   $("#donut2").prop("checked",false);
   $("#bundles1").prop( "checked", false );
   $("#bundles2").prop( "checked", false );
   $("#bundles3").prop( "checked", false );
   
    document.getElementById("price").value = 550.00;
    document.getElementById("summary").value = "FAMILY BUNDLE";
    document.getElementById("quantity").focus();
    
}

function donut_bundle1_deselect(bundle1,bundle2,bundle3,donut2,bundles1,bundles2,
 bundles3) {
   document.getElementById("price").value = "";
    document.getElementById("summary").value = "";
}

function donut_bundle2(bundle1,bundle2,bundle3,donut1,bundles1,bundles2,
 bundles3,bundles4) {

   $("#bundle1").prop( "checked", false );
    $("#bundle2").prop( "checked", false );
    $("#bundle3").prop( "checked", false );
    $("#bundle4").prop( "checked", false);

   $("#donut1").prop("checked",false);
    $("#bundles1").prop( "checked", true );
    $("#bundles2").prop( "checked", true );
    $("#bundles3").prop( "checked", true );
    $("#bundles4").prop("checked", false);

    document.getElementById("price").value = 450.00;
    document.getElementById("summary").value = "BARKADA/COUPLE BUNDLE";
    document.getElementById("quantity").focus();
    
}

function donut_bundle2_deselect(bundle1,bundle2,bundle3,donut2,bundles1,bundles2,
 bundles3,bundles4) {
   document.getElementById("price").value = "";
    document.getElementById("summary").value = "";
}

function calculatebills_button (price,quantity) {
 price = $("#price").val() - 0;
  quantity = $("#quantity").val() - 0;

  //FORMULAS FOR DISCOUNT AND DISCOUNTED AMOUNT
  discount_amount = (price * quantity) * 0.10;
  discounted_amount = (price * quantity) - discount_amount;
  document.getElementById("discount_amount").value = discount_amount;
  document.getElementById("discounted_amount").value = discounted_amount;
  document.getElementById("cash_given").focus();

}

function change_button (cash_given,discounted_amount,total_bills,total_quantity) {
 cash_given = $("#cash_given").val() - 0;
  discounted_amount = $("#discounted_amount").val() - 0;
  quantity = $("#quantity").val() - 0;

  //FORMULA FOR CHANGE
  change = cash_given - discounted_amount;
  document.getElementById("change").value = change;
  document.getElementById("total_bills").value += discounted_amount;
  document.getElementById("total_quantity").value += quantity;

  if (change < 0 ){
     alert("The change is negative!");
}

}

function new_button (price,quantity,discount_amount,discounted_amount,total_bills,total_quantity,cash_given,
 change,summary,donut1,donut2,bundle1,bundle2,bundle3,bundle4,bundles1,
 bundles2,bundles3,bundles4,order1,order2,order3,order4,order5,order6,order7,order8,order9,order10,order11,order12,order13,order14,order15,order16,order17,order18,order19,order20) {

 //CLEAR ALL TEXTBOXES
  document.getElementById("price").value = "";
  document.getElementById("quantity").value = "";
  document.getElementById("discount_amount").value = "";
  document.getElementById("discounted_amount").value = "";
  document.getElementById("cash_given").value = "";
  document.getElementById("change").value = "";
  document.getElementById("summary").value = "";
  document.getElementById("total_bills").value = "";
  document.getElementById("total_quantity").value = "";


  //CLEAR ALL RADIO BUTTONS SELECTIONS WITH ITS CHECKBOXES
  $("#donut1").prop("checked",false);
  $("#donut2").prop("checked",false);
  $("#bundle1").prop("checked",false);
  $("#bundle2").prop("checked",false);
  $("#bundle3").prop("checked",false);

  $("#bundles1").prop("checked",false);
  $("#bundles2").prop("checked",false);
  $("#bundles3").prop("checked",false);
  
     
  //CLEAR ALL CHECKBOXES IN ITEMS
  $("#order1").prop("checked",false);
  $("#order2").prop("checked",false);
  $("#order3").prop("checked",false);
  $("#order4").prop("checked",false);
  $("#order5").prop("checked",false);
  $("#order6").prop("checked",false);
  $("#order7").prop("checked",false);
  $("#order8").prop("checked",false);
  $("#order9").prop("checked",false);
  $("#order10").prop("checked",false);
  $("#order11").prop("checked",false);
  $("#order12").prop("checked",false);
     $("#order13").prop("checked",false);
     $("#order14").prop("checked",false);
     $("#order15").prop("checked",false);
     $("#order16").prop("checked",false);
     $("#order17").prop("checked",false);
     $("#order18").prop("checked",false);
     $("#order19").prop("checked",false);
     $("#order20").prop("checked",false);
      

}
//ITEMS -- IMAGES
$("#order1").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(45.00,"Okinawa");
   /*document.getElementById("price").value = 650.00;
   document.getElementById("order_summary").value = "Okinawa";
   document.getElementById("quantity").focus();*/
 } else {
   price_ordersummary_empty();
   /*document.getElementById("price").value = "";
   document.getElementById("ordersummary").value = "";*/
 }
});

$("#order2").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(70.00,"Mango");
 } else {
   price_ordersummary_empty();
 }
});
 $("#order3").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(50.00,"Chocolate");
 } else {
   price_ordersummary_empty();
 }
});

$("#order4").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(50.00,"Oreo");
 } else {
   price_ordersummary_empty();
 }
});


$("#order5").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(60.00,"Winter M");
 } else {
   price_ordersummary_empty();
 }
});

$("#order6").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(65.00,"Strawberry");
 } else {
   price_ordersummary_empty();
 }
});

$("#order7").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(75.00,"Taro");
 } else {
   price_ordersummary_empty();
 }
});

$("#order8").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(100.00,"Red Velvet");
 } else {
   price_ordersummary_empty();
 }
});

$("#order9").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(110.00,"Ube");
 } else {
   price_ordersummary_empty();
 }
});

$("#order10").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(115.00,"Caramel");
 } else {
   price_ordersummary_empty();
 }
});

$("#order11").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(100.00,"Premium Donut A");
 } else {
   price_ordersummary_empty();
 }
});

$("#order12").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(105.00,"Premium Donut B");
 } else {
   price_ordersummary_empty();
 }
});

$("#order13").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(120.00,"Premium Donut C");
 } else {
   price_ordersummary_empty();
 }
});
 $("#order14").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(100.00,"Premium Donut D");
 } else {
   price_ordersummary_empty();
 }
});
 $("#order15").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(125.00,"Premium Donut E");
 } else {
   price_ordersummary_empty();
 }
});
 $("#order16").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(35.00,"Softdrinks");
 } else {
   price_ordersummary_empty();
 }
});
 $("#order17").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(45.00,"Hot Coffee");
 } else {
   price_ordersummary_empty();
 }
});
 $("#order18").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(60.00,"Shake");
 } else {
   price_ordersummary_empty();
 }
});
 $("#order19").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(40.00,"Juices");
 } else {
   price_ordersummary_empty();
 }
});
 $("#order20").click(function(e) {
 if ($(this).prop("checked") == true ) {
   price_ordersummary(50.00,"Iced coffee");
 } else {
   price_ordersummary_empty();
 }
});
$("#donut1").click(function(e){
  if($(this).prop("checked") == true) {
   donut_bundle1();
    /*$("#bundleB").prop("checked",false);
    $("#BBchckbx1").prop( "checked", false );
    $("#BBchckbx2").prop( "checked", false );
    $("#BBchckbx3").prop( "checked", false );
    $("#BBchckbx4").prop( "checked", false );

    $("#BAchckbx1"()).prop( "checked", true );
    $("#BAchckbx2").prop( "checked", true );
    $("#BAchckbx3").prop( "checked", true );
    $("#BAchckbx4").prop( "checked", true );
      document.getElementById("price").value = 2990.00;
      document.getElementById("ordersummary").value = " FAMILY BUNDLE A";
      document.getElementById("quantity").focus();*/

  } else {
   donut_bundle1_deselect();
      /*document.getElementById("price").value = "";
      document.getElementById("ordersummary").value = "";*/
 }
});


$("#donut2").click(function(e){
  if($(this).prop("checked") == true){
   donut_bundle2();
  } else {
   donut_bundle2_deselect();
 }
});

/*BUTTONS*/

$("#calculate").click(function(e){
   e.preventDefault();
   calculatebills_button();

/*VARIABLES 

var price, 
  quantity, 
  discountamount, 
  discountedamount;*/

// TO CONVERT STRING TO NUMERIC VALUE
/*price = $("#price").val() - 0;
quantity = $("#quantity").val() - 0;*/



//FORMULA FOR THE DISCOUNT AMOUNT AND DISCOUNTED AMOUNT

/*discountamount = (price * quantity) * 0.10;
discountedamount = (price * quantity) - discountamount;
  document.getElementById("discountamount").value = discountamount;
  document.getElementById("discountedamount").value = discountedamount;
  document.getElementById("cashgiven").focus();*/



});


$("#changebutton").click(function(e){
  e.preventDefault();
  change_button();

});

$("#new").click(function(e) {
  e.preventDefault();
  new_button();

});


});



 
</script>

</body>
</html>
