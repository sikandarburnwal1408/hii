<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "educationalhub";

    // Create connection to Database
    $conn = mysqli_connect($servername, $username, $password, $database);

    // check connection            
    if (!$conn) {
        die("Not able to connect or connection failed" . mysqli_connect_error() . "<br>");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-image: url(texture.jfif);
        }

        header {
            width: 95%;
            height: 170px;
        }

        #institute {
            margin-top: 90px;
            width: 100%;
            height: 300px;
            border: 2px double rgb(97, 97, 171);
            background-image: url(building.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding: 2px;
        }
        main{
            width: 1560px;
            height: 220px;
            margin: auto;
            background-color: #424890;
            box-sizing: border-box;
            align-items: center;
            text-align: center;
            border-radius: 2%;
            margin-bottom: 50px;
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
    <section id="institute">

    </section>
    <section id="logo">
        <img src="achievements.png">
    </section>
    <header>
        <div id="welcome">
            <h1>Welcome to Educational Hub</h1>
            <h1 style="color: yellow;">Hey! Write your username and password</h1>
        </div>
    </header>

    <main id="main">

        <section id="login">
            <div id="checkbox">
                <article id="btn1" class="category">
                    <h3>Sign In</h3>
                </article>
                <article id="btn2" class="category">
                    <h3>Sign Up</h3>
                </article>
            </div>

            <div id="int">
                <h4 style="width: 680px; margin: auto; color: yellow;">
                    Please click to Sign-Up or Sign-In according to you
                </h4>
            </div>
            <div id="signup">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // For Sign Up
                    $susername = $_POST['susername'];
                    $pass1 = $_POST['pass1'];
                    
                    // check connection            
                    if (!$conn) {
                        die("Not able to connect or connection failed" . mysqli_connect_error() . "<br>");
                    } else {
                        // Sql Query 
                        $sql = "SELECT * FROM `student` WHERE `username` = '$susername'";

                        $output = mysqli_query($conn, $sql);
                        if (!$output) {
                            echo ("You didn't sign In before. Please Sign In once." . mysqli_error($conn));
                        } else {
                            echo ("You are already part of Educational hub family. Username: ". $susername. " and Password: ". $pass1);
                        }
                    }
                }
                ?>
                <form action="/sikandar/educationalhub/login.php" method="post">
                    <input type="text" name="susername" id="susername" placeholder="Enter your Username">
                    <input type="password" name="pass1" id="pass1" placeholder="Enter your Password">
                    <div class="bttn">
                        <button type="reset">Reset now</button>
                        <button type="submit">Submit now</button>
                    </div>
                </form>
            </div>
            <div id="signin">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // For Sign In
                    $signinname = $_POST['signinname'];
                    $fname = $_POST['fname'];
                    $mname = $_POST['mname'];
                    $email = $_POST['email'];
                    $name = $_POST['name'];
                    $pass2 = $_POST['pass2'];
                    // check connection            
                    if (!$conn) {
                        die("Not able to connect or connection failed" . mysqli_connect_error() . "<br>");
                    } else {
                        // Sql Query 
                        $sql = "INSERT INTO `student` (`slno`, `name`, `fname`, `mname`, `email`, `username`, `password`) VALUES (NULL, '$signinname', '$fname', '$mname', '$email', '$name', '$pass2')";

                        $output = mysqli_query($conn, $sql);
                        if (!$output) {
                            echo ("<h3>Error! Not able to add you, try again.</h3>" . mysqli_error($conn));
                        } else {
                            echo ("<h3>You are now part of Educational hub family.</h3>");
                        }
                    }
                }
                ?>
                <form action="/sikandar/educationalhub/login.php" method="post">
                    <input type="text" name="signinname" id="signinname" placeholder="Enter your Name">
                    <input type="text" name="fname" id="fname" placeholder="Enter your Father name">
                    <input type="text" name="mname" id="mname" placeholder="Enter your Mother name">
                    <input type="email" name="email" id="email" placeholder="Enter your Email address">
                    <input type="text" name="name" id="name" placeholder="Enter your Username">
                    <input type="password" name="pass2" id="pass2" placeholder="Enter your Password">
                    <div class="bttn">
                        <button type="reset">Reset now</button>
                        <button type="submit">Submit now</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
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
    <script src="main.js"></script>
    <!-- bootstrap javascript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script> -->
    <script>
        document.getElementById('btn1').addEventListener("click", () => {
            document.getElementById('main').style.height="620px";
            document.getElementById('signin').style.display = "block";
            document.getElementById('signup').style.display = "none";
            document.getElementById('int').style.display = "none";
        })
        document.getElementById('btn2').addEventListener("click", () => {
            document.getElementById('main').style.height="370px";
            document.getElementById('signup').style.display = "block";
            document.getElementById('signin').style.display = "none";
            document.getElementById('int').style.display = "none";
        })
    </script>
</body>

</html>