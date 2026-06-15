<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correspondent Message - Sri Dharani International School</title>
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
        <h1 class="banner-title">Correspondent Message</h1>
    </section>
    <section class="founder-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-5 image">
                    <img src="Assets\Images\correspontent-img.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-7 col-lg-7 content">
                    <span class="badge"><i class="bi bi-mortarboard-fill"></i> Correspondent Message</span>
                    <h2 class="section-title">Dr. D. Thamizh Kumaran</h2>
                    <p class="section-desc">Sri Dharani International School stands as a center of educational excellence where every child is encouraged to learn, grow, and succeed in a positive and nurturing environment. We believe that each student possesses unique talents and abilities, and our mission is to help them discover their fullest potential through quality education, discipline, creativity, leadership, and strong moral values. The institution provides a safe and student-friendly atmosphere where learning becomes meaningful, engaging, and inspiring.</p>
                    <p class="section-desc">At SDIS, we continuously adopt modern educational practices, digital learning systems, and innovative teaching methodologies to prepare students for future academic and professional challenges. We encourage students to think independently, communicate confidently, and become socially responsible individuals. With the strong support of parents, dedicated teachers, and committed management, we remain focused on providing holistic development opportunities that shape successful, responsible, and confident citizens of tomorrow.</p>
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