
function validate(){
    var username = document.forms['login_form']['username'];
    var password = document.forms['login_form']['password'];


    if (username.value == ""){
        alert("Please enter your username!");
        document.signup_form.username.focus();
        return false;
    }
    if (password.value == ""){
        alert("Please enter your password!");
        document.signup_form.password.focus();
        return false;
    }
 
}