<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vice - Principal Message - Sri Dharani International School</title>
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
        <h1 class="banner-title">Vice - Principal Message</h1>
    </section>
    <section class="founder-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="Assets\Images\vice-principal-img.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 col-lg-6 content">
                    <h2 class="section-title">Vice Principal</h2>
                    <p class="section-desc">As Vice Principal of Sri Dharani International School, I feel proud to be part of an institution committed to academic excellence, discipline, and holistic student development. Our school provides a supportive and inspiring environment where students are encouraged to achieve their goals, build confidence, and develop essential life skills. We believe education should nurture not only academic success but also character, leadership, communication abilities, emotional wellbeing, and social responsibility.</p>
                    <p class="section-desc">Through the combined efforts of dedicated teachers, supportive parents, and visionary management, we ensure that every child receives proper guidance and opportunities for growth. The institution continuously maintains high educational standards through innovative teaching methods, student engagement activities, and technology-integrated learning practices. Our commitment remains focused on shaping disciplined, compassionate, and future-ready learners who excel academically while upholding strong ethical and moral values.</p>
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