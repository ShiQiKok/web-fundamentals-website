
function validate(){
    var first = document.forms['signup_form']['first_name'];
    var last = document.forms['signup_form']['last_name'];
    var username = document.forms['signup_form']['username'];
    var email = document.forms['signup_form']['email'];
    var pw = document.forms['signup_form']['pw'];
    var cpw = document.forms['signup_form']['confirm_pw'];
    const regex = /^[a-zA-Z0-9_]*$/; 

    if (first.value == ""){
        alert("Please enter your first name!");
        document.signup_form.first_name.focus();
        return false;
    }
    if (last.value == ""){
        alert("Please enter your last name!");
        document.signup_form.last_name.focus();
        return false;
    }
    if (username.value.length < 5 || username.value.length > 30){
        alert("The length of username must between 5 and 30!");
        document.signup_form.username.focus();
        return false;
    }
    if (!regex.exec(username.value)){
        alert("Username can only contain letters, numbers and underscore(_).");
        document.signup_form.username.focus();
        return false;
    }
    if (email.value == ''){
        alert("Please enter your e-mail address!");
        document.signup_form.email.focus();
        return false;
    }
    if (pw.value == ''){
        alert("Please enter your password");
        document.signup_form.pw.focus();
        return false;
    }
    if (pw.value.length < 5 || pw.value.length > 20){
        alert("The length of password must between 5 and 20!");
        document.signup_form.pw.focus();
        return false;
    }
    if (!regex.exec(pw.value)){
        alert("Password can only contain letters, number and underscore(_).");
        document.signup_form.pw.focus();
        return false;
    }
    if (cpw.value == ''){
        alert("Please enter the password again!");
        document.signup_form.confirm_pw.focus();
        return false;
    }
    if (pw.value != cpw.value){
        alert("Your password and confirm password mismatch!");
        document.signup_form.pw.focus();
        document.signup_form.confirm_pw.focus();
        return false;
    }
    alert("Registered successfully!");
    
    
}