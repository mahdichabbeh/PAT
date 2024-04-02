function validateForm() {
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var phoneInput = document.getElementById("phone");
    var toysInput = document.getElementById("toys");
    var QuantityInput = document.getElementById("Quantity");
    var DescriptionInput = document.getElementById("Description");
    var PreferenceInput = document.getElementById("preference");


  
    //error var
    var fullnameError = document.getElementById("fullnameError");
    var emailError = document.getElementById("emailError");
    var phoneError = document.getElementById("phoneError");
    var toysError = document.getElementById("toysError");
    var QuantityError = document.getElementById("QuantityError");
    var DescriptionError = document.getElementById("DescriptionError");
    var preferenceError = document.getElementById("preferenceError");

  
    // Clear previous error messages
    fullnameError.textContent = "";
    emailError.textContent = "";
    phoneError.textContent = "";
    toysError.textContent = "";
    QuantityError.textContent = "";
    DescriptionError.textContent = "";
    preferenceError.textContent = "";

  
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
  
    if (toysInput.value.trim() === "") {
        toysError.textContent = "Please provide a type of toy(s)!";
      toysInput.focus();
      return false;
    }
  
    if (QuantityInput.value.trim() === "") {
        QuantityError.textContent = "Please provide a quantity of toys!";
      QuantityInput.focus();
      return false;
    }
    if (DescriptionInput.value.trim() === "") {
        DescriptionError.textContent = "Please provide a description of the toys!";
        DescriptionInput.focus();
      return false;
    }
        if (PreferenceInput.value.trim() === "") {
            preferenceError.textContent = "Please provide instructions or preferences!";
        PreferenceInput.focus();
      return false;
    }
  
    return true;
  }
  