var A1 = document.getElementById("A1");
var A2 = document.getElementById("A2");
var A3 = document.getElementById("A3");
var B1 = document.getElementById("B1");
var B2 = document.getElementById("B2");
var B3 = document.getElementById("B3");
var B4 = document.getElementById("B4");
var B5 = document.getElementById("B5");
var B6 = document.getElementById("B6");
var B7 = document.getElementById("B7");
var C1 = document.getElementById("C1");
var C2 = document.getElementById("C2");
var C3 = document.getElementById("C3");
var C4 = document.getElementById("C4");
var C5 = document.getElementById("C5");
var C6 = document.getElementById("C6");
var C7 = document.getElementById("C7");



A1.addEventListener("click", totalcost, false);
A3.addEventListener("click", totalcost, false);
A2.addEventListener("click", totalcost, false);
B1.addEventListener("click", totalcost, false);
B3.addEventListener("click", totalcost, false);
B2.addEventListener("click", totalcost, false);
B4.addEventListener("click", totalcost, false);
B5.addEventListener("click", totalcost, false);
B6.addEventListener("click", totalcost, false);
B7.addEventListener("click", totalcost, false);
C1.addEventListener("click", totalcost, false);
C3.addEventListener("click", totalcost, false);
C2.addEventListener("click", totalcost, false);
C4.addEventListener("click", totalcost, false);
C5.addEventListener("click", totalcost, false);
C6.addEventListener("click", totalcost, false);
C7.addEventListener("click", totalcost, false);
const seat = [];
var total = 0;
var a1 = 1;
var a2 = 1;
var a3 = 1;
var b1 = 1;
var b2 = 1;
var b3 = 1;
var b4 = 1;
var b5 = 1;
var b6 = 1;
var b7 = 1;
var c1 = 1;
var c2 = 1;
var c3 = 1;
var c4 = 1;
var c5 = 1;
var c6 = 1;
var c7 = 1;

function selectA1() {
    if (a1 == 1) {
        seat.push("A1");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("A1").style.backgroundColor = "gray";
        //document.getElementById("A1").onclick = "";
        a1 += 1;
    }
}


function selectA2() {
    if (a2 == 1) {
        seat.push("A2");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("A2").style.backgroundColor = "gray";
        a2 += 1;
    }
}

function selectA3() {
    if (a3 == 1) {
        seat.push("A3");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("A3").style.backgroundColor = "gray";
        a3 += 1;
    }
}

function selectB1() {
    if (b1 == 1) {
        seat.push("B1");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("B1").style.backgroundColor = "gray";
        b1 += 1;
    }
}

function selectB2() {
    if (b2 == 1) {
        seat.push("B2");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("B2").style.backgroundColor = "gray";
        b2 += 1;
    }
}

function selectB3() {
    if (b3 == 1) {
        seat.push("B3");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("B3").style.backgroundColor = "gray";
        b3 += 1;
    }
}

function selectB4() {
    if (b4 == 1) {
        seat.push("B4");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("B4").style.backgroundColor = "gray";
        b4 += 1;
    }
}

function selectB5() {
    if (b5 == 1) {
        seat.push("B5");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("B5").style.backgroundColor = "gray";
        b5 += 1;
    }
}

function selectB6() {
    if (b6 == 1) {
        seat.push("B6");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("B6").style.backgroundColor = "gray";
        b6 += 1;
    }
}

function selectB7() {
    if (b7 == 1) {
        seat.push("B7");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("B7").style.backgroundColor = "gray";
        b7 += 1;
    }
}

function selectC1() {
    if (c1 == 1) {
        seat.push("C1");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("C1").style.backgroundColor = "gray";
        c1 += 1;
    }
}

function selectC2() {
    if (c2 == 1) {
        seat.push("C2");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("C2").style.backgroundColor = "gray";
        c2 += 1;
    }
}

function selectC3() {
    if (c3 == 1) {
        seat.push("C3");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("C3").style.backgroundColor = "gray";
        c3 += 1;
    }
}

function selectC4() {
    if (c4 == 1) {
        seat.push("C4");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("C4").style.backgroundColor = "gray";
        c4 += 1;
    }
}

function selectC5() {
    if (c5 == 1) {
        seat.push("C5");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("C5").style.backgroundColor = "gray";
        c5 += 1;
    }
}

function selectC6() {
    if (c6 == 1) {
        seat.push("C6");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("C6").style.backgroundColor = "gray";
        c6 += 1;
    }
}

function selectC7() {
    if (c7 == 1) {
        seat.push("C7");
        let select = seat.toString();
        document.getElementById("seatid").innerHTML = select;
        document.getElementById("C7").style.backgroundColor = "gray";
        c7 += 1;
    }
}

function totalcost() {
    total = (seat.length) * 5;
    document.getElementById("totalcost").innerHTML = total;
}

function onClickReset() {
    total = 0;
    document.getElementById("totalcost").innerHTML = total;
    seat.length = 0;
    let select = seat.toString();
    document.getElementById("seatid").innerHTML = select;
    if (document.getElementById("A1").style.backgroundColor != "red") {
        document.getElementById("A1").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("A2").style.backgroundColor != "red") {
        document.getElementById("A2").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("A3").style.backgroundColor != "red") {
        document.getElementById("A3").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("B1").style.backgroundColor != "red") {
        document.getElementById("B1").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("B2").style.backgroundColor != "red") {
        document.getElementById("B2").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("B3").style.backgroundColor != "red") {
        document.getElementById("B3").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("B4").style.backgroundColor != "red") {
        document.getElementById("B4").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("B5").style.backgroundColor != "red") {
        document.getElementById("B5").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("B6").style.backgroundColor != "red") {
        document.getElementById("B6").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("B7").style.backgroundColor != "red") {
        document.getElementById("B7").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("C1").style.backgroundColor != "red") {
        document.getElementById("C1").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("C2").style.backgroundColor != "red") {
        document.getElementById("C2").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("C3").style.backgroundColor != "red") {
        document.getElementById("C3").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("C4").style.backgroundColor != "red") {
        document.getElementById("C4").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("C5").style.backgroundColor != "red") {
        document.getElementById("C5").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("C6").style.backgroundColor != "red") {
        document.getElementById("C6").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    if (document.getElementById("C7").style.backgroundColor != "red") {
        document.getElementById("C7").style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    }
    a1 = 1;
    a2 = 1;
    a3 = 1;
    b1 = 1;
    b2 = 1;
    b3 = 1;
    b4 = 1;
    b5 = 1;
    b6 = 1;
    b7 = 1;
    c1 = 1;
    c2 = 1;
    c3 = 1;
    c4 = 1;
    c5 = 1;
    c6 = 1;
    c7 = 1;
}