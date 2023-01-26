// Validate Full Name
function WordCount(str) {
    return str.split(' ')
        .filter(function (n) {
            return n != ''
        })
        .length;
}

String.prototype.stripSlashes = function () {
    return this.replace(/\\(.)/mg, "$1");
}

function escapeHtml(text) {
    var map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };

    return text.replace(/[&<>"']/g, function (m) {
        return map[m];
    });
}

function validateInput(information) {
    var information = information.trim();
    var information = information.stripSlashes();
    var information = escapeHtml(information);
    return information;
}

function validateName(nameValue) {
    var Error = document.getElementById('nameOutput');
    var str_word_count = WordCount(nameValue);
    if (nameValue == "") {
        Error.innerHTML = "";
    } else {
        let Name = validateInput(nameValue);
        if (!Name.match(/^[a-zA-Z-'._ ]*$/)) {
            Error.innerHTML = "<small><span style='color: red'>Name Must Start with a letter</span></small>";
        } else {
            Name = validateInput(nameValue);
            if (str_word_count < 2) {
                Error.innerHTML = "<small><span style='color: red'>Minimum Two Words Needed</span></small>";
            } else {
                Error.innerText = "";

            }
        }
    }
}



// Email Validation
function ValidateEmailAddress(emailString) {
    var atSymbol = emailString.indexOf("@");
    if (atSymbol < 1) return false;

    var dot = emailString.indexOf(".");
    if (dot <= atSymbol + 2) return false;

    if (dot === emailString.length - 1) return false;

    return true;
}

function CheckEmail(emailString) {
    var Result = ValidateEmailAddress(emailString);

    if (!isNaN(emailString)) {
        document.getElementById("emailOutput").innerHTML = "";
        document.getElementById("profileEditButton").disabled = true;
    } else {
        if (Result) {
            document.getElementById("emailOutput").innerHTML = "<small><span style='color:green;'>Valid Email Id</span></small>";
            document.getElementById("profileEditButton").disabled = false;
        } else {
            document.getElementById("emailOutput").innerHTML = "<small><span style='color:red;'>NOT a Valid Email Id</span></small>";
            document.getElementById("profileEditButton").disabled = true;
        }
    }
}

// Password Validation
function validatePassword(pass) {
    if (!isNaN(pass)) {
        document.getElementById("passwordOutput").innerHTML = "";
        document.getElementById("profileEditButton").disabled = true;
        document.getElementById('signup-submit').disabled = true;
    } else {
        if (pass.length < 8) {
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:red;'>Your password must be at least 8 characters.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
            document.getElementById('signup-submit').disabled = true;
        } else if (pass.search(/[a-z]/i) < 0) {
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:red;'>Your password must contain at least one letter.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
            document.getElementById('signup-submit').disabled = true;
        } else if (pass.search(/[0-9]/) < 0) {
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:red;'>Your password must contain at least one letter.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
            document.getElementById('signup-submit').disabled = true;
        } else if (pass.search(/[A-Z]/)) {
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:red;'>Your password must contain at least one Uppercase letter.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
            document.getElementById('signup-submit').disabled = true;
        } else {
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:green;'>Valid Password</span></small>";
            document.getElementById("profileEditButton").disabled = false;
            document.getElementById('signup-submit').disabled = false;
            return true;
        }
    }
}


// Username Validation
function validateUsername(user) {
    if (!isNaN(user)) {
        document.getElementById("usernameOutput").innerHTML = "";
        document.getElementById("profileEditButton").disabled = true;
        document.getElementById('signup-submit').disabled = true;
    } else {
        if (user.length < 5) {
            document.getElementById("usernameOutput").innerHTML = "<small><span style='color:red;'>Your username must be at least 5 characters.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
            document.getElementById('signup-submit').disabled = true;
        } else if (user.search(/[A-Z]/i) < 0) {
            document.getElementById("usernameOutput").innerHTML = "<small><span style='color:red;'>Your username must contain at least one uppercase letter.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
            document.getElementById('signup-submit').disabled = true;
        } else if (user.search(/[0-9]/) < 0) {
            document.getElementById("usernameOutput").innerHTML = "<small><span style='color:red;'>Your username must contain at least one numeric value.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
            document.getElementById('signup-submit').disabled = true;
        } else {
            document.getElementById("usernameOutput").innerHTML = "<small><span style='color:green;'>Valid Username</span></small>";
            document.getElementById("profileEditButton").disabled = false;
            document.getElementById('signup-submit').disabled = false;
            return true;
        }
    }
}


// Picture Validation
function ValidateFileUpload() {
    var fuData = document.getElementById('fileChooser');
    var FileUploadPath = fuData.value;
    //To check if user upload any file
    if (FileUploadPath == '') {
        alert("Please upload an image");
    } else {
        var Extension = FileUploadPath.substring(
            FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
        //The file uploaded is an image
        if (Extension == "gif" || Extension == "png" || Extension == "bmp" ||
            Extension == "jpeg" || Extension == "jpg") {
            // To Display
            if (fuData.files && fuData.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(fuData.files[0]);
            }
        }
        //The file upload is NOT an image
        else {
            alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
        }
    }
}


// Validate Numeric Value 
var specialKeys = new Array();
specialKeys.push(8); //Backspace
function IsNumeric(e) {
    var keyCode = e.which ? e.which : e.keyCode
    var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    document.getElementById("error").style.display = ret ? "none" : "inline";
    return ret;
}


// Validate Payment Information
function validatePayment() {
    var cardName = document.getElementById('cardName').value;
    var cardNumber = document.getElementById('cardNumber').value;
    var cardExpiry = document.getElementById('cardExpiry').value;
    var cardCvv = document.getElementById('cardCvv').value;
    var cardAddress = document.getElementById('cardAddress').value;
    var cardCity = document.getElementById('cardCity').value;
    var cardZip = document.getElementById('cardZip').value;
    var cardEmail = document.getElementById('cardEmail').value;
    // var cardNumberError = document.getElementById('cardNumberError');
    // var cardNameError = document.getElementById('cardNameError');
    // var cardExpiryError = document.getElementById('cardExpiryError');
    // var cardCvvError = document.getElementById('cardCvvError');
    var submitButton = document.getElementById('payment-button');


    // if (cardName == "" || cardNumber == "" || cardExpiry == "" || cardCvv == "" || cardAddress == "" || cardCity == "" || cardZip == "" || cardEmail == "") {
    //     submitButton.disabled = true;
    //     alert("Fill out all fields");
    //     return false;
        
    // } else {
    //     alert("Payment Successful");
    //     // submitButton.disabled = false;
    //     return true;
    // }

    if(cardName == ""){
        // submitButton.disabled = true;
        alert("Fill out all fields");
        return false;
    }else if(cardNumber == ""){
        // submitButton.disabled = true;
        alert("Fill out all fields");
        return false;
    }else if(cardExpiry == ""){
        // submitButton.disabled = true;
        alert("Fill out all fields");
        return false;
    }else if(cardCvv == ""){
        // submitButton.disabled = true;
        alert("Fill out all fields");
        return false;
    }else if(cardAddress == ""){
        // submitButton.disabled = true;
        alert("Fill out all fields");
        return false;
    }else if(cardCity == ""){
        // submitButton.disabled = true;
        alert("Fill out all fields");
        return false;
    }else if(cardZip == ""){
        // submitButton.disabled = true;
        alert("Fill out all fields");
        return false;
    }else if(cardEmail == ""){
        // submitButton.disabled = true;
        alert("Fill out all fields");
        return false;
    }else{
        alert("Payment Successful");
        submitButton.disabled = false;
        return true;
    }



}

function validateSignUp() {

    var Full_Name = document.getElementById('fname').value;
    var Username = document.getElementById('user').value;
    var Password = document.getElementById('pass').value;
    var Email = document.getElementById('email').value;
    // var Role = document.getElementsByName("role").checked;
    var submitButton = document.getElementById('signup-submit');

    if (Full_Name == "" || Username == "" || Password == "" || Email == "") {
        // submitButton.disabled = true;
        alert("Fill out all fields");
        return false;
        
    } else {
        alert("Registration Successful");
        // validateRole();
        submitButton.disabled = false;
        return true;
    }
    
}

// function validateRole() {
//     var radios = document.getElementsByName("role");
//     var formValid = false;

//     var i = 0;
//     while (!formValid && i < radios.length) {
//         if (radios[i].checked) formValid = true;
//         i++;        
//     }

//     if (!formValid) alert("Must select a user!");
//     return formValid;
// }​