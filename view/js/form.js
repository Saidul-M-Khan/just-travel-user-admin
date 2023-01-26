 function printError(Id, Msg) {
     document.getElementById(Id).innerHTML = Msg;
 }

function validateForm() {

    var username = document.Form.username.value;//chnage
    var email = document.Form.email.value;
    var password = document.Form.password.value;
    var cpassword = document.Form.cpassword.value;
    var location = document.Form.location.value;
    var role = document.Form.role.value;
    var fname = document.Form.fname.value;

    var usernameErr = emailErr = passwordErr = cpasswordErr = locationErr = roleErr = fnameErr= true;
    

    if(username == "") {
        printError("usernameErr", "Please enter your User name");//chnage
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(username) === false) {
            printError("usernameErr", "Only Charecter Allowed");//chnage
           
        } else {
            printError("usernameErr", ""); //chnage
            usernameErr = false;
        }
    }

    if(fname == "") {
        printError("fnameErr", "Please enter your Full Name name");//chnage
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(fname) === false) {
            printError("fnameErr", "Only Charecter Allowed");//chnage
           
        } else {
            printError("fnameErr", ""); //chnage
            fnameErr = false;
        }
    }
    

    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
 
    if(password == "") {
        printError("passwordErr", "Please enter valid password");
    } else {
        var regex = /^[1-9]\d{7}$/;
        if(regex.test(password) === false) {
            printError("passwordErr", "Please enter a valid 8 password");
        } else{
            printError("passwordErr", "");
            passwordErr = false;
        }
    }

    if(cpassword == "") {
        printError("cpasswordErr", "Retype Password");
    } else {
        if(cpassword != password) {
            printError("cpasswordErr", "password didn't match");

        } else{
            printError("cpasswordErr", "");
            cpasswordErr = false;

        }
    }
    
    

    if(location == "Location") {
        printError("locationErr", "Please select your location");

    } else {
        printError("locationErr", "");
        locationErr = false;

    }
    

    if(role == "") {
        printError("roleErr", "Please select your role");

    } else {
        printError("roleErr", "");
        roleErr = false;

    }
    
    
    if((usernameErr || emailErr || passwordErr || locationErr || roleErr || cpasswordErr || fnameErr) == true) {
       return false;
    } 
};