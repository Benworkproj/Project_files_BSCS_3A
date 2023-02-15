let price = 0;
total_price = 0;
quantity = 0;
quantity = parseInt(quantity);
const receipt = [];
let bundle_a_rb = document.getElementById("cookie_bundle_a");
let bundle_b_rb = document.getElementById("cookie_bundle_b");
let bundle_c_rb = document.getElementById("cookie_bundle_c");

function onlyOne(checkbox) {
  var checkboxes = document.getElementsByName('check')
  checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked = false
  })
}

function oatmeal_raisin_cookies_checked() {
    let oatmeal_raisin_cookies_cb = document.getElementById("oatmeal_raisin_cookies");
    // If the checkbox is checked, display the output text
    if (oatmeal_raisin_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 10);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function chocolate_chip_cookies_checked() {
    let chocolate_chip_cookies_cb = document.getElementById("chocolate_chip_cookies");
    // If the checkbox is checked, display the output text
    if (chocolate_chip_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 15);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }
  
  function shortbread_cookies_checked() {
    let shortbread_cookies_cb = document.getElementById("shortbread_cookies");
    // If the checkbox is checked, display the output text
    if (shortbread_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 20);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function gingerbread_cookies_checked() {
    let gingerbread_cookies_cb = document.getElementById("gingerbread_cookies");
    // If the checkbox is checked, display the output text
    if (gingerbread_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 25);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }
  
  function snickerdoodle_cookies_checked() {
    let snickerdoodle_cookies_cb = document.getElementById("snickerdoodle_cookies");
    // If the checkbox is checked, display the output text
    if (snickerdoodle_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 30);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function macaroon_cookies_checked() {
    let macaroon_cookies_cb = document.getElementById("macaroon_cookies");
    // If the checkbox is checked, display the output text
    if (macaroon_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 35);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function biscotti_cookies_checked() {
    let biscotti_cookies_cb = document.getElementById("biscotti_cookies");
    // If the checkbox is checked, display the output text
    if (biscotti_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 40);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function sugar_cookies_checked() {
    let sugar_cookies_cb = document.getElementById("sugar_cookies");
    // If the checkbox is checked, display the output text
    if (sugar_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 45);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function macaron_cookies_checked() {
    let macaron_cookies_cb = document.getElementById("macaron_cookies");
    // If the checkbox is checked, display the output text
    if (macaron_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 50);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function fortune_cookies_checked() {
    let fortune_cookies_cb = document.getElementById("fortune_cookies");
    // If the checkbox is checked, display the output text
    if (fortune_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 55);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function peanut_cookies_checked() {
    let peanut_cookies_cb = document.getElementById("peanut_cookies");
    // If the checkbox is checked, display the output text
    if (peanut_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 60);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function butter_pecan_cookies_checked() {
    let butter_pecan_cookies_cb = document.getElementById("butter_pecan_cookies");
    // If the checkbox is checked, display the output text
    if (butter_pecan_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 65);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function gingersnaps_checked() {
    let gingersnaps_cb = document.getElementById("gingersnaps");
    // If the checkbox is checked, display the output text
    if (gingersnaps_cb.checked == true){
      document.getElementById("price").setAttribute('value', 70);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function peanut_butter_blossoms_checked() {
    let peanut_butter_blossoms_cb = document.getElementById("peanut_butter_blossoms");
    // If the checkbox is checked, display the output text
    if (peanut_butter_blossoms_cb.checked == true){
      document.getElementById("price").setAttribute('value', 75);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }

  function crinkle_cookies_checked() {
    let crinkle_cookies_cb = document.getElementById("crinkle_cookies");
    // If the checkbox is checked, display the output text
    if (crinkle_cookies_cb.checked == true){
      document.getElementById("price").setAttribute('value', 80);
    } else {
      document.getElementById("price").setAttribute('value', "");
    }
  }


 
  let oatmeal_raisin_cookies = document.getElementById("oatmeal_raisin_cookiess");
  let chocolate_chip_cookies = document.getElementById("chocolate_chip_cookiess");
  let shortbread_cookiess = document.getElementById("shortbread_cookiess");
  let gingerbread_cookies = document.getElementById("gingerbread_cookiess");
  let snickerdoodle_cookies = document.getElementById("snickerdoodle_cookiess");
  let macaroon_cookies = document.getElementById("macaroon_cookiess");
  let macaron_cookies = document.getElementById("macaron_cookiess");
  let sugar_cookies = document.getElementById("sugar_cookiess");
  let biscotti_cookies = document.getElementById("biscotti_cookiess");
  let fortune_cookies= document.getElementById("fortune_cookiess");
  let peanut_cookies = document.getElementById("peanut_cookiess");
  let butter_pecan_cookies = document.getElementById("butter_pecan_cookiess");
  let gingersnaps = document.getElementById("gingersnaps");
  let peanut_butter_blossoms = document.getElementById("peanut_butter_blossoms");
  let crinkle_cookies = document.getElementById("crinkle_cookiess");


 /* function rb_checker() {
  if (bundle_a_rb.checked==true) {
    oatmeal_raisin_cookiess.checked = true;
    chocolate_chip_cookies.checked = true;
    shortbread_cookiess.checked = true;
    gingerbread_cookies.checked = true;
    snickerdoodle_cookies.checked = true;
      
      console.log("sa A pumasok");
  } 
}*/
function radioselectorA(){
    let x = document.getElementById("cookie_bundle_a").value;
    console.log(x);
    if (x=="a"){
      document.getElementById("oatmeal_raisin_cookiess").checked = true;
      document.getElementById("chocolate_chip_cookiess").checked = true;
      document.getElementById("shortbread_cookiess").checked = true;
      document.getElementById("gingerbread_cookiess").checked = true;
      document.getElementById("snickerdoodle_cookiess").checked = true;
      document.getElementById("macaroon_cookiess").checked = false;
      document.getElementById("macaron_cookiess").checked = false;
      document.getElementById("sugar_cookiess").checked = false;
      document.getElementById("biscotti_cookiess").checked = false;
      document.getElementById("fortune_cookiess").checked = false;
      document.getElementById("peanut_cookiess").checked = false;
      document.getElementById("butter_pecan_cookiess").checked = false;
      document.getElementById("gingersnapss").checked = false;
      document.getElementById("peanut_butter_blossomss").checked = false;
      document.getElementById("crinkle_cookiess").checked = false;
      document.getElementById("price").setAttribute('value', '100');  

    } else {
      

    }

  }
function radioselectorB(){
      let x = document.getElementById("cookie_bundle_b").value;
      console.log(x);
      if (x=="b"){
        document.getElementById("macaroon_cookiess").checked = true;
        document.getElementById("macaron_cookiess").checked = true;
        document.getElementById("sugar_cookiess").checked = true;
        document.getElementById("biscotti_cookiess").checked = true;
        document.getElementById("fortune_cookiess").checked = true;
        document.getElementById("oatmeal_raisin_cookiess").checked = false
      document.getElementById("chocolate_chip_cookiess").checked = false;
      document.getElementById("shortbread_cookiess").checked = false;
      document.getElementById("gingerbread_cookiess").checked = false;
      document.getElementById("snickerdoodle_cookiess").checked = false;
      document.getElementById("peanut_cookiess").checked = false;
      document.getElementById("butter_pecan_cookiess").checked = false;
      document.getElementById("gingersnapss").checked = false;
      document.getElementById("peanut_butter_blossomss").checked = false;
      document.getElementById("crinkle_cookiess").checked = false;
      document.getElementById("price").setAttribute('value', '225'); 
      } else {
      
  }
}
function radioselectorC(){
    let x = document.getElementById("cookie_bundle_c").value;
    console.log(x);
    if (x=="c"){
      document.getElementById("peanut_cookiess").checked = true;
      document.getElementById("butter_pecan_cookiess").checked = true;
      document.getElementById("gingersnapss").checked = true;
      document.getElementById("peanut_butter_blossomss").checked = true;
      document.getElementById("crinkle_cookiess").checked = true;
      document.getElementById("macaroon_cookiess").checked = false;
      document.getElementById("macaron_cookiess").checked = false;
      document.getElementById("sugar_cookiess").checked = false;
      document.getElementById("biscotti_cookiess").checked = false;
      document.getElementById("fortune_cookiess").checked = false;
      document.getElementById("oatmeal_raisin_cookiess").checked = false
    document.getElementById("chocolate_chip_cookiess").checked = false;
    document.getElementById("shortbread_cookiess").checked = false;
    document.getElementById("gingerbread_cookiess").checked = false;
    document.getElementById("snickerdoodle_cookiess").checked = false;
    document.getElementById("price").setAttribute('value', '300');
    } else {
    
}

  }


  function calculate(){
    /*let x = document.getElementById("cookie_bundle_c").value;
    console.log(x);
    */
    quantity = document.getElementById("quantity").value;
  
  let oatmeal_raisin_cookies = document.getElementById("oatmeal_raisin_cookies");
  let chocolate_chip_cookies = document.getElementById("chocolate_chip_cookies");
  let shortbread_cookies = document.getElementById("shortbread_cookies");
  let gingerbread_cookies = document.getElementById("gingerbread_cookies");
  let snickerdoodle_cookies = document.getElementById("snickerdoodle_cookies");
  let macaroon_cookies = document.getElementById("macaroon_cookies");
  let macaron_cookies = document.getElementById("macaron_cookies");
  let sugar_cookies = document.getElementById("sugar_cookies");
  let biscotti_cookies = document.getElementById("biscotti_cookies");
  let fortune_cookies= document.getElementById("fortune_cookies");
  let peanut_cookies = document.getElementById("peanut_cookies");
  let butter_pecan_cookies = document.getElementById("butter_pecan_cookies");
  let gingersnaps = document.getElementById("gingersnaps");
  let peanut_butter_blossoms = document.getElementById("peanut_butter_blossoms");
  let crinkle_cookies = document.getElementById("crinkle_cookies");



  let oatmeal_raisin_cookiess = document.getElementById("oatmeal_raisin_cookiess");
  let chocolate_chip_cookiess = document.getElementById("chocolate_chip_cookiess");
  let shortbread_cookiess = document.getElementById("shortbread_cookiess");
  let gingerbread_cookiess = document.getElementById("gingerbread_cookiess");
  let snickerdoodle_cookiess = document.getElementById("snickerdoodle_cookiess");
  let macaroon_cookiess = document.getElementById("macaroon_cookiess");
  let macaron_cookiess = document.getElementById("macaron_cookiess");
  let sugar_cookiess = document.getElementById("sugar_cookiess");
  let biscotti_cookiess = document.getElementById("biscotti_cookiess");
  let fortune_cookiess= document.getElementById("fortune_cookiess");
  let peanut_cookiess = document.getElementById("peanut_cookiess");
  let butter_pecan_cookiess = document.getElementById("butter_pecan_cookiess");
  let gingersnapss = document.getElementById("gingersnapss");
  let peanut_butter_blossomss = document.getElementById("peanut_butter_blossomss");
  let crinkle_cookiess = document.getElementById("crinkle_cookiess");



    //Bundle A
  if ((oatmeal_raisin_cookies.checked == true) || (oatmeal_raisin_cookiess.checked==true)){
    total_price = total_price + 10;
    oatmeal_raisin_cookies_q =  document.getElementById("quantity").value;
    oatmeal_raisin_cookies_q = parseInt(oatmeal_raisin_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = oatmeal_raisin_cookies_q + total_quantity;
    
  } 
  if ((chocolate_chip_cookies.checked == true) || (chocolate_chip_cookiess.checked==true)){
    total_price = total_price + 15;
    chocolate_chip_cookies_q =  document.getElementById("quantity").value;
    chocolate_chip_cookies_q = parseInt(chocolate_chip_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = chocolate_chip_cookies_q + total_quantity;
  }
  if ((shortbread_cookies.checked == true) || (shortbread_cookiess.checked==true)){
    total_price = total_price + 20;
    shortbread_cookies_q =  document.getElementById("quantity").value;
    shortbread_cookies_q = parseInt(shortbread_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = shortbread_cookies_q + total_quantity;
  } 
  if ((gingerbread_cookies == true) || (gingerbread_cookiess.checked==true)){
    total_price = total_price + 25;
    gingerbread_cookies_q =  document.getElementById("quantity").value;
    gingerbread_cookies_q = parseInt(gingerbread_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = gingerbread_cookies + total_quantity;
  }
  if ((snickerdoodle_cookies == true) || (snickerdoodle_cookiess.checked==true)){
    total_price = total_price + 30;
    snickerdoodle_cookies_q =  document.getElementById("quantity").value;
    snickerdoodle_cookies_q = parseInt(snickerdoodle_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = snickerdoodle_cookies_q + total_quantity;
  }


  //Bundle B
  if ((macaroon_cookies.checked == true) || (macaroon_cookiess.checked==true)){
    total_price = total_price + 35;
    macaroon_cookies_q =  document.getElementById("quantity").value;
    macaroon_cookies_q = parseInt(macaroon_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = macaroon_cookies_q + total_quantity;
  } 
  if ((biscotti_cookies.checked == true) || (biscotti_cookiess.checked==true)){
    total_price = total_price + 40;
    biscotti_cookies_q =  document.getElementById("quantity").value;
    biscotti_cookies_q = parseInt(biscotti_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = biscotti_cookies_q + total_quantity; 
  }
  if ((sugar_cookies.checked == true) || (sugar_cookiess.checked==true)){
    total_price = total_price + 45;
    sugar_cookies_q =  document.getElementById("quantity").value;
    sugar_cookies_q = parseInt(sugar_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = sugar_cookies_q + total_quantity;
  }
  if ((macaron_cookies.checked  == true) || (macaron_cookiess.checked==true)){
    total_price = total_price + 50;
    macaron_cookies_q =  document.getElementById("quantity").value;
    macaron_cookies_q = parseInt(macaron_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = macaron_cookies_q + total_quantity;
  }
  if ((fortune_cookies.checked  == true) || (fortune_cookiess.checked==true)){
    total_price = total_price + 55;
    fortune_cookies_q =  document.getElementById("quantity").value;
    fortune_cookies_q = parseInt(fortune_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = fortune_cookies_q + total_quantity; 
  }
  
  //Bundle C
  if ((peanut_cookies.checked == true) || (peanut_cookiess.checked==true)){
    total_price = total_price + 60;
    peanut_cookies_q =  document.getElementById("quantity").value;
    peanut_cookies_q = parseInt(peanut_cookies_q);
    peanut_cookiestotal_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = peanut_cookies_q + total_quantity;  
  }
  if ((butter_pecan_cookies.checked == true) || (butter_pecan_cookiess.checked==true)){
    total_price = total_price + 65;
    butter_pecan_cookies_q =  document.getElementById("quantity").value;
    butter_pecan_cookies_q = parseInt(butter_pecan_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = butter_pecan_cookies_q + total_quantity; 
  } 
  if ((gingersnaps.checked == true) || (gingersnapss.checked==true)){
    total_price = total_price + 70;
    gingersnaps_q =  document.getElementById("quantity").value;
    gingersnaps_q = parseInt(gingersnaps_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = gingersnaps + total_quantity; 
  }
  if ((peanut_butter_blossoms.checked == true) || (peanut_butter_blossomss.checked==true)){
    total_price = total_price + 75;
    peanut_butter_blossoms_q =  document.getElementById("quantity").value;
    peanut_butter_blossoms_q = parseInt(peanut_butter_blossoms_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = peanut_butter_blossoms_q + total_quantity; 
  }
  if ((crinkle_cookies.checked == true) || (crinkle_cookiess.checked==true)){
    total_price = total_price + 80;
    crinkle_cookies_q =  document.getElementById("quantity").value;
    crinkle_cookies_q = parseInt(crinkle_cookies_q);
    total_quantity = document.getElementById("total_quantity").value;
    total_quantity = parseInt(total_quantity);
    total_quantity = crinkle_cookies_q + total_quantity; 
  }



  //INITIALIZATION
  total_bills = total_price * quantity;
  discount_amount = (total_price * quantity);
  console.log(discount_amount);
  discount_amount = discount_amount * 0.25;
  discounted_amount = (total_price * quantity) - discount_amount;
  cash_given = document.getElementById("cash_given").value;
  document.getElementById("total_bills").setAttribute('value', total_bills);
  document.getElementById("discount_amount").setAttribute('value', discount_amount);
  document.getElementById("discounted_amount").setAttribute('value', discounted_amount);
  change = cash_given - discounted_amount;
  document.getElementById("change").setAttribute('value', change);
  document.getElementById("total_quantity").setAttribute('value', total_quantity);

  }

  function NEW(){
document.getElementById('quantity').value = '';
document.getElementById('cash_given').value = '';
document.getElementById("change").value = '';
document.getElementById("price").value = '';
document.getElementById("total_quantity").value = '';
document.getElementById("discount_amount").value = '';
document.getElementById("discounted_amount").value = '';
document.getElementById("total_bills").value = '';
document.getElementById("oatmeal_raisin_cookiess").checked = false;
document.getElementById("chocolate_chip_cookiess").checked = false;
document.getElementById("shortbread_cookiess").checked = false;
document.getElementById("gingerbread_cookiess").checked = false;
document.getElementById("snickerdoodle_cookiess").checked = false;
document.getElementById("macaroon_cookiess").checked = false;
document.getElementById("macaron_cookiess").checked = false;false
document.getElementById("sugar_cookiess").checked = false;
document.getElementById("biscotti_cookiess").checked = false;
document.getElementById("fortune_cookiess").checked = false;
document.getElementById("peanut_cookiess").checked = false;
document.getElementById("butter_pecan_cookiess").checked = false;
document.getElementById("gingersnapss").checked = false;
document.getElementById("peanut_butter_blossomss").checked = false;
document.getElementById("crinkle_cookiess").checked = false;
document.getElementById("oatmeal_raisin_cookies").checked = false;
document.getElementById("chocolate_chip_cookies").checked = false;
document.getElementById("shortbread_cookies").checked = false;
document.getElementById("gingerbread_cookies").checked = false;
document.getElementById("snickerdoodle_cookies").checked = false;
document.getElementById("macaroon_cookies").checked = false;
document.getElementById("macaron_cookies").checked = false;false
document.getElementById("sugar_cookies").checked = false;
document.getElementById("biscotti_cookies").checked = false;
document.getElementById("fortune_cookies").checked = false;
document.getElementById("peanut_cookies").checked = false;
document.getElementById("butter_pecan_cookies").checked = false;
document.getElementById("gingersnaps").checked = false;
document.getElementById("peanut_butter_blossoms").checked = false;
document.getElementById("crinkle_cookies").checked = false;

document.getElementById("cookie_bundle_a").checked = false;
document.getElementById("cookie_bundle_b").checked = false;
document.getElementById("cookie_bundle_c").checked = false;
}
  


