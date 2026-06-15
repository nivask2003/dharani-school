<?php
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Sri Dharani International School</title>
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="shortcut icon" href="Assets/Images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?=template_header()?>
    <section class="hero-section">

        <!-- Background Video -->
        <video autoplay muted loop playsinline class="hero-video" poster="Assets/Images/slide-1.png">>
            <source src="Assets/Video/hero-video.mp4" type="video/mp4">
        </video>

        <!-- Overlay -->
        <div class="hero-overlay"></div>
    </section>
    <section class="home-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="box b1">
                        <img src="Assets/Images/teacher.png" alt="" class="img-fluid">
                        <h3 class="box-title">EXPERT TEACHERS</h3>
                        <p class="box-desc">Our experienced and dedicated teachers inspire students through innovative
                            teaching methods, personalized guidance, and strong academic mentorship.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="box b2">
                        <img src="Assets/Images/book.png" alt="" class="img-fluid">
                        <h3 class="box-title">QUALITY EDUCATION</h3>
                        <p class="box-desc">We provide quality education that combines academic excellence, discipline,
                            creativity, and modern learning practices for holistic growth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="box b3">
                        <img src="Assets/Images/support.png" alt="" class="img-fluid">
                        <h3 class="box-title">LIFE TIME SUPPORT</h3>
                        <p class="box-desc">Our institution offers lifelong support by nurturing confidence, values,
                            leadership skills, and continuous learning for future success.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="box b4">
                        <img src="Assets\Images\scholarship.png" alt="" class="img-fluid">
                        <h3 class="box-title">SCHOLARSHIP NEWS</h3>
                        <p class="box-desc">Stay updated with the latest scholarship opportunities, academic
                            achievements, merit awards, and student recognition programs at SDIS.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="home-3">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img src="Assets/Images/about.webp" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-12">
                    <span class="badge"><i class="bi bi-mortarboard-fill"></i> Inspiring Young Minds</span>
            <h2 class="section-title">SHAPING FUTURE LEADERS WITH EXCELLENCE</h2>
                    <p class="section desc">Welcome to Sri Dharani International School, a place where education goes
                        beyond classrooms and learning becomes a journey of discovery, confidence, discipline, and
                        excellence. Our institution is committed to nurturing young minds through a balanced approach
                        that combines academic achievement, moral values, creativity, leadership, and holistic
                        development.</p>
                        <p class="section desc">Every child at SDIS is guided to explore their talents, strengthen their
                        abilities, and grow into responsible individuals prepared to meet future challenges with
                        confidence and determination.</p>
                        <a href="about.php" class="btn">Learn More</a>
                </div>
            </div>
        </div>

    </section> -->
    <div class="home-3">
        <img src="Assets/Images/dharani-about.png" alt="" class="img-fluid">
    </div>

   <section class="video-wrap " id="facilities">
        <div class="container-fluid">
            <div class="title center_title">
                <span class="badge" style=""><i class="bi bi-mortarboard-fill me-2"></i>Our Facilities</span>
                <h1 class="section-title">Why We’re Different</h1>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="profile_data">
                        <div class="back"></div>
                        <div class="profile" style="background-image: url('Assets/Images/fac-1.webp');"></div>
                    </div>
                    <div class="profile_infos">
                        <h1 class="name"></h1>
                        <h4 class="occupation">Smart Classroom</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="profile_data">
                        <div class="back"></div>
                        <div class="profile" style="background-image: url('Assets/Images/fac-2.webp');"></div>
                    </div>
                    <div class="profile_infos">
                        <h1 class="name"></h1>
                        <h4 class="occupation">Montessori Room</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="profile_data">
                        <div class="back"></div>
                        <div class="profile" style="background-image: url('Assets/Images/fac-3.webp');"></div>
                    </div>
                    <div class="profile_infos">
                        <h1 class="name"></h1>
                        <h4 class="occupation">Kindergarten Space</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="profile_data">
                        <div class="back"></div>
                        <div class="profile" style="background-image: url('Assets/Images/fac-4.webp');"></div>
                    </div>
                    <div class="profile_infos">
                        <h1 class="name"></h1>
                        <h4 class="occupation">Science Laboratory</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="profile_data">
                        <div class="back"></div>
                        <div class="profile" style="background-image: url('Assets/Images/fac-5.webp');"></div>
                    </div>
                    <div class="profile_infos">
                        <h1 class="name"></h1>
                        <h4 class="occupation">Computer Laboratory</h4>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="profile_data">
                        <div class="back"></div>
                        <div class="profile" style="background-image: url('Assets/Images/fac-6.webp');"></div>
                    </div>
                    <div class="profile_infos">
                        <h1 class="name"></h1>
                        <h4 class="occupation">Mathematics Laboratory</h4>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="academics-section">
        <div class="container">

            <!-- Heading -->
            <div class="academics-title text-center">
                <span class="badge"><i class="bi bi-mortarboard-fill"></i> Our Academics</span>
                <h2 class="section-title text-white">Empowering Students Through Academics</h2>
                <span class="divider"></span>
            </div>

         <!-- Carousel -->
<!-- ===================== ACADEMICS SECTION ===================== -->

<!-- DESKTOP / TABLET -->
<div id="academicsCarouselDesktop"
    class="carousel slide d-none d-lg-block"
    data-bs-ride="carousel">

    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/pre-primary.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Pre Primary Education</h3>

                            <p>
                                Activity-based learning environment designed
                                to develop creativity, confidence, and
                                communication skills among young learners.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/primary.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Primary Education</h3>

                            <p>
                                Strong academic foundation with conceptual
                                learning, language development, and
                                interactive classroom activities.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/secondary.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Secondary Education</h3>

                            <p>
                                Comprehensive CBSE curriculum focused on
                                analytical thinking, discipline, and academic
                                excellence.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">

            <div class="row g-4">

                <!-- Card 4 -->
                <div class="col-lg-4">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/science.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Science Stream</h3>

                            <p>
                                Advanced science curriculum with laboratory
                                training and competitive exam preparation.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-4">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/commerce.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Commerce Stream</h3>

                            <p>
                                Career-focused commerce education with
                                business studies, economics, and accountancy.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-lg-4">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/digital.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Digital Learning</h3>

                            <p>
                                Smart classroom environment integrated with
                                technology-enabled teaching and practical
                                learning methods.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev academic-arrow"
        type="button"
        data-bs-target="#academicsCarouselDesktop"
        data-bs-slide="prev">

        <i class="bi bi-arrow-left"></i>

    </button>

    <button class="carousel-control-next academic-arrow"
        type="button"
        data-bs-target="#academicsCarouselDesktop"
        data-bs-slide="next">

        <i class="bi bi-arrow-right"></i>

    </button>

</div>



<!-- ===================== MOBILE CAROUSEL ===================== -->

<div id="academicsCarouselMobile"
    class="carousel slide d-block d-lg-none"
    data-bs-ride="carousel">

    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/pre-primary.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Pre Primary Education</h3>

                            <p>
                                Activity-based learning environment designed
                                to develop creativity, confidence, and
                                communication skills among young learners.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/primary.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Primary Education</h3>

                            <p>
                                Strong academic foundation with conceptual
                                learning, language development, and
                                interactive classroom activities.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/secondary.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Secondary Education</h3>

                            <p>
                                Comprehensive CBSE curriculum focused on
                                analytical thinking, discipline, and academic
                                excellence.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item">
            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/science.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Science Stream</h3>

                            <p>
                                Advanced science curriculum with laboratory
                                training and competitive exam preparation.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Slide 5 -->
        <div class="carousel-item">
            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/commerce.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Commerce Stream</h3>

                            <p>
                                Career-focused commerce education with
                                business studies, economics, and accountancy.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Slide 6 -->
        <div class="carousel-item">
            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="academic-card">

                        <div class="academic-image">
                            <img src="Assets/Images/digital.webp" alt="">
                        </div>

                        <div class="academic-content">

                            <h3>Digital Learning</h3>

                            <p>
                                Smart classroom environment integrated with
                                technology-enabled teaching and practical
                                learning methods.
                            </p>

                            <a href="#">Read More</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev academic-arrow"
        type="button"
        data-bs-target="#academicsCarouselMobile"
        data-bs-slide="prev">

        <i class="bi bi-arrow-left"></i>

    </button>

    <button class="carousel-control-next academic-arrow"
        type="button"
        data-bs-target="#academicsCarouselMobile"
        data-bs-slide="next">

        <i class="bi bi-arrow-right"></i>

    </button>

</div>

        </div>
    </section>
        <section class="admission">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                   <img src="Assets/Images/content.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-12"></div>
            </div>
        </div>
    </section>
    <section class="school-gallery-section">
        <div class="container">
            <span class="badge"><i class="bi bi-mortarboard-fill"></i> GALLERY</span>
            <h2 class="section-title">Moments of Learning and Student Life   </h2>

            <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up"
                data-aos-delay="200">

                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="gallery-img-box">
                            <img src="Assets/Images/1.png" class="d-block w-100">
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="gallery-img-box">
                            <img src="Assets/Images/2.png" class="d-block w-100">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="gallery-img-box">
                            <img src="Assets/Images/3.png" class="d-block w-100">
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

        </div>
    </section>
    
    <?=template_footer()?>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap bundle (includes Popper) loaded BEFORE header inject -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="Assets/JS/script.js"></script>
    
</body>

</html>