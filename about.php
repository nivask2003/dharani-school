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
        <h1 class="banner-title">About</h1>
    </section>
    <section class="about-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                <span class="badge"><i class="bi bi-mortarboard-fill"></i> About School</span>
                <h2 class="section-title">Empowering Futures Through Education</h2>
                <p class="section-desc">Sri Dharani International School, located in Gingee, is a premier CBSE educational institution dedicated to shaping young minds through academic excellence, discipline, innovation, and value-based learning. Established under the guidance of the Sri Dharani Educational Trust, the school has earned a strong reputation as one of the trusted centers of education in Villupuram District, Tamil Nadu. Affiliated with the <span>Central Board of Secondary Education (CBSE), New Delhi</span>, the institution offers quality education from Pre-KG to Class XII through a learner-centered approach that blends academic strength with creativity, leadership, and essential life skills.</p>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <ul class="icon-list">
                            <li class="list">
                                <i class="bi bi-mortarboard-fill"></i>
                                <h5>CBSE Curriculum</h5>
                            </li>
                            <li class="list">
                                <i class="bi bi-lightbulb-fill"></i>
                                <h5>Innovative Learning</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <ul class="icon-list">
                            <li class="list">
                                <i class="bi bi-people-fill"></i>
                                <h5>Holistic Growth</h5>
                            </li>
                            <li class="list">
                                <i class="bi bi-building-fill-check"></i>
                                <h5>Modern Infrastructure</h5>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <img src="Assets\Images\about-img.png" alt="" class="img-fluid">
            </div>
            </div>
            

        </div>
    </section>

    <section class="about-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="outer-box">
                        <div class="icon-circle">
                            <i class="bi bi-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="outer-box">
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="outer-box">
                        
                    </div>
                </div>
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