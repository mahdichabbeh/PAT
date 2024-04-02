function validateForm() {

    var kindInput = document.getElementById("kind");
    var QuantityInput = document.getElementById("Quantity");


  
    //error var

    var kindError = document.getElementById("kindError");
    var QuantityError = document.getElementById("QuantityError");

  
    // Clear previous error messages

    kindError.textContent = "";
    QuantityError.textContent = "";


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
  