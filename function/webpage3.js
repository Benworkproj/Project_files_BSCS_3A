let price;
let discount;
let discounts;
let quantity;
let discountAmount;
let discounted_amount;
let totalQuantity;
let total_discount_given;
let total_discountAmount;
let cash;
let change;
function getSelectValue(){
	var productList= document.getElementById("productList").value;
	var discountList = document.getElementById("discountList").value;
	quantity = document.getElementById("quantity").value;

	if(discountList=="discount"){
		discount = 0.75;
		discounts = 0.25;
	}
	else if(discountList=="no_discount"){
		discount = 0;
		discounts = 0;
	}

	if(productList=="oatmealRaisinCookies"){
		price = 10*parseFloat(quantity);
		discountAmount = parseFloat(price*discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "chocolateChipCookies"){
		price = 10*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "shortbreadCookies"){
		price = 15*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "gingerbreadCookies"){
		price = 14*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "snickerdoodleCookies"){
		price = 14*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "macaronCookies"){
		price = 15*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "biscottiCookies"){
		price = 9*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "sugarCookies"){
		price = 10*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "strawberryMacaronCookies"){
		price = 7*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "fortuneCookies"){
		price = 11*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "peanutCookies"){
		price = 15*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "butterPecanCookies"){
		price = 13*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "gingersnaps"){
		price = 10*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "peanutButterBlossoms"){
		price = 8*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
	else if(productList== "crinkleCookies"){
		price = 11*parseFloat(quantity);
		discountAmount = parseFloat(price)*parseFloat(discounts);
		discounted_amount = parseFloat(price)*parseFloat(discount);
	}
}

function calculates(){
	totalQuantity = document.getElementById("totalQuantity").value = quantity || "";
	document.getElementById("price").value = price || "";
	document.getElementById("discountAmount").value = discountAmount || "";
	document.getElementById("discounted_amount").value = discounted_amount || "";
	total_discount_given = document.getElementById("total_discount_given").value = discountAmount || "";
	total_discountAmount = document.getElementById("total_discountAmount").value = discounted_amount || "";
}

function getChange(){
	cash = document.getElementById("cash").value;
	if(cash > total_discount_given){
		change = cash - total_discountAmount;	
	}
	else{
		alert('Insufficient Cash');
	}
	document.getElementById("change").value = change || "";
}