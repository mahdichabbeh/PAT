<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Form</title>
    <link href="../css/stylefood.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
    <body>
        <div class="container">  
            <form action="food.php" method="post" name="myForm" onsubmit="return validateForm()">
              <h1> Form for donating food</h1>
              <label for="name">Full name:<input type="text" pattern="([a-z]*[A-Z]*)*" id="name"  class="personal" name="fullname"></label>  
              <span id="fullnameError" class="error"></span>   

  
              <label for="adresse"> Email-Adresse:<input type="email" id="email"  class="personal" name="email">    </label>  
              <span id="emailError" class="error"></span>   


              <label for="phone"> Phone Number:<input type="tel" id="phone"  max="9" class="personal" name="number">    </label>    
              <span id="phoneError" class="error"></span> 

          
              <label>Which specific animal species will benefit from your donations?</label>
              <label><input type="checkbox" name="species[]"  class="species"  value="dogs">Dogs</label>
              <label><input type="checkbox" name="species[]"  class="species"  value="cats">Cats</label>
              <label><input type="checkbox" name="species[]"  class="species"  value="WL">Wildlife</label>
              <label><input type="checkbox" name="species[]"  class="species"> Farm animals    </label> 

              <label class="food">What specific kind of food do you intend to donate?<input type="select" id="kind" name="food"  class="personal" ></label>
              <span id="kindError" class="error"></span>

              <label>How much food would you like to donate in terms of quantity?<input type="text" id="Quantity" name="quantity" class="personal" class="personal"  placeholder="Weight in kg"></label>
              <span id="QuantityError" class="error"></span>

              <label>Date of expiration:<input type="date" class="date" name="date" ></label>
              
              <label>Pick-up or Drop-off Preferences:</label>
              <select name="carry">
                                <option class="species" value="p"> Pick-up 
                                <option class="species" value="d"> Drop-off
              </select>

              <label>Are you making the donation as an individual or on behalf of an organization or an entity?</label>
              <label><input type="radio" name="entity" class="species"  value="Indiv"> Individual</label>
              <label><input type="radio" name="entity"  class="species" value="assoc"> Association </label>
              <label><input type="radio" name="entity"  class="species" value="company"> Company  </label>
              <label><input type="radio" name="entity" class="species"  value="club"> Club    </label>
              
              <button type="submit" name="submit">Submit</button>        
            </form>
    </div>
    <script src="../js/foods.js">
    </script>
    </body>
</html>
