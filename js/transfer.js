var loan = document.getElementById('loanType');
var amount = document.getElementById('amountID');
var btn = document.getElementById('submitBtn')

submitBtn.addEventListener("click", typeLoan, false);


function typeLoan() {
    localStorage.setItem("loan", loan.value);
    localStorage.setItem("amount", amount.value);
}