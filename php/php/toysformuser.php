<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Toys Form</title>
    <link href="../css/styletoys.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
    <body>
        <div class="container">  
            <form action="toysuser.php" method="post" onsubmit="return validateForm()">
                <h1> Form for donating Toys</h1>

                <label>Type of Toy(s) being donated:
                    <input   type="select" id="toys" name="toys" size="15" class="personal"></label>
                <span id="toysError" class="error"></span>
                
                <label>Pick-up or Drop-off Preferences:</label>
                <select name="carry">
                                <option class="species" value="p"> Pick-up 
                                <option class="species" value="d"> Drop-off
                </select>

                <label>Quantity of Toy(s) being donated:<input   type="select" id="Quantity" name="quantity" size="15" class="personal" ></label>
                <span id="QuantityError" class="error"></span>

                <label>Description of Toys (if applicable):<input  type="text" id="Description" name="description" size="15" class="personal" ></label>
                <span id="DescriptionError" class="error"></span>

                <label>Do you have any specific instructions or preferences for the use of your donation?<input   type="text" id="preference" name="use" size="15" class="personal" ></label>
                <span id="preferenceError" class="error"></span>

                <label>Schedule a pick-up :<input   type="date" name="date" size="15" class="date" ></label>
                
                <label>Are you making the donation as an individual or on behalf of an organization or an entity?</label>
                <label id="individual"><input   type="radio" name="entity" class="inline" value="Individual"> Individual</label>
                <label id="Association"><input   type="radio" name="entity" class="inline" value="Association"> Association </label>
                <label id="Company"><input   type="radio" name="entity" class="inline" value="Company"> Company </label>
                <label id="Club"><input   type="radio" name="entity" class="inline"  value="Club"> Club  </label>
               
                <button type="submit" name="submit">Submit</button>        
            </form>
    </div>
    <script src="../js/toyss.js">
    </script>
    </body>
</html>
