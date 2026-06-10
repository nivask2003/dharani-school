<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Founder Profile - Sri Dharani International School</title>
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
        <h1 class="banner-title">Founder Message</h1>
    </section>
    <section class="founder-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-5 image">
                    <img src="Assets\Images\founder-img.webp" alt="" class="img-fluid">
                    <div class="name-box">
                        <h3 class="name">Dr. K.K Dhandapani</h3>
                        <p class="position">Founder & Managing Trustee</p>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-7 content">
                    <p class="section-desc">Dr. K.K. Dhandapani, the Founder and Managing Trustee of Sri Dharani International School, is a visionary educationalist, eminent advocate, and respected social contributor dedicated to promoting quality education and value-based learning. With a progressive vision and strong commitment to academic excellence, he established the institution to provide world-class education for students from both rural and urban communities. His leadership is rooted in discipline, integrity, innovation, and holistic student development.</p>
                    <p class="section-desc">Under his guidance, Sri Dharani International School has grown into a reputed CBSE institution known for academic excellence, moral values, and modern infrastructure. Dr. K.K. Dhandapani believes education should empower students with knowledge, confidence, leadership skills, and social responsibility. His dedication towards educational advancement and student welfare continues to inspire the entire school community while shaping future leaders who contribute positively to society and the nation.</p>
                    
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