var dateNode = document.getElementById("Date");
var movie = document.getElementById('movies');
var genre = document.getElementById('genre');

dateNode.addEventListener("change", chkDate, false);
movie.addEventListener("change", disablegenre, false);
genre.addEventListener("change", disablemovie, false);


function chkDate(event) { //Try to add today date in SINI
    var myDate = event.currentTarget;
    var selectDate = new Date(myDate.value)
    var todayDate = new Date();
    if (selectDate <= todayDate) {
        pos = 1;
    } else {
        pos = 0;
    }


    if (pos != 0) {
        alert("The date you entered (" + myDate.value +
            ") is invalid! \n" +
            "Please try again.");
        myDate.focus();
        myDate.select();
        document.getElementById("Date").value = "";
        return false;
    }
}

function disablegenre() {
    if (document.getElementById('movies').value != '')
        document.getElementById('genre').disabled = true;
    else
        document.getElementById('genre').disabled = false;
}

function disablemovie() {
    if (document.getElementById('genre').value != '') {
        document.getElementById('movies').disabled = true;
        document.getElementById('time').disabled = true;

    } else {
        document.getElementById('time').disabled = false;
        document.getElementById('movies').disabled = false;
    }
}