function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


    if (!((/^[a-zA-Z0-9]+$/).test(username))) {
        alert("Username can only contain letters and numbers");
        return false;
    }
    var emailRegex=/^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    if(!emailRegex.test(email)){
        alert("Please enter your email");
        return false;
    }
    if (password.length < 8) {
        alert("The password must contain 8 characters");
        return false;
    }
    return true;
}
function validateForm2() {
    var username = document.getElementById("username2").value;
    var password = document.getElementById("password2").value;

   

    if (!((/^[a-zA-Z0-9]+$/).test(username))) {
        alert("Username can only contain letters and numbers");
        return false;
    }
    if (password.length < 8) {
        alert("The password must contain 6 characters");
        return false;
    }

    
    return true;
    
}