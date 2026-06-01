<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chairman Message - Sri Dharani International School</title>
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
    <section class="page-banner-message">
        <h1 class="banner-title">Chairman Message</h1>
    </section>
    <section class="founder-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="Assets\Images\chairman.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 col-lg-6 content">
                    <h2 class="section-title">Dr. D. Thamizh Valli </h2>
                    <p class="section-desc">It gives me immense pleasure to welcome you to Sri Dharani International School, an institution dedicated to academic excellence, character building, and holistic education. Our mission is to create an inspiring learning environment where students are encouraged to discover their potential, strengthen their talents, and grow into responsible global citizens. At SDIS, we believe education is not limited to academic achievement alone but also includes discipline, values, creativity, leadership, and compassion. Through modern teaching methodologies, student-centered learning, and a balanced curriculum, we strive to support the intellectual and personal growth of every child.</p>
                    <p class="section-desc">We are committed to nurturing confident individuals who can adapt to changing global demands while upholding strong moral and cultural values. Our dedicated faculty, modern infrastructure, and supportive educational atmosphere ensure that every student receives the guidance and encouragement needed to achieve excellence. I extend my heartfelt gratitude to all parents for their trust and continued support in our institution. Together, we will continue guiding our students towards knowledge, integrity, success, and lifelong learning.</p>
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