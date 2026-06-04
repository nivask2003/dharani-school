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
    <section class="page-banner-academics">
        <h1 class="banner-title">Academics</h1>
    </section>
    <section class="academics-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="Assets\Images\academics-overview.webp" alt="Academics_Overview" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <span class="badge"><i class="bi bi-mortarboard-fill"></i> Academics Overview</span>
                    <h2 class="section-title">Empowering Students Through Academic Excellence</h2>
                    <p class="section-desc">Sri Dharani International School provides a dynamic academic environment that blends CBSE curriculum standards with innovative teaching methods, practical learning, creativity, leadership training, and skill-based education. The institution focuses on conceptual understanding, critical thinking, communication skills, and holistic student development, helping learners achieve academic excellence while becoming confident, disciplined, responsible, and future-ready individuals.</p>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="icon-box">
                                            <i class="bi bi-award"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8">
                                        <div class="icon-content">
                                            <h4 class="icon-number">13+</h4>
                                            <p class="icon-title">Years of Academic Excellence</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="row">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="icon-box">
                                            <i class="bi bi-diagram-3"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8">
                                        <div class="icon-content">
                                            <h4 class="icon-number">3 Streams</h4>
                                            <p class="icon-title">Science & Commerce Programs</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <a href="about.php" class="btn">More About Us</a>
                </div>
            </div>
            
        </div>
    </section>

    <section class="academics-2 py-5">
        <div class="container">
            <div class="heading text-center mb-4">
                <span class="badge"><i class="bi bi-mortarboard-fill"></i> Teaching Methodology</span>
                <h2 class="section-title">Innovative Teaching Methods for Future Learning</h2>
            </div>
            <div class="row g-0 mt-5">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon-box r1">
                        <i class="bi bi-easel2"></i>
                        <h4 class="box-title">Smart Learning Approach</h4>
                        <p class="icon-description">Interactive smart classrooms and digital tools create engaging, technology-enabled learning experiences for students.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon-box r1">
                        <i class="bi bi-puzzle"></i>
                        <h4 class="box-title">Activity-Based Learning</h4>
                        <p class="icon-description">Hands-on activities, demonstrations, and practical sessions help students understand concepts in a simple and effective way.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon-box">
                        <i class="bi bi-kanban"></i>
                        <h4 class="box-title">Project-Based Education</h4>
                        <p class="icon-description">Interactive smart classrooms and digital tools create engaging, technology-enabled learning experiences for students.</p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon-box r1 r2">
                        <i class="bi bi-people"></i>
                        <h4 class="box-title">Collaborative Learning</h4>
                        <p class="icon-description">Group discussions and team activities improve communication, confidence, leadership, and peer learning among students.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon-box r1 r2">
                        <i class="bi bi-lightbulb"></i>
                        <h4 class="box-title">Experiential Learning</h4>
                        <p class="icon-description">Real-world applications, experiments, and interactive methods help students connect theory with practical understanding.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon-box r2">
                        <i class="bi bi-laptop"></i>
                        <h4 class="box-title">Technology-Integrated Teaching</h4>
                        <p class="icon-description">Modern teaching methodologies with multimedia tools and digital resources enhance classroom engagement and academic excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="academics-3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <span class="badge"><i class="bi bi-mortarboard-fill"></i> CBSE Curriculum</span>
                    <h2 class="section-title">Comprehensive Academic Program</h2>
                    <p class="section-desc mt-3">Sri Dharani International School follows the CBSE curriculum prescribed by the Central Board of Secondary Education, New Delhi, providing students with a strong academic foundation through conceptual learning, practical understanding, and skill-based education. The curriculum is carefully designed to encourage creativity, critical thinking, communication skills, and overall personality development while maintaining high academic standards.</p>
                    <p class="section-desc mt-3">The institution integrates modern teaching methodologies, experiential learning, digital classroom practices, and continuous assessment systems to make education interactive and meaningful. Along with academics, equal importance is given to co-curricular activities, leadership training, value education, and life skill development, helping students become confident, disciplined, and future-ready individuals.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="Assets\Images\cbse_curriculam.webp" alt="cbse-curriculum" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="academics-4 py-5">
        <div class="container">
            <div class="heading">
                <span class="badge"><i class="bi bi-mortarboard-fill"></i> Learning Framework</span>
                <h2 class="section-title">Interactive Student Learning Zone!</h2>
            </div>
            <div class="row mt-5">
                <div class="col-6 col-md-3 col-lg-3">
                    <div class="icon-box">
                        <div class="icon-circle">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                        <h4 class="icon-box-title">Conceptual Learning</h4>
                        <p class="icon-box-description">Clear understanding through practical learning.</p>
                    </div>
                        
                </div>
                <div class="col-6 col-md-3 col-lg-3">
                    <div class="icon-box">
                        <div class="icon-circle">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                        <h4 class="icon-box-title">Experiential Education</h4>
                        <p class="icon-box-description">Hands-on activities make learning meaningful.</p>
                    </div>
                        
                </div>
                <div class="col-6 col-md-3 col-lg-3">
                    <div class="icon-box">
                        <div class="icon-circle">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                        <h4 class="icon-box-title">Technology Integration</h4>
                        <p class="icon-box-description">Digital tools create smart learning experiences.</p>
                    </div>
                        
                </div>
                <div class="col-6 col-md-3 col-lg-3">
                    <div class="icon-box">
                        <div class="icon-circle">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                        <h4 class="icon-box-title">Skill Development</h4>
                        <p class="icon-box-description">CBuilding creativity, leadership, and confidence.</p>
                    </div>
                        
                </div>
            </div>
        </div>
    </section>
    <section class="academics-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 bg-image">

                </div>
                <div class="col-12 col-md-6 col-lg-6 section-content">
                    <span class="badge"><i class="bi bi-mortarboard-fill"></i> Academic Growth</span>
                    <h2 class="section-title">Empowering Academic Growth</h2>
                    <div class="content mt-4">
                        <div class="row g-2 align-items-start">
                            <div class="col-auto col-md-2 col-lg-2">
                                <h3 class="content-title">01</h3>
                            </div>
                            <div class="col-12 col-md-8 col-lg-8">
                                <h3 class="content-title">Student-Centric Education</h3>
                                <p>SDIS follows a student-focused learning approach that encourages confidence, creativity, participation, communication skills, and independent thinking in every learner.</p>
                            </div>
                        </div>
                        <div class="row g-2 align-items-start">
                            <div class="col-auto col-md-2 col-lg-2">
                                <h3 class="content-title">02</h3>
                            </div>
                            <div class="col-12 col-md-8 col-lg-8">
                                <h3 class="content-title">Academic Evaluation</h3>
                                <p>The school follows a structured academic assessment system with periodic tests, practical evaluations, internal assessments, and subject enrichment activities</p>
                            </div>
                        </div>
                        <div class="row g-2 align-items-start">
                            <div class="col-auto col-md-2 col-lg-2">
                                <h3 class="content-title">03</h3>
                            </div>
                            <div class="col-12 col-md-8 col-lg-8">
                                <h3 class="content-title">Continuous Assessment</h3>
                                <p>Continuous evaluation methods help monitor student progress through assignments, presentations, activities, classroom participation, and regular assessments.</p>
                            </div>
                        </div>
                        <div class="row g-2 align-items-start">
                            <div class="col-auto col-md-2 col-lg-2">
                                <h3 class="content-title">04</h3>
                            </div>
                            <div class="col-12 col-md-8 col-lg-8">
                                <h3 class="content-title">Periodic Evaluation   </h3>
                                <p>SDIS conducts periodic tests and annual examinations to evaluate conceptual understanding, academic performance, discipline, and subject knowledge effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="academics-6 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <span class="badge"><i class="bi bi-mortarboard-fill"></i> Scholastic Activities</span>
                    <h2 class="section-title">Enriching Scholastic Activities</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <p class="section-desc">Scholastic activities at Sri Dharani International School strengthen academic knowledge through project-based learning, quiz competitions, laboratory activities, presentations, and interactive discussions that improve creativity, confidence, and analytical thinking.</p>
                </div>
            </div>
            <div class="container mt-5">
                <div class="inner-area">
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="accordion-group">
                                <details class="acc-item">
                                    <summary>
                                    <span>Creative Academic Learning</span>
                                    <span class="acc-icon">▼</span>
                                    </summary>
                                    <div class="content-wrapper">
                                    <div class="content-body">
                                        Students enhance knowledge and confidence through project-based activities, subject presentations, interactive participation, creativity, communication, and practical learning experiences.
                                    </div>
                                    </div>
                                </details>
                                <details class="acc-item">
                                    <summary>
                                    <span>Interactive Knowledge Building</span>
                                    <span class="acc-icon">▼</span>
                                    </summary>
                                    <div class="content-wrapper">
                                    <div class="content-body">
                                        Students improve communication, critical thinking, and subject understanding through classroom discussions, quiz competitions, and active learning participation.
                                    </div>
                                    </div>
                                </details>
                                <details class="acc-item">
                                    <summary>
                                    <span>Scientific Research Learning</span>
                                    <span class="acc-icon">▼</span>
                                    </summary>
                                    <div class="content-wrapper">
                                    <div class="content-body">
                                        Students develop practical knowledge, observation skills, and analytical thinking through laboratory experiments, research activities, and experiential learning methods.
                                    </div>
                                    </div>
                                </details>
                                <details class="acc-item">
                                    <summary>
                                    <span>Language & Academic Excellence</span>
                                    <span class="acc-icon">▼</span>
                                    </summary>
                                    <div class="content-wrapper">
                                    <div class="content-body">
                                        Students strengthen reading, writing, creativity, and competitive skills through academic competitions, language development, and knowledge-building activities.
                                    </div>
                                    </div>
                                </details>
                                </div>
                            </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="Assets\Images\scholastic.webp" alt="" class="img-fluid">
                        </div>
                    </div>
                    
                </div>  
            </div>
        </div>
        
    </section>
    <section class="academics-7 py-5">
        <div class="container">
            <div class="heading">
                <span class="badge"><i class="bi bi-mortarboard-fill"></i> Co-Scholastic Activities</span></span>
                <h2 class="section-title">Learning Beyond The Classroom</h2>
            </div>
            <div class="row mt-5">
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="box">
                        <img src="Assets\Images\sports.webp" alt="Sports & Games" class="img-fluid">
                        <div class="content">
                            <h4 class="box-title">Sports & Games</h4>
                        <p class="box-description">Promotes teamwork, fitness, discipline, confidence, and healthy competition.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="box">
                        <img src="Assets\Images\yoga.webp" alt="Yoga & Martial Arts" class="img-fluid">
                        <div class="content">
                            <h4 class="box-title">Yoga & Martial Arts</h4>
                        <p class="box-description">Enhances concentration, flexibility, self-discipline, fitness, and wellbeing.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="box">
                        <img src="Assets\Images\music.webp" alt="Music & Dance" class="img-fluid">
                        <div class="content">
                            <h4 class="box-title">Music & Dance</h4>
                        <p class="box-description">Encourages creativity, expression, confidence, rhythm, and cultural appreciation.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="box">
                        <img src="Assets\Images\arts.webp" alt="Art & Craft" class="img-fluid">
                        <div class="content">
                            <h4 class="box-title">Art & Craft</h4>
                        <p class="box-description">Develops imagination, artistic skills, creativity, focus, and self-expression.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="box">
                        <img src="Assets\Images\literary.webp" alt="Literary Activities" class="img-fluid">
                        <div class="content">
                            <h4 class="box-title">Literary Activities</h4>
                        <p class="box-description">Improves reading, writing, communication, vocabulary, and language proficiency.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="box">
                        <img src="Assets\Images\debate.webp" alt="Debate & Elocution" class="img-fluid">
                        <div class="content">
                            <h4 class="box-title">Debate & Elocution</h4>
                        <p class="box-description">Builds public speaking, critical thinking, confidence, and communication skills.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="box">
                        <img src="Assets\Images\leadership.webp" alt="Leadership Programs" class="img-fluid">
                        <div class="content">
                            <h4 class="box-title">Leadership Programs</h4>
                        <p class="box-description">Nurtures responsibility, teamwork, decision-making, confidence, and leadership.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="box">
                        <img src="Assets\Images\community.webp" alt="Community Service Activities" class="img-fluid">
                        <div class="content">
                            <h4 class="box-title">Community Service Activities</h4>
                        <p class="box-description">Fosters empathy, social responsibility, compassion, and civic awareness.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="box">
                        <img src="Assets\Images\club.webp" alt="Club Activities" class="img-fluid">
                        <div class="content">
                            <h4 class="box-title">Club Activities</h4>
                        <p class="box-description">Encourages talent exploration, teamwork, creativity, and active participation.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="academics-8 py-5">
        <div class="container">
            <div class="heading text-center mb-4">
                <span class="badge"><i class="bi bi-mortarboard-fill"></i> Streams Offered</span>
                <h2 class="section-title">XI & XII Academic Streams</h2>
                <p class="section-desc">Sri Dharani International School offers carefully designed academic streams for Senior Secondary students to help them pursue higher education and career aspirations confidently.</p>
            </div>
            <div class="content table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Stream</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Science Stream – I</td>
                            <td>Focuses on English, Physics, Chemistry, Biology, and Mathematics.</td>
                        </tr>
                        <tr>
                            <td>Science Stream – II</td>
                            <td>English, Mathematics, Physics, Chemistry and Computer Science</td>
                        </tr>
                        <tr>
                            <td>Commerce Stream</td>
                            <td>English,  Accountancy, Economics, Business Studies and Computer Science</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
<section class="education-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="badge"><i class="bi bi-mortarboard-fill"></i> Educational Framework</span>
            <h2 class="education-title">Learning Pathways</h2>
        </div>

        <div class="row g-4 align-items-start">

            <!-- Left Tabs -->
            <div class="col-lg-4">

                <div class="education-menu">

                    <div class="education-tab active" data-tab="tab1">
                        <div class="education-icon">
                            <i class="bi bi-balloon-heart"></i>
                        </div>
                        <h5>Pre Primary Education</h5>
                    </div>

                    <div class="education-tab" data-tab="tab2">
                        <div class="education-icon">
                            <i class="bi bi-book"></i>
                        </div>
                        <h5>Primary Education</h5>
                    </div>

                    <div class="education-tab" data-tab="tab3">
                        <div class="education-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <h5>Secondary Education</h5>
                    </div>

                    <div class="education-tab" data-tab="tab4">
                        <div class="education-icon">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <h5>Science Stream</h5>
                    </div>

                    <div class="education-tab" data-tab="tab5">
                        <div class="education-icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h5>Digital Learning</h5>
                    </div>

                </div>

            </div>

            <!-- Right Content -->
            <div class="col-lg-8">

                <!-- Tab 1 -->
                <div class="education-content-box active" id="tab1">
                    <div class="education-content">
                        <img src="Assets\Images\aca-pre-primary.webp" class="education-img">
                        <h3 class="mt-5">Pre Primary Education</h3>
                                <p>
                                    Children are introduced to learning through play-based activities,
                                    storytelling, creativity, communication development, and interactive
                                    experiences that build confidence and strong foundational skills.
                                </p>
                    </div>
                </div>

                <!-- Tab 2 -->
                <div class="education-content-box" id="tab2">
                    <div class="education-content">
                        <img src="Assets\Images\aca-primary.webp" class="education-img">
                        <h3 class="mt-5">Primary Education</h3>
                                <p>
                                    The primary curriculum strengthens academic foundations through
                                    activity-based learning, concept clarity, creativity, classroom
                                    participation, and continuous assessment practices.
                                </p>
                    </div>
                </div>

                <!-- Tab 3 -->
                <div class="education-content-box" id="tab3">
                    <div class="education-content">
                        <img src="Assets/Images/aca-secondary.webp" class="education-img">
                        <h3 class="mt-5">Secondary Education</h3>
                                <p>
                                    Students develop analytical thinking, subject knowledge, problem-solving
                                    skills, and academic excellence through structured learning and evaluation.
                                </p>
                    </div>
                </div>

                <!-- Tab 4 -->
                <div class="education-content-box" id="tab4">
                    <div class="education-content">
                        <img src="Assets/Images/aca-science-stream.webp" class="education-img">
                        <h3 class="mt-5">Science Stream</h3>
                                <p>
                                    Science Stream offers Physics, Chemistry, Biology, Mathematics,
                                    and Computer Science subjects for higher education and career preparation.
                                </p>
                    </div>
                </div>

                <!-- Tab 5 -->
                <div class="education-content-box" id="tab5">
                    <div class="education-content">
                        <img src="Assets/Images/aca-digital.webp" class="education-img">
                        <h3 class="mt-5">Digital Learning</h3>
                                <p>
                                    Smart classrooms, multimedia tools, and technology-enabled teaching
                                    create engaging, innovative, and effective learning experiences.
                                </p>
                    </div>
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