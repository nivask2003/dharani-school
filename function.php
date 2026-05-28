<?php
function template_header(){
    echo <<<EOT

<header >

    <!-- Top Bar -->
    <div class="top-header">
        <div class="container">

            <div class="row align-items-center">

                <!-- Left -->
                <div class="col-lg-6">

                    <div class="top-contact">

                        <div class="contact-item">
                            <i class="bi bi-envelope"></i>
                            <a href="mailto:dharanicbsegingee@gmail.com">dharanicbsegingee@gmail.com</a>
                        </div>

                        <div class="contact-item">
                            <i class="bi bi-telephone"></i>
                            <a href="tel:04145290101">04145 290101</a>
                        </div>

                    </div>

                </div>

                <!-- Right -->
                <div class="col-lg-6">

                    <div class="top-menu">

                        <a href="career.php ">CAREER</a>
                        <a href="https://www.cbse.gov.in/cbsenew/documents/MPD_08052026.pdf" target="_blank">
                            CBSE
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- Main Navbar -->
    <div class="main-navbar" id="mainHeader">

        <div class="container-fluid p-0">

            <nav class="navbar navbar-expand-xl navbar-light p-0">

                <!-- Logo -->
                <a class="navbar-brand" href="index.html">
                    <img src="Assets/Images/logo.webp" alt="Logo" class="img-fluid">
                </a>

                <!-- Mobile Toggle -->
                <button class="navbar-toggler me-3"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNav"
                    aria-controls="mainNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                    <i class="bi bi-list toggler-open-icon"></i>
                    <i class="bi bi-x toggler-close-icon"></i>

                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="mainNav">

                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>

                        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="about.php">About Us</a></li>
            <li><a class="dropdown-item" href="founder.php">Founder Profile</a></li>
            <li><a class="dropdown-item" href="trust-management.php">Trust & Management</a></li>
            <li><a class="dropdown-item" href="chairman-message.php">Chairman Message</a></li>
            <li><a class="dropdown-item" href="correspondent-message.php">Correspondent Message</a></li>
            <li><a class="dropdown-item" href="principal-message.php">Principal Message</a></li>
            <li><a class="dropdown-item" href="vice-principal-message.php">Vice - Principal Message</a></li>
          </ul>
        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="academics.php">ACADEMICS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="facilities.php">FACILITIES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admission.php">ADMISSION</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admission-form.php">ADMISSION FORM</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">GALLERY</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>

                    </ul>

                </div>

            </nav>

        </div>

    </div>

</header>

EOT;
}

function template_footer(){
    echo <<< EOT

    <footer class="custom-footer">

    <div class="container">

        <div class="row gy-5">

            <!-- Footer About -->
            <div class="col-lg-4">

                <div class="footer-logo">
                    <img src="Assets/Images/logo.webp" alt="Logo">
                </div>

                <p class="footer-about">
                    Envisioned and established by the Fathers of the Carmel
                    Province of the Carmelites of Mary Immaculate (CMI),
                    Sri Dharani International School is committed to
                    academic excellence and holistic development.
                </p>

                <!-- Social Icons -->
                <div class="footer-social">

                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-youtube"></i>
                    </a>

                </div>

            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">

                <h4 class="footer-title">
                    Quick links
                </h4>

                <ul class="footer-links">

                    <li>
                        <a href="index.php">
                            <i class="bi bi-caret-right-fill"></i>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="about.php">
                            <i class="bi bi-caret-right-fill"></i>
                            About
                        </a>
                    </li>
                    <li>
                        <a href="academics.php">
                            <i class="bi bi-caret-right-fill"></i>
                            Academics
                        </a>
                    </li>
                    

                    <li>
                        <a href="facilities.php">
                            <i class="bi bi-caret-right-fill"></i>
                            Facilities
                        </a>
                    </li>
                    <li>
                        <a href="admission.php">
                            <i class="bi bi-caret-right-fill"></i>
                            Admission
                        </a>
                    </li>
                    <li>
                        <a href="gallery.php">
                            <i class="bi bi-caret-right-fill"></i>
                            Gallery
                        </a>
                    </li>

                    <li>
                        <a href="contact.php">
                            <i class="bi bi-caret-right-fill"></i>
                            Contact Us
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">

                <h4 class="footer-title">
                    Get in Touch
                </h4>

                <div class="footer-contact">

                    <div class="footer-contact-item">
                        <i class="bi bi-signpost-split-fill"></i>

                        <p>
                            Sri Dharani International School,
                            Gingee, Villupuram District,
                            Tamil Nadu, India
                        </p>
                    </div>

                    <div class="footer-contact-item">
                        <i class="bi bi-envelope-fill"></i>

                        <a href="mailto:dharanicbsegingee@gmail.com">
                            dharanicbsegingee@gmail.com
                        </a>
                    </div>

                    <div class="footer-contact-item">
                        <i class="bi bi-telephone-fill"></i>

                        <a href="tel:04145290101">
                            04145 290101
                        </a>
                    </div>

                </div>

            </div>

            <!-- Map -->
            <div class="col-lg-3">

                <div class="footer-map">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.798397445553!2d79.41811607478418!3d12.26191803004063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a533572f6dcb075%3A0x6353f4fc96063557!2sSri%20Dharani%20International%20School!5e0!3m2!1sen!2sin!4v1779447025862!5m2!1sen!2sin"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>

                </div>

            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">

            <p>
                Copyright © 2026 Sri Dharani International School.
                All Rights Reserved
            </p>

        </div>

    </div>

</footer>
EOT;
}
?>