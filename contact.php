<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Hub: Symbol of Excellence</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">

    <!-- for Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <style>
        body{
            background-image: url(texture.jfif);
        }
    </style>

</head>
<body>

    <nav>
        <div class="container nav__container">
            <a href="index.php" target="_blank">Educational Hub</a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <button id="open-menu-btn" ><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-times"></i></button>
        </div>
    </nav>  <!--    End of NAVBAR      -->



    <section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="contact.jpg">
                </div>
                <h3>Contact Us</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone"></i>
                        <h5>+3412322344</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>educationalhub@gmail.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-pin-alt"></i>
                        <h5>
                            A-143, 9th Floor, Sovereign Corporate Tower, Sector-136, Noida, Uttar Pradesh - 201305
                        </h5>
                    </li>
                </ul>
                <ul class="contact__socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook"></i></a>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-linkedin"></i></a>
                    </li>
                </ul>
            </aside>

            <form action="https://formspree.io/f/mgeqebba" method="POST" class="contact__form">
                <div class="form__name">
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>
                </div>
                <input type="email" name="Email Address" placeholder="Email Address" required>
                <textarea name="Message" cols="30" rows="5" placeholder="Others" required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>



    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.php" class="footer__logo"><h4>Educational Hub</h4></a>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut at officia cupiditate eveniet quam illum.
                </p>
            </div>

            <div class="footer__2">
                <h4>Permalink</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer__3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>

            <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p><i class="uil uil-phone-alt"></i>+91 8918570110</p>
                    <p><i class="uil uil-envelope"></i>educationalhub@gmail.com</p>
                    <p><i class="uil uil-location-pin-alt"></i>A-143, 9th Floor, Sovereign Corporate Tower, Sector-136, Noida, Uttar Pradesh - 201305</p>
                </div>
                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook"></i></a>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__copyright">
            <small>Copyright</small>&copy; <small>Educational Hub Platform</small>
        </div>
    </footer>

    <!-- Linking Javascript File -->
    <script src="main.js"></script>
    
</body>
</html>