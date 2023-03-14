<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Educational Hub: Symbol of Excellence</title>

    <link rel="stylesheet" href="style.css">

    <!-- for Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Swipper Js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <style>
        body {
            background-image: url(texture.jfif);
        }

        .courses img {
            width: 410px;
            height: 280px;
        }

        #institute {
            width: 100%;
            height: 300px;
            border: 2px double rgb(97, 97, 171);
            background-image: url(building.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding: 2px;
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
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-times"></i></button>
        </div>
    </nav>

    <header>
        <div class="container header_container">
            <div class="header__left">
                <h1>Grow your skills to advance your career path</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ab similique amet voluptatibus enim
                    nisi ipsum pariatur sequi assumenda iste.
                </p>
                <a href="introHub.php" class="btn btn-primary">Learn More</a>
                <a href="courses.php" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header__right">
                <div class="header_right-image">
                    <img src="achievements.png">
                </div>
            </div>
        </div>
    </header>

    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>Categories</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, laudantium.
                </p>
                <a href="#" class="btn">Learn More</a>
            </div>

            <div class="categories__right">
                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-bitcoin-circle"></i>
                    </span>
                    <h5>Blockchain</h5>
                    <p>Lorem ipsum dolor, sit amet consectetu.</p>
                </article>

                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-palette"></i>
                    </span>
                    <h5>Graphics Design</h5>
                    <p>Lorem ipsum dolor, sit amet consectetu.</p>
                </article>

                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-yen-circle"></i>
                    </span>
                    <h5>Finance</h5>
                    <p>Lorem ipsum dolor, sit amet consectetu.</p>
                </article>

                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-megaphone"></i>
                    </span>
                    <h5>Marketing</h5>
                    <p>Lorem ipsum dolor, sit amet consectetu.</p>
                </article>

                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-music"></i>
                    </span>
                    <h5>Music</h5>
                    <p>Lorem ipsum dolor, sit amet consectetu.</p>
                </article>

                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-building"></i>
                    </span>
                    <h5>Business</h5>
                    <p>Lorem ipsum dolor, sit amet consectetu.</p>
                </article>
            </div>
        </div>
    </section>
    <!--End of categories section-->
    <section id="institute">

    </section>

    <section class="courses">
        <h2>Our Popular courses</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="course1.jpg" alt="Image">
                </div>
                <div class="course__info">
                    <h4>Resposive Social media Website UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime unde fugiat nulla commodi nihil
                        minima sit vero! Enim.
                    </p>
                    <a href="learnCourse.php" class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="course2.png" alt="Image">
                </div>
                <div class="course__info">
                    <h4>Resposive SmartHome Website Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime unde fugiat nulla commodi nihil
                        minima sit vero! Enim.
                    </p>
                    <a href="learnCourse.php" class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="course3.webp" alt="Image">
                </div>
                <div class="course__info">
                    <h4>Resposive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime unde fugiat nulla commodi nihil
                        minima sit vero! Enim.
                    </p>
                    <a href="learnCourse.php" class="btn btn-primary">Learn More</a>
                </div>
            </article>
        </div>
    </section>
    <!--End of Courses section-->

    <section class="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs__container">
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-comment-question"></i></div>
                <div class="queston__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus sint rerum quisquam nesciunt
                        dignissimos omnis ea a, quibusdam earum qui cupiditate sunt enim sapiente voluptatibus.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-comment-question"></i></div>
                <div class="queston__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus sint rerum quisquam nesciunt
                        dignissimos omnis ea a, quibusdam earum qui cupiditate sunt enim sapiente voluptatibus.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-comment-question"></i></div>
                <div class="queston__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus sint rerum quisquam nesciunt
                        dignissimos omnis ea a, quibusdam earum qui cupiditate sunt enim sapiente voluptatibus.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-comment-question"></i></div>
                <div class="queston__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus sint rerum quisquam nesciunt
                        dignissimos omnis ea a, quibusdam earum qui cupiditate sunt enim sapiente voluptatibus.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-comment-question"></i></div>
                <div class="queston__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus sint rerum quisquam nesciunt
                        dignissimos omnis ea a, quibusdam earum qui cupiditate sunt enim sapiente voluptatibus.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-comment-question"></i></div>
                <div class="queston__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus sint rerum quisquam nesciunt
                        dignissimos omnis ea a, quibusdam earum qui cupiditate sunt enim sapiente voluptatibus.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-comment-question"></i></div>
                <div class="queston__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus sint rerum quisquam nesciunt
                        dignissimos omnis ea a, quibusdam earum qui cupiditate sunt enim sapiente voluptatibus.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-comment-question"></i></i></div>
                <div class="queston__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus sint rerum quisquam nesciunt
                        dignissimos omnis ea a, quibusdam earum qui cupiditate sunt enim sapiente voluptatibus.
                    </p>
                </div>
            </article>
        </div>
    </section>
    <!--End of FAQs section-->

    <section class="container testimonials__container mySwiper">
        <h2>Students' Testimonials</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="person1.jpg" alt="person">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consectetur tempore! Dolorem
                        molestias architecto iste nemo beatae id quasi cum!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="person2.jpg" alt="person">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consectetur tempore! Dolorem
                        molestias architecto iste nemo beatae id quasi cum!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="person3.jfif" alt="person">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consectetur tempore! Dolorem
                        molestias architecto iste nemo beatae id quasi cum!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="person4.jfif" alt="person">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consectetur tempore! Dolorem
                        molestias architecto iste nemo beatae id quasi cum!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="person5.jfif" alt="person">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consectetur tempore! Dolorem
                        molestias architecto iste nemo beatae id quasi cum!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="person6.jfif" alt="person">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consectetur tempore! Dolorem
                        molestias architecto iste nemo beatae id quasi cum!
                    </p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!--End of Students'Testimonials section-->

    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.php" class="footer__logo">
                    <h4>Educational Hub</h4>
                </a>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut at officia cupiditate eveniet quam
                    illum.
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
                    <p><i class="uil uil-location-pin-alt"></i>A-143, 9th Floor, Sovereign Corporate Tower, Sector-136,
                        Noida, Uttar Pradesh - 201305</p>
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




    <!-- Linking Javascript for Swipper Js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //When window width is >=600px
            breakpoints: {
                600: {
                    slidesPerView: 2
                }
            }
        });
    </script>
    <!-- Linking Javascript File -->
    <script src="main.js"></script>

</body>

</html>