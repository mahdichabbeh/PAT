<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="../css/style1.css" rel="stylesheet">

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
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="services.php">SERVICES</a>
                    <ul>
                        <li><a href="#">Donations</a></li>
                        <li><a href="#">Adoptions</a></li>
                        <li><a href="#">Get Involved</a></li>
                    </ul>
                </li>
                <li><a href="contact.php"><span class="underlined">CONTACT</span></a></li>
            </ul>
        </nav>
    </header>
    <div class="ContactUs">
        <h1>Get In Touch</h1>
        <div class="box">
            <div class="contact-form">
                <div class="pic">
                    <img src="../assets/tadeusz-lakota-tk5LWGNiWVs-unsplash.jpg">
                </div>
                <div class="form">
                    <form name="myForm" onsubmit="return validateForm()" method="post">
                        <div class="name">
                          <p class="text">Full Name:</p>
                          <input type="text" name="FullName" id="FullName" placeholder="Enter your full name" >
                          <span id="fullnameError" class="error"></span>
                        </div>
                        <div class="email">
                          <p class="text">Email Address:</p>
                          <input type="email" name="Email" id="Email" placeholder="Enter your email address" >
                          <span id="emailError" class="error"></span>
                        </div>
                        <div class="message">
                          <p class="text">Message:</p>
                          <textarea name="message" rows="5" cols="40" id="message" placeholder="Leave a message..." ></textarea>
                          <span id="noteError" class="error"></span>
                        </div>
                        <div class="button-div">
                          <button id="btn" type="submit">
                            <p id="btnText">Submit</p>
                          </button>
                        </div>
                      </form>
                    
                </div>
            </div>
            <div class="contact-info">
                <div class="info">
                    <div class="phone-div">
                        <img src="../assets/phone icon2.png">
                        <h4>Phone</h4>
                        <p>+216 22 134 103 <br> +216 27 761 266 </p>
                    </div>
                    <div class="location-div">
                        <img src="../assets/location icon.png">
                        <h4>Location</h4>
                        <p>Taférnine 8032 Sidi Jédidi, Nabeul</p>
                    </div>
                    <div class="address-div">
                        <img src="../assets/mail icon.png">
                        <h4>Email</h4>
                        <p>PAT@support.tn</p>
                    </div>
                </div>
                <div class="map">
                    <img src="../assets/LOCATION.png">
                </div>
            </div>
        </div>
    </div>
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


    <script src="../js/contactus.js"></script>
    <script src="../js/script2.js"></script>
</body>
</html>