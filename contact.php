<?php
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>

<body>
    <?=template_header()?>
    <section class="page-banner">
        <h1 class="banner-title">Contact</h1>
    </section>
    <section class="contact-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12 mb-4 mb-md-0">
                    <div class="box">
                        <div class="icon-circle">
                            <i class="bi bi-geo"></i>
                        </div>
                        <h3 class="box-title">Address</h3>
                        <p class="box-desc">Sri Dharani International School, Gingee, Villupuram District, Tamil Nadu, India</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 mb-4 mb-md-0">
                    <div class="box">
                        <div class="icon-circle">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <h3 class="box-title">Email</h3>
                        <p class="box-desc"><a href="mailto:dharanicbsegingee@gmail.com">dharanicbsegingee@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="box">
                        <div class="icon-circle">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h3 class="box-title">Call Us</h3>
                        <p class="box-desc"><a href="tel:04145 290101">04145 290101</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-2 py-5 container">
        <div class="row">
            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                <div class="box">
                    <h3 class="box-title">Get in touch</h3>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7797.59694367209!2d79.420691!3d12.261913!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a533572f6dcb075%3A0x6353f4fc96063557!2sSri%20Dharani%20International%20School!5e0!3m2!1sen!2sin!4v1779693558473!5m2!1sen!2sin" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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