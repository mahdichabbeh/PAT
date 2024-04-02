function validateForm() {
    var nameInput = document.getElementById("FullName");
    var emailInput = document.getElementById("Email");
    var noteInput = document.getElementById("message");
  
    var fullnameError = document.getElementById("fullnameError");
    var emailError = document.getElementById("emailError");
    var noteError = document.getElementById("noteError");
  
    // Clear previous error messages
    fullnameError.textContent = "";
    emailError.textContent = "";
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
  
    if (noteInput.value.trim() === "") {
      noteError.textContent = "Please provide a message!";
      noteInput.focus();
      return false;
    }
  
    return true;
  }
  