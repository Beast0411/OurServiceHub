<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./img/logo.png">
    <title>OurServiceHub</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/bookappoint.css">


</head>

<body>

    <!-- header section -->

    <header class="header-section">
        <nav class="full-nav">
            <div class="row clearfix">
                <a class="logo" href="index.php">OurServiceHub</a>
                <div class="main-nav">
                    <ul>
                        <li><a href="index.php">services</a></li>
                        <li><a href="howitworks.php">how it works</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="bookAppointment.php">Book Appointment</a></li>
                        <!-- <li><a href="customer.php">customer review</a></li> -->
                        <li><a class="act" href="about.php">about us</a></li>
                    </ul>
                </div>
                <a href="login.php" class="btn">sign in</a>
            </div>
        </nav>
    </header>


    <!-- header end -->


    <div class="appointment_container">
        <h2>Book Appointment</h2>

        <form class="input_all_container">
            <div class="per_input_container">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" />
            </div>

            <div class="per_input_container">
                <label for="phone">Phone number</label>
                <input type="text" id="phone" name="phone" />
            </div>

            <div class="per_input_container">
                <label for="email">Email*</label>
                <input type="text" id="email" name="email" />
            </div>

            <div class="per_input_container">
                <label for="address">Address*</label>
                <input type="text" id="address" name="address" />
            </div>


            <div class="per_input_container">
                <label for="address">Date</label>
                <input type="date" id="date" name="date" />
            </div>

            <div class="per_input_container">
                <label for="time">time</label>
                <input type="time" id="time" name="time">
            </div>

            <div class="per_input_container">
                <label for="number">number of bedrooms</label>
                <input type="number">
            </div>

            <div class="per_input_container">
                <label for="number">number of bathrooms</label>
                <input type="number">
            </div>

            <a href="payment.php">Continue</a>

        </form>

    </div>




    <!-- footer-section -->

    <section class="footer-section clearfix">
        <div class="row">
            <div class="col span_1_of_4 describe">
                <p class="logo1">OurServiceHub</p>
                <p>OurServiceHub works towards solving day-to-day problems that can really mess your routine. Whether it
                    is fixing a noisy AC or an ant problem that's driving you crazy, our professional will get rid of
                    them smartly at your convenience</p>
            </div>
            <div class="col span_1_of_4 quick-links">
                <h4>quick links</h4>
                <a href="#">&#187; about</a>
                <a href="#">&#187; FAQ's</a>
                <a href="#">&#187; terms & conditions</a>
                <a href="#">&#187; privacy policy</a>
            </div>
            <div class="col span_1_of_4 popular-service">
                <h4>popular services</h4>
                <p>&#8212; cleaning service</p>
                <p>&#8212; handyman service</p>
                <p>&#8212; home appliances repair</p>
                <p>&#8212; pack & shift</p>
                <p>&#8212; painting</p>
            </div>
            <div class="col span_1_of_4 connect-with-us">
                <h4>connect with us</h4>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </section>


    <!-- javascript files -->

    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/selectivizr.js"></script>
    <script src="js/main.js"></script>
</body>

</html>