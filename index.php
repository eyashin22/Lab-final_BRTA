<?php
session_start();
?>
<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BRTA</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Lato.css">
    <link rel="stylesheet" href="assets/css/Nunito.css">
    <link rel="stylesheet" href="assets/css/swiper-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Call-Now-Button.css">
    <link rel="stylesheet" href="assets/css/Hero-Carousel-images.css">
    <link rel="stylesheet" href="assets/css/pikaday.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top portfolio-navbar gradient navbar-dark"
        style="background: rgba(0,0,0,0.32);">
        <div class="container"> <a href="./index.php"><img src="assets/img/logo.png" width="63" height="63"></a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span
                    class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="form.php">Form</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php"><?php if (!isset($_SESSION["email"])) {
                                                                                    echo "Login";
                                                                                } else {
                                                                                    echo "Dashboard";
                                                                                }
                                                                                ?></a></li>
                </ul>
            </div>
        </div>
    </nav><!-- Start: Hero Carousel -->
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
                    src="assets/img/pm_pic_banner3.jpg" alt="Slide Image" style="z-index: -1;filter: brightness(44%);">
                <!-- Start: 1 Row 1 Column -->
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 offset-md-2">
                            <div style="max-width: 350px;">
                                <h1 class="text-uppercase fw-bold" id="bangladesh_sorok_korripokkho"
                                    style="padding: 0px;padding-top: 0px;padding-left: 0;color: var(--bs-body-bg);font-size: 46.88px;margin-right: -422px;padding-right: 424px;">
                                    বাংলাদেশ সড়ক কর্তৃপক্ষ</h1>
                                <p class="my-3" style="color: var(--swiper-theme-color);font-size: 26px;"><span
                                        style="color: rgb(255, 255, 255);">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span></p>
                            </div>
                        </div>
                    </div>
                </div><!-- End: 1 Row 1 Column -->
            </div>
            <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
                    src="assets/img/brta_img_2.png" alt="Slide Image" style="z-index: -1;filter: brightness(44%);">
                <!-- Start: 1 Row 1 Column -->
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 offset-md-2">
                            <div style="max-width: 350px;">
                                <h1 class="text-uppercase fw-bold" id="bangladesh_sorok_korripokkho"
                                    style="padding: 0px;padding-top: 0px;padding-left: 0;color: var(--bs-body-bg);font-size: 46.88px;margin-right: -422px;padding-right: 424px;">
                                    বাংলাদেশ সড়ক কর্তৃপক্ষ</h1>
                                <p class="my-3" style="color: var(--swiper-theme-color);font-size: 26px;"><span
                                        style="color: rgb(255, 255, 255);">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span></p>
                            </div>
                        </div>
                    </div>
                </div><!-- End: 1 Row 1 Column -->
            </div>
        </div>
        <div>
            <!-- Start: Previous --><a class="carousel-control-prev" href="#carousel-1" role="button"
                data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span
                    class="visually-hidden">Previous</span></a><!-- End: Previous -->
            <!-- Start: Next --><a class="carousel-control-next" href="#carousel-1" role="button"
                data-bs-slide="next"><span class="carousel-control-next-icon"></span><span
                    class="visually-hidden">Next</span></a><!-- End: Next -->
        </div>
        <div class="carousel-indicators"><button type="button" data-bs-target="#carousel-1" data-bs-slide-to="0"
                class="active"></button> <button type="button" data-bs-target="#carousel-1"
                data-bs-slide-to="1"></button></div>
    </div><!-- End: Hero Carousel -->
    <section class="portfolio-block website gradient" style="background: var(--bs-body-bg); background-image: url('image_d.jpeg');">
        <div class="container">
            <div class="row align-items-center" style="background-color: white">
                <div class="col-md-12 col-lg-5 offset-lg-1 text">
                    <p style="color: rgb(0,0,0);text-align: justify;"><span style="color: rgb(32, 33, 34);">To drive a
                            motor vehicle in a public place every one must have driving licence. To obtain a driving
                            licence one should hold a learner driving licence before appearing the driving test.
                            Application for the learner's licence to be submitted to the licensing authority in the
                            prescribed form along with related papers and fees. An applicant not being a foreign
                            national must be able to read and write either Bengali or English. Successful candidate of
                            the driving test have to submit application in the prescribed form to the licensing
                            authority along with the related papers &amp; fees.</span><br><br><strong><i>Professional-
                                BDT 1438/-
                                and Non-professional- BDT 2300/- </i></strong></p>
                </div>
                <div class="col-md-12 col-lg-5"><img width="358" height="286" src="assets/img/BRTA_licence_specimen.jpg"
                        style="width: 331px;"></div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <div style="text-align: center;">
                <h1>Location</h1>
            </div>
            <div style="text-align: center;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d933989.7403175101!2d89.21803594687498!3d23.87552209999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d4b2853ba7%3A0xe8a58c0087a77244!2sBangladesh%20Road%20Transport%20Authority%20(BRTA)%2C%20Dhaka%20Metro%20Circle-1!5e0!3m2!1sen!2sbd!4v1701858569722!5m2!1sen!2sbd" width="99%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


    <!-- Start: footer -->
    <footer class="page lanidng-page">
        <section class="Fsection" style="background-color: lightblue;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0" style="background-color: lightblue;">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-telephone"></i>
                            </div>
                            <div class="card-body" style="background-color: lightblue;">
                                <h3 class="card-title">Contact</h3>
                                <p>16107, 09610 990 998 SUNDAY - THURSDAY (9.00 AM - 4.00 PM)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0" style="background-color: lightblue;">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-link"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Important Links</h3>
                                <p class="card-text" style="text-align: center;"><a
                                        href="https://bangabhaban.gov.bd/" style="color: rgb(0, 0, 174)">President Office</a><br><a
                                        href="https://cabinet.gov.bd/" style="color: rgb(0, 0, 174)">Cabinet Division</a><br><a
                                        href="http://www.rthd.gov.bd/" style="color: rgb(0, 0, 174)">Road Transport &amp; Highway Division</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0" style="background-color: lightblue;">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-android-contact"></i>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Subscription</h3>
                                <p class="card-text">
                                    <input type="email" id="subscription_email"><input class="btn btn-primary"
                                        id="subscription_submit_btn" type="submit" style="margin: 17px;">
                                    <span id="err" style="color: red;"></span>
                                </p>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <p style="text-align: center;">© Copyright 2023  |  All Rights Reserved by BRTA company</p>
                </div>
            </div>
        </section>
    </footer><!-- End: footer -->


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/pikaday.min.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/theme.js"></script>

    <!-- Footer Email add on database -->
    <script>
    var email;
    $("#subscription_submit_btn").click(function() {
        email = $('#subscription_email').val();
        if (email.length < 1) {
            $('#err').empty();
            $('#err').html('<br>This field is required');
        } else {
            var regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            // var validEmail = regEx.test(email);
            if (regEx.test(email)) {
                $('#err').empty();
                console.log(111);
                $.ajax({
                    url: './external/footer_email.php',
                    type: 'POST',
                    data: {
                        email: email
                    },
                    success: function(data) {
                        $('#err').empty();
                        $('#err').html('<br>' + data);
                    }
                });
            } else {
                $('#err').empty();
                $('#err').html('<br>Enter a valid email');
            }

        }

    });
    </script>
</body>

</html>