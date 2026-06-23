<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trust & Management - Sri Dharani International School</title>
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
    <section class="page-banner-trust">
        <h1 class="banner-title">Trust & Management</h1>
    </section>
    <section class="trust-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="Assets\Images\trust-img.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <span class="badge"><i class="bi bi-mortarboard-fill"></i> Trust Overview</span>
                    <h2 class="section-title">Sri Dharani Educational Trust</h2>
                    <p class="section-desc">Sri Dharani Educational Trust is committed to promoting quality education and social development through modern, value-based, and student-centered learning. Established with the vision of empowering students through knowledge, discipline, confidence, and leadership, the trust continuously strives to create meaningful educational opportunities for children from diverse backgrounds.</p>
                    <p class="section-desc">The trust focuses on strengthening educational infrastructure, encouraging innovative teaching practices, and supporting holistic student development. Guided by experienced educational leaders and trustees, Sri Dharani International School continues to grow as a reputed center for CBSE education, academic excellence, ethical values, and responsible future leadership.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="trust-2">
        <div class="container">
            <div class="heading">
                <span class="badge"><i class="bi bi-mortarboard-fill"></i> Trustee Members</span>
                <h2 class="section-title">Leadership Team & Trustee Members Hub</h2>
            </div>

            <!-- Team Carousel -->
            <div class="trust-carousel-wrapper">
                <div class="trust-carousel" id="trustCarousel">

                    <!-- Card 1 -->
                    <div class="team-member">
                        <img src="Assets/Images/team-1.webp" class="img-fluid" alt="Dr. K.K. Dhandapani">
                        <h4 class="team-name">Dr. K.K. Dhandapani</h4>
                        <p class="destination">Managing Trustee</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="team-member">
                        <img src="Assets/Images/team-2.webp" class="img-fluid" alt="Mrs. D. Dharani Dhandapani ">
                        <h4 class="team-name">Mrs. D. Dharani Dhandapani </h4>
                        <p class="destination">Trustee Member</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="team-member">
                        <img src="Assets/Images/team-3.webp" class="img-fluid" alt="Dr. D. Thamizh Kumaran">
                        <h4 class="team-name">Dr. D. Thamizh Kumaran </h4>
                        <p class="destination">Trustee Member</p>
                    </div>
                    <div class="team-member">
                        <img src="Assets/Images/team-4.webp" class="img-fluid" alt="Dr. D. Thamizh Valli ">
                        <h4 class="team-name">Dr. D. Thamizh Valli </h4>
                        <p class="destination">Trustee Member</p>
                    </div>
                    <div class="team-member">
                        <img src="Assets/Images/team-5.webp" class="img-fluid" alt="Dr. D. Thamizh Valli ">
                        <h4 class="team-name">Dr. D. Thamizh Vani</h4>
                        <p class="destination">Trustee Member</p>
                    </div>

                </div>

                <!-- Prev / Next Buttons -->
                <button class="trust-carousel-btn trust-carousel-prev" id="trustPrev" aria-label="Previous">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="trust-carousel-btn trust-carousel-next" id="trustNext" aria-label="Next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

            <!-- Dots -->
            <div class="trust-carousel-dots" id="trustDots"></div>

        </div>
    </section>
    <section class="trust-3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="outer-box">
                        <div class="inner-box">
                            <h2 class="section-title">Management Philosophy</h2>
                            <p class="section-desc">The management philosophy of Sri Dharani International School is rooted in the belief that education should foster intellectual growth, discipline, creativity, moral values, and social responsibility. The institution is committed to providing a positive and student-centered learning environment that encourages academic excellence, confidence, leadership, innovation, teamwork, and ethical development while preparing students for future challenges and global opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="outer-box">
                        <div class="inner-box">
                            <h2 class="section-title">Leadership Vision</h2>
                            <p class="section-desc">The leadership vision of Sri Dharani International School is to create a world-class educational institution that empowers students with knowledge, confidence, creativity, discipline, and strong values. The institution is committed to academic excellence, holistic student development, innovative learning, technology integration, student wellbeing, and global educational standards while nurturing responsible citizens and future leaders prepared for modern challenges and opportunities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    (function () {
        const track   = document.getElementById('trustCarousel');
        const cards   = track.querySelectorAll('.team-member');
        const prevBtn = document.getElementById('trustPrev');
        const nextBtn = document.getElementById('trustNext');
        const dotsBox = document.getElementById('trustDots');

        let current = 0;

        /* How many cards fit? */
        function visibleCount() {
            if (window.innerWidth >= 992) return 3;
            if (window.innerWidth >= 576) return 2;
            return 1;
        }

        function maxIndex() {
            return Math.max(0, cards.length - visibleCount());
        }

        /* Build dots */
        function buildDots() {
            dotsBox.innerHTML = '';
            const total = maxIndex() + 1;
            for (let i = 0; i < total; i++) {
                const d = document.createElement('button');
                d.className = 'trust-dot' + (i === current ? ' active' : '');
                d.addEventListener('click', () => goTo(i));
                dotsBox.appendChild(d);
            }
        }

        function goTo(index) {
            current = Math.max(0, Math.min(index, maxIndex()));
            const cardWidth = cards[0].offsetWidth + 30; /* 30 = gap */
            track.style.transform = `translateX(-${current * cardWidth}px)`;
            dotsBox.querySelectorAll('.trust-dot').forEach((d, i) =>
                d.classList.toggle('active', i === current)
            );
            prevBtn.disabled = current === 0;
            nextBtn.disabled = current === maxIndex();
        }

        prevBtn.addEventListener('click', () => goTo(current - 1));
        nextBtn.addEventListener('click', () => goTo(current + 1));
        window.addEventListener('resize', () => { buildDots(); goTo(current); });

        buildDots();
        goTo(0);
    })();
    </script>
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