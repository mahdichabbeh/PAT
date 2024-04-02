function validateForm() {


var nameInput = document.getElementById("name");
var passwdInput = document.getElementById("passwrd");
 


var fullnameError = document.getElementById("fullnameError");
var passwdError = document.getElementById("passwdError");



fullnameError.textContent = "";
passwdError.textContent = "";



  
if (nameInput.value.trim() === "") {
    fullnameError.textContent = "Please provide your full name!";
    nameInput.focus();
    return false;
}
if (passwdInput.value.trim() === "") {
    passwdError.textContent = "Please provide a password!";
    passwdInput.focus();
  return false;
}
return true;

}
var state=false;
function toogle() {
    if(state){
        document.getElementById("passwrd").setAttribute("type","password");
        document.getElementById("eye").setAttribute("class","fa fa-eye-slash");                
        state=false;
    }
    else {
        document.getElementById("passwrd").setAttribute("type","text");
        document.getElementById("eye").setAttribute("class","fa fa-eye");
        state=true;
    }
}