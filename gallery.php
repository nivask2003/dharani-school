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

<body>
    <?=template_header()?>
    <section class="page-banner gallery">
        <h1 class="banner-title">Gallery</h1>
    </section>
     <section class="smart-gallery-section">

        <div class="container">

            <!-- Heading -->

            <div class="text-center mb-5">
                <span class="badge">
                    <i class="bi bi-mortarboard-fill"></i> OUR GALLERY
                </span>

                <h2 class="section-title">
                    School Memories
                </h2>
            </div>

            <!-- Filter Buttons -->

            <div class="smart-gallery-filter">

                <button class="filter-btn active"
                    data-filter="all">
                    All
                </button>

                <button class="filter-btn"
                    data-filter="events">
                    Events
                </button>

                <button class="filter-btn"
                    data-filter="infrastructure">
                    Infrastructure
                </button>

                <button class="filter-btn"
                    data-filter="science">
                    Science Exhibition
                </button>

            </div>

            <!-- Gallery Grid -->

            <div class="row g-4 mt-4">

                <!-- Events -->

                <div class="col-lg-4 col-md-6 gallery-item events">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-11.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-11.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 gallery-item events">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-12.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-12.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item events">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-13.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-13.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item events">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-14.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-14.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item events">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-15.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-15.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item events">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-16.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-16.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <!-- Infrastructure -->

                <div class="col-lg-4 col-md-6 gallery-item infrastructure">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-1.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-1.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item infrastructure">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-10.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-10.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 gallery-item infrastructure">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-2.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-2.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item infrastructure">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-3.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-3.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <!-- Science Exhibition -->

                <div class="col-lg-4 col-md-6 gallery-item science">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-4.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-4.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 gallery-item science">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-5.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-5.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item science">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-6.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-6.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item science">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-7.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-7.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item science">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-8.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-8.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 gallery-item science">

                    <div class="smart-gallery-card">

                        <img src="Assets/Images/gallery-9.webp"
                            alt="">

                        <div class="gallery-overlay">

                            <a href="Assets/Images/gallery-9.webp"
                                data-bs-toggle="modal"
                                data-bs-target="#galleryModal"
                                onclick="showGalleryImage(this)">

                                <i class="bi bi-plus-lg"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =========================
         Fullscreen Modal
    ========================= -->

    <div class="modal fade smart-gallery-modal" id="galleryModal" tabindex="-1">

        <div class="modal-dialog modal-fullscreen">

            <div class="modal-content">

                <button type="button" class="btn-close gallery-close-btn" data-bs-dismiss="modal"></button>

                <img src="" id="galleryModalImage" class="img-fluid" alt="Gallery Image">

            </div>

        </div>

    </div>

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