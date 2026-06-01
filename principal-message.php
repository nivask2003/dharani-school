<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal Message - Sri Dharani International School</title>
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
        <h1 class="banner-title">Principal Message</h1>
    </section>
    <section class="founder-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="Assets\Images\principal-img.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 col-lg-6 content">
                    <h2 class="section-title">Mrs. S. Deepika</h2>
                    <p class="section-desc">Education is a powerful force that shapes character, builds confidence, and transforms lives. At Sri Dharani International School, we are committed to providing an educational environment that promotes academic excellence, creativity, discipline, leadership, and holistic student development. Our student-centered approach encourages every child to actively participate in academics, co-curricular activities, sports, and personality development programs, helping them become confident, skilled, and socially responsible individuals.</p>
                    <p class="section-desc">The dedicated faculty members at SDIS continuously strive to deliver quality education through innovative teaching methods, individual attention, and continuous guidance. We believe learning should inspire curiosity, independent thinking, moral values, and lifelong growth. Our mission is to prepare students to face future challenges with confidence, knowledge, and determination while remaining rooted in culture, ethics, and humanity. I sincerely thank all parents for their trust, encouragement, and valuable support towards our institution’s vision and mission.</p>
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