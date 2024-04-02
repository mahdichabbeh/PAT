<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Adopt form</title>
    <meta name="description" content="L'association PAT a pour principal objectif de trouver un foyer aux animaux abandonnés. But non lucratif, l'association fonctionne grâce aux dons et évènements.">
    <meta name="keywords" content="PAT, adopter">
    <link href="../css/adopt.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Animal Adoption Form</h1>
        <form action="adopt.php" method="POST" name="myForm" onsubmit="return validateForm()" >
          <label for="name">Full Name:<input type="text" id="name" name="fullname" ></label>
          <span id="fullnameError" class="error"></span>

          <label for="email">Email:<input type="email" id="email" name="email" ></label>
          <span id="emailError" class="error"></span>

          <label for="phone">Phone Number:<input type="text" id="phone" name="number" ></label>
          <span id="phoneError" class="error"></span>

          <label for="animal">Animal:
            <select id="animal" name="animal" >
              <option value="">Select an animal</option>
              <option value="dog">Dog</option>
              <option value="cat">Cat</option>
              <option value="rabbit">Rabbit</option>
            </select></label>

            <label for="aname">Name:
            <select id="aname" name="aname" >
              <option value="">Selet Animal Name</option>
              <?php include("connection.php");

                $resultat = mysqli_query($conn, 'SELECT * FROM animals'); 

                if (mysqli_num_rows($resultat) > 0) {
              
                  while ($ligne = mysqli_fetch_assoc($resultat)) {
                    echo'<option value="' . $ligne['Name'] . '">' . $ligne['Name'] . '</option>';
   
                  }
              }
          
              // Fermer la connexion
              mysqli_close($conn);
                  
               ?>
              
            </select></label>
         <!-- <span id="anameError" class="error"></span>-->

          <button type="submit" name="submit">Send Request</button>
       </form>
    </div>
    <script src="../js/adopts.js"></script>

</body>