<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PAT | ASSOCIATION DE PROTECTION DES ANIMAUX DE TUNISIE </title>
    <meta name="description" content="The main objective of the PAT association is to find a home for abandoned animals. As a non-profit organization, we work through donations, adoptions and events.">
    <meta name="keywords" content="PAT, adopter">
    <link href="../css/style.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
    <body>
        <header>
            <nav>   
                <a  href="home.php">
                    <img src="../assets/PAT.png" alt="Logo PAT" width="150px" height="150px">
                </a>
                <div class="hamburger">
                    <img src="../assets/menu.png" id="menu">
                </div>
                <ul class="navbar">
                    <li><a href="homeuser.php"><span class="underlined">HOME</a></li>
                    <li><a href="aboutuser.php">ABOUT US</a></li>
                    <li><a href="servicesuser.php">SERVICES</a>
                        <ul>
                            <li><a href="servicesuser.php">Adoptions</a></li>
                            <li><a href="servicesuser.php">Get Involved</a></li>
                            <li><a href="servicesuser.php">Donations</a></li>
                        </ul>
                    </li>
                    <li class="cnt"><a href="contactuser.php">CONTACT</a></li>
                </ul>   
            </nav>
            <div class="content">
                <div class="warpper">
                <h1>HELLO <?php
                    session_start();
                    if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                     echo  $username  ;}?>!</h1>
                </div>
                <p> PAT, Non-profit organization <br> to protect animals <br> in Tunisia.</p>
                <form action="logout.php" method="post">
                <button type="submit" class="buttom2">Logout</button>
                </form>
            </div>
            
                    
        </header>
            <section class="services">
                <h1> Our Services </h1>
                <div class="container1">
                    <div class="card">        
                        <img src="../assets/cat3.jpg"  alt="Mohamed Karim Jegham"  l/>
                         <div class="discr">
                            <p class="img1">  Adoption </p>
                            <a href="servicesuser.php" href="services.php" class="showmore"> Show more</a>
                        </div>
                    </div>
                    <div class="card">        
                        <img src="../assets/dog1.jpg" alt="Mohamed Karim Jegham"  l/>
                        <div class="discr">
                            <p class="img1">  Donation </p>
                            <a href="servicesuser.php" class="showmore"> Show more</a>
                        </div>
                    </div>
                    <div class="card">        
                        <img src="../assets/cat2.jpg"  alt="Mohamed Karim Jegham"  l/>
                        <div class="discr">
                            <p class="img1">  Voluntering </p>
                            <a href="servicesuser.php" class="showmore"> Show more</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="aboutus">
                <div class="container2">
                    <h1>About PAT</h1>
                    <p>The company PAT , TUNISIAN ANIMAL PROTECTION ASSOCIATION ,  is a non-profit organization dedicated to promoting the welfare and rights of animals in Tunisia. Founded in 20,</p>
                    <a href="about.php" class="showmore2"> Show more</a>
                </div>
                <img src="../assets/background-image.jpg" alt="Mohamed Karim Jegham" id="img"  l/>
            </section>
            
            <section class="contactus">
                <div class="desc">
                    <p>Contact Us If You Find Abandoned Animals</p>
                    <a  href="contactuser.php" class="buttom">Contact Us</a>
                </div>
                <div id="partners">
                    <p>A Big Thanks To Our Partners !</p>
                    <div id="cont-part">
                        <img class="part" src="../assets/zanimo.jpg" >
                        <img class="part" src="../assets/mypets.png" >
                        <img class="part" src="../assets/Carrefour.png" >
                        <img class="part" src="../assets/zooplanet.png" >
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
                                    <form action="news.php" method="post" >
                                        <input type="text" id="mail" placeholder="Enter your email address" name="text">
                                        <button name="submit"></button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            
            
         
            
                        
            
            
    
        <script src="../js/script.js"></script>
    </body>
</html>
