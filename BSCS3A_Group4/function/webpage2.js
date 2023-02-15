var gross_income_answer;
function calculate_GI(){
	let basic_pay_rate = document.getElementById("basic_pay_rate").value;
	let basic_pay_num_of_hour = document.getElementById("basic_pay_num_of_hour").value;
	let basic_pay_answer = parseFloat(basic_pay_rate) * parseFloat(basic_pay_num_of_hour);
	let basic_pay = document.getElementById("basic_pay");
	basic_pay.value = basic_pay_answer;

	let honorarium_rate = document.getElementById("honorarium_rate").value;
	let honorarium_num_of_hour = document.getElementById("honorarium_num_of_hour").value;
	let honorarium_answer = parseFloat(honorarium_rate) * parseFloat(honorarium_num_of_hour);
	let honorarium = document.getElementById("honorarium");
	honorarium.value = honorarium_answer;

	let other_income_rate = document.getElementById("other_income_rate").value;
	let other_income_num_of_hour = document.getElementById("other_income_num_of_hour").value;
	let other_income_answer = parseFloat(other_income_rate) * parseFloat(other_income_num_of_hour);
	let other_income = document.getElementById("other_income");
	other_income.value = other_income_answer;

	gross_income_answer = parseFloat(basic_pay_answer)+parseFloat(honorarium_answer)+parseFloat(other_income_answer)
	let gross_income = document.getElementById("gross_income");
	gross_income.value = gross_income_answer;
}

function calculate_NI(){
	var local = gross_income_answer;
	var pagibig_contribution = 100;

	let sss_loan = document.getElementById("sss_loan").value;
	let pagibig_loan = document.getElementById("pagibig_loan").value;
	let fsd = document.getElementById("fsd").value;
	let fsl = document.getElementById("fsl").value;
	let salary_loan = document.getElementById("salary_loan").value;
	let other_loan = document.getElementById("other_loan").value;

	let total_deductions_answer = parseFloat(pagibig_contribution)+parseFloat(sss_loan) + parseFloat(pagibig_loan) + parseFloat(fsd) + parseFloat(fsl) + parseFloat(salary_loan) + parseFloat(other_loan); 
	let total_deductions = document.getElementById("total_deductions");
	total_deductions.value = total_deductions_answer;

	let net_income_answer = parseFloat(local) - parseFloat(total_deductions_answer);
	let net_income = document.getElementById("net_income");
	net_income.value = net_income_answer;

}