<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Services</title>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../css/style3.css" />
       <header>
          <nav>
            <a  href="homeuser.php">
                <img src="../assets/PAT.png" alt="Logo PAT" width="150px" height="150px">
            </a>

            <div class="hamburger">
              <img src="../assets/menu.png" id="menu">
          </div>
            <ul class="navbar">
                <li><a href="homeuser.php">HOME</a></li>
                <li><a href="aboutuser.php">ABOUT US</a></li>
                <li><a href="servicesuser.php"><span class="underlined">SERVICES</span></a>
                    <ul>
                        <li><a href="#adoption">Adoptions</a></li>
                        <li><a href="#volunter">Get Involved</a></li>
                        <li><a href="#donate">Donations</a></li>
                    </ul>
                </li>
                <li class="cnt"><a href="contactuser.php">CONTACT</a></li>
            </ul>   
        </nav>
      </header>
  <body >
    <section id="adoption">
              <div class="Adopt"> Adopt one of these animals!</div>
              <div class="services mySwiper">
                <div class="container swiper-wrapper">
                <?php include("connection.php");

                $resultat = mysqli_query($conn, 'SELECT * FROM animals'); 

                if (mysqli_num_rows($resultat) > 0) {
              
                  while ($ligne = mysqli_fetch_assoc($resultat)) {
                    echo '<div class="card swiper-slide">';
                    echo'<div class="det1">';
                      echo'<ul class="det2">';
                        echo'<li>age:' . $ligne['Age'] . 'years</li>';
                        echo'<li>breed:' . $ligne['Breed'] . '</li>';
                        echo'<li>food:' . $ligne['Food'] . '</li>';
                      echo '</ul>';
                     echo'</div>'; 

                     if (!empty($ligne['Image'])) {
                      $imageData = $ligne['Image'];

                     // Générer le chemin d'accès de l'image
                      $imagePath = '../assets/' . $ligne['nameimg']; // Remplacez par le chemin réel de votre image

                     // Écrire les données binaires de l'image dans un fichier
                     file_put_contents($imagePath, $imageData);

                   // Afficher l'image
                     echo '<img src="' . $imagePath . '" alt="Image">';
                      
                    }
      

                    echo'<div class="discr">';
                      echo'<div class="animal">';
                        echo'<p4> Name:' . $ligne['Name'] . '</p4>';
                        echo'<p4> Gender:' . $ligne['Gender'] . '</p4>';                   
                      echo'</div>';
                   echo'</div>';
                 echo'</div>';
          
                  
                  }
              } else {
                  echo 'Aucune donnée trouvée.';
              }
          
              // Fermer la connexion
              mysqli_close($conn);
                  
               ?>
          </div>
          </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
            <a href="adoptformuser.php" ><button class="adopt">adopt now</button></a>
         </section>
        <section id="volunter">
          <div class="volun"> Volunteering!</div>
          <div class="slideshow-container">
              <div class="mySlides fade">
                  <img src="../assets/vol1.jpg" >
                  <div class="text">Caption Text</div>
                </div>
                <div class="mySlides fade">
                  <img src="../assets/vol2.jpg" >
                  <div class="text">Caption Text</div>
                </div>
                <div class="mySlides fade">
                  <img src="../assets/vol3.jpg" >
                  <div class="text">Caption Text</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              <br>
              
                <div style="text-align:center" id="dot">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                </div>
                
          </div>
          <div class="button-container">
            <a href="volunteerformuser.php" class="button">Volunteer</a>
          </div>
          
    </section>  
    <section id="donate">
      <div class="don"> Donate!</div>
      <div class="container">
            <div class="card"> 
              <img src="../assets/food2.jpg"  alt="Mohamed Karim Jegham" class="img2" l/>
              <div class="discr"><a href="foodformuser.php"><button class="discrb">Food</button> </a></div>
            </div>
            <div class="card">        
              <img src="../assets/toys1.jpg"  alt="Mohamed Karim Jegham" class="img2" l/>
              <div class="discr"><a href="toysformuser.php"><button class="discrb">Toys</button> </a></div>
            </div>
            <div class="card">        
              <img src="../assets/money1.jpg"  alt="Mohamed Karim Jegham" class="img2" l/>
              <div class="discr"><a href="moneyformuser.php"><button class="discrb">Money</button> </a> </div>
            </div>
      </div>
    </section> 
    <footer>
        <div class="container3">
            <div class="row">
                <div class="col" id="logof">
                    <img src="..\assets\PAT.png" class="logo">
                    <p class="logo-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>
                <div class="col" >
                    <h4>Links</h4>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col" id="loc">
                        <h4>Locations</h4>
                        <ul>  
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                            <li>Lorem</li>
                        </ul>
                </div>
                <div class="col" id="sl">
                    <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><img src="../assets/facebook.png"></a>
                            <a href="#"><img src="../assets/twitter.png"></a>
                            <a href="#"><img src="../assets/instagram.png"></a>
                            <a href="#"><img src="../assets/likedin.png"></a>
                        </div>
                </div>
                <div class="col" id="nletter">
                    <div class="news">
                        <p>Subscribe Newsletter</p>    
                        <div class="mail">
                            <form >
                                <input type="text" id="mail" placeholder="Enter your email address" >
                            </form>
                            <a href="#"><button></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
          <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="../js/js.js"></script>
  <script src="../js/test2.js"></script>
  <script src="../js/script.js"></script>

  
  </body>
  </html>
  