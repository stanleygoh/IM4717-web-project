var appName = document.getElementById("name");
var contact = document.getElementById("contactno");
var typeloan = document.getElementById("loanId");
var monthlyIncome = document.getElementById("income");
var loanAmount = document.getElementById("loanamount");
var code = document.getElementById("referralcode");
var msg = document.getElementById("txtbox");

submitBtn1.addEventListener("click", storeDetails, false);

function storeDetails() {
    localStorage.setItem("name", appName.value);
    localStorage.setItem("contact", contact.value);
    localStorage.setItem("typeofLoan", typeloan.value);
    localStorage.setItem("mthIncome", monthlyIncome.value);
    localStorage.setItem("loanAmt", loanAmount.value);
    localStorage.setItem("code", code.value);
    localStorage.setItem("msg", msg.value);
}