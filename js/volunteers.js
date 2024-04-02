function validateForm() {
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var phoneInput = document.getElementById("phone");
    var noteInput = document.getElementById("message");
  
    //error var
    var fullnameError = document.getElementById("fullnameError");
    var emailError = document.getElementById("emailError");
    var phoneError = document.getElementById("phoneError");
    var noteError = document.getElementById("noteError");
  
    // Clear previous error messages
    fullnameError.textContent = "";
    emailError.textContent = "";
    phoneError.textContent = "";
    noteError.textContent = "";
  
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
  
    if (phoneInput.value.length !== 8) {
      phoneError.textContent = "Please provide a phone number with 8 digits!";
      phoneInput.focus();
      return false;
    }
  s
  
    if (noteInput.value.trim() === "") {
      noteError.textContent = "Please provide a message!";
      noteInput.focus();
      return false;
    }
  
    return true;
  }
  