function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {

    var username = document.Form.username.value;//chnage
    var password = document.Form.password.value;

    var usernameErr= passwordErr = true;
    

    if(username == "") {
        printError("usernameErr", "Please enter your User name");//chnage

    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(username) === false) {
            printError("usernameErr", "Please enter a valid User name");//chnage

        } else {
            printError("usernameErr", ""); //chnage
            usernameErr = false;
            
        }
    }
    

    if(password == "") {
        printError("passwordErr", "Please enter valid password");

    } 
    else {
        
            printError("passwordErr", "");
            passwordErr = false;

        
    }
    
    if((usernameErr || passwordErr ) == true) {
       return false;
    } 
};