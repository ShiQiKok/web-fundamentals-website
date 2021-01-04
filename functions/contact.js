function check_form(){

    if (document.contact_form.name.value == ''){
        alert("Please provide your name!");
        document.contact_form.name.focus();
        return false;
    }
    if (document.contact_form.email.value == ''){
        alert("Please provide your E-mail!");
        document.contact_form.email.focus();
        return false;
    }
    if (document.contact_form.message.value == ''){
        alert("Please ensure you have entered your message!");
        document.contact_form.message.focus();
        return false;
    }

    alert("Sent successfully!");
}