function validateForm() {
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var usernameInput = document.getElementById("username");
    var passwdInput = document.getElementById("passwd");
    var phoneInput = document.getElementById("phone");



  
    //error var
    var fullnameError = document.getElementById("fullnameError");
    var emailError = document.getElementById("emailError");
    var usernameError = document.getElementById("usernameError");
    var passwdError = document.getElementById("passwdError");
    var phoneError = document.getElementById("phoneError");


  
    // Clear previous error messages
    fullnameError.textContent = "";
    emailError.textContent = "";
    phoneError.textContent = "";
    usernameError.textContent = "";
    passwdError.textContent = "";


  
    if (nameInput.value.trim() === "") {
      fullnameError.textContent = "Please provide your full name!";
      nameInput.focus();
      return false;
    }
  
    if (emailInput.value.trim() === "") {
      emailError.textContent = "Please provide your email!";
      emailInput.focus();
      return false;
    }
    if (usernameInput.value.trim() === "") {
        usernameError.textContent = "Please provide a username!";
      usernameInput.focus();
      return false;
    }
    if (passwdInput.value.trim() === "") {
        passwdError.textContent = "Please provide a password!";
        passwdInput.focus();
      return false;
    }
  
    if (phoneInput.value.length !== 8) {
      phoneError.textContent = "Please provide a phone number with 8 digits!";
      phoneInput.focus();
      return false;
    }
  

  

  
    return true;
  }
  