function validateForm() {
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var phoneInput = document.getElementById("phone");
    var kindInput = document.getElementById("kind");
    var QuantityInput = document.getElementById("Quantity");


  
    //error var
    var fullnameError = document.getElementById("fullnameError");
    var emailError = document.getElementById("emailError");
    var phoneError = document.getElementById("phoneError");
    var kindError = document.getElementById("kindError");
    var QuantityError = document.getElementById("QuantityError");

  
    // Clear previous error messages
    fullnameError.textContent = "";
    emailError.textContent = "";
    phoneError.textContent = "";
    kindError.textContent = "";
    QuantityError.textContent = "";

  
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
  
    if (kindInput.value.trim() === "") {
        kindError.textContent = "Please provide a kind of food!";
        kindInput.focus();
      return false;
    }
    if (QuantityInput.value.trim() === "") {
        QuantityError.textContent = "Please provide a quantity of toys!";
      QuantityInput.focus();
      return false;
    }
  
    return true;
  }
  