<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Money Form</title>
    <link href="../css/stylemoney.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
    <body>
        <div class="container">  
        <form action="money.php" method="post" onsubmit="return validateForm()">
                <h1> Form for donating money</h1>
                <label for="name">Full name:<input  type="text" id="name" size=15 class="personal" name="fullname"></label>
                <span id="fullnameError" class="error"></span>

                <label for="adresse"> Email-Adresse:<input  type="email" id="email" size="15" class="personal" name="email">  </label> 
                <span id="emailError" class="error"></span>

                <label for="phone"> Phone Number:<input  type="text" id="phone" size="15" max="9" class="personal" name="number">   </label> 
                <span id="phoneError" class="error"></span> 
 
                <label for="money"> How much do you want to donate?<input type="text" id="money" name="amount" class="money" placeholder="Amount in dinars"></label>
                <span id="moneyError" class="error"></span>

                <label>Methods of payments :</label>
                <div class="payments">
                    <div class="credit">
                        <p>Credit Card</p>
                        <img class="photo-credit" src="../assets/credit.png" alt="credit-card"> 
                        <input  type="radio" name="pay" value="CreditCard" class="pay" unique>
                    </div>
                    <div class="credit">
                        <p>Paypal</p>
                        <img class="photo-credit" src="../assets/paypal.png" alt="credit-card"> 
                        <input  type="radio" name="pay" class="pay" value="Paypal" unique>
                    </div>
                        <div class="credit">
                            <p>bank transfer</p>
                            <img class="photo-credit"  src="../assets/bank-transfer.png" alt="credit-card"> 
                            <input  type="radio" name="pay" class="pay" value="BankTransfer" unique>
                        </div>
                </div>

                <label id="food">Where would you like your donation to be used:</label>
                <label><input  type="radio" name="goal" class="inline" value="General"> Genral Fund </label>
                <label><input  type="radio" name="goal" class="inline" value="Specific"> Specific project </label>
                <label><input  type="radio" name="goal" class="inline" value="others"> others </label>


                <label class="food">If you want to donate to a specific project, please mention which project:<input  type="text" id="projet" name="project" size="15" class="personal"></label>
                <span id="projetError" class="error"></span>



                <label>Are you making the donation as an individual or on behalf of an organization or an entity?</label>
                <label><input  type="radio" name="entity" class="inline" value="Individual"> Individual </label>
                <label><input  type="radio" name="entity" class="inline" value="Association"> Association </label>
                <label><input  type="radio" name="entity" class="inline" value="Company" > Company  </label>
                <label><input  type="radio" name="entity" class="inline" value="Club"> Club </label>
                <button type="submit">Submit</button>        
            </form>
        </div>
        <script src="../js/moneys.js">
        </script>
    </body>
</html>
