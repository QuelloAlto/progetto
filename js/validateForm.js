function redirect_page(url) {
    var tID = setTimeout(function() {
        window.location.href = url;
        window.clearTimeout(tID);
    }, 5000);
}

function checkEmail(email){
    if(email == "")
    {
        document.getElementById("emailError").innerHTML = "L'email non può essere vuota";
    }
    else
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("emailError").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "checkEmail.php?email=" + email, true);
        xmlhttp.send();
    }

}

function checkPassword(password){
    if(password == "")
    {
        document.getElementById("passwordError").innerHTML = "La password non può essere vuota";
    }
    else
    {
        document.getElementById("passwordError").innerHTML = "";
    }
}

function activateSubmit(){
    var name = document.getElementById("firstname").value;
    var surname = document.getElementById("surname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("pass").value;
    var password2 = document.getElementById("confirm").value;
    var emailError = document.getElementById("emailError").innerHTML;
    var passwordError = document.getElementById("passwordError").innerHTML;
    var submit = document.getElementById("submit");
    if((name == "" || surname == "" || email == "" || password == "" || password2 == "") || 
    (emailError != "" || passwordError != ""))
    {
        submit.disabled = true;
    }
    else
    {
        submit.disabled = false;
    }
}