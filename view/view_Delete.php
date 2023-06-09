<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Shil3aiinu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/icon.png" rel="icon">
    <link href="../assets/img/icon.png" rel="icon-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Day
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:Shil3aiinu@outlook.com">Shil3aiinu@outlook.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +66 062-205-1697
            </div>
            <div class="social-links d-none d-md-block">
                <a href="https://twitter.com/enaJeikniP" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/SupphalakSB/" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/_shil3a/" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="../index.php">Shil3aiinu</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#contact">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <span>StudentsCard</span>
                <h2>Delete</h2>
                <p>This is an example of Students Card</p>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-4">วิศวกรรมซอฟแวร์</li>
                        <li data-filter=".filter-3">จิตวิทยา</li>
                        <li data-filter=".filter-2">การจัดการ</li>
                        <li data-filter=".filter-1">วิศวกรรมโยธา</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
                <?php
                include "../controller/controller_Show_ED.php"
                ?>
            </div>
        </div>
    </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <br>
            <h3>Welcome to Website</h3>
            <p>My name is Supphalak Maneepanpanit 644259034 64/45 Major : SoftwareEnginearing.</p>
            <div class="social-links">
                <a href="https://twitter.com/enaJeikniP" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/SupphalakSB/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/_shil3a/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.skype.com/en/" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>MyFunction</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://npru.ac.th/index.php" target="_blank">NPRU</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>