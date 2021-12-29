var emailNode = document.getElementById("email");

emailNode.addEventListener("change", chkEmail, false);

function chkEmail(event) {
    var myEmail = event.currentTarget;

    //abc@gmail.com.com.com
    var pos = myEmail.value.search(/[\w.-]+@+(\w+\.){0,2}(\w)+(\.\w{2,3})$/);

    if (pos != 0) {
        alert("The email you entered (" + myEmail.value +
            ") is incorrect! \n" +
            "Please try again.");
        myEmail.focus();
        myEmail.select();
        return false;
    }
}