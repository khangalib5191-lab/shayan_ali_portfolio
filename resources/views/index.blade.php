<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shayan Ali | Full-Stack Developer</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/shayan-ali.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader-content">
            <div class="loader-mark">SA</div>
            <span>LOADING PORTFOLIO</span>
        </div>
    </div>


    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top portfolio-nav">

        <div class="container">

            <a class="navbar-brand brand-logo" href="#about">
                <span class="brand-mark">&lt;/&gt;</span>
                Shayan Ali
            </a>

            <button class="navbar-toggler custom-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Stack</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>

                <a href="#contact" class="nav-cta">
                    Let's Work
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>

            </div>

        </div>

    </nav>


    <!-- HERO -->
    <header id="about" class="hero-section">

        <div class="hero-grid"></div>

        <div class="container hero-container">

            <div class="row align-items-center g-5">

                <!-- HERO CONTENT -->
                <div class="col-lg-7">

                    <div class="availability-badge">

                        <span class="status-dot"></span>

                        Available for selected projects

                    </div>

                    <h1 class="hero-title">

                        Building digital products that are

                        <span>fast, scalable, and useful.</span>

                    </h1>

                    <p class="hero-description">

                        I'm <strong>Shayan Ali</strong>, a full-stack developer focused on
                        building practical web applications, backend systems, and
                        cross-platform experiences.

                    </p>

                    <div class="hero-actions">

                        <a href="#projects" class="btn-primary-custom">

                            View Projects

                            <i class="fa-solid fa-arrow-down"></i>

                        </a>

                        <a href="#contact" class="btn-secondary-custom">

                            Contact Me

                            <i class="fa-solid fa-paper-plane"></i>

                        </a>

                    </div>


                    <!-- STATS -->

                    <div class="hero-stats">

                        <div class="stat-item">

                            <strong>2+</strong>

                            <span>Years Learning & Building</span>

                        </div>

                        <div class="stat-item">

                            <strong>8+</strong>

                            <span>Technologies & Frameworks</span>

                        </div>

                        <div class="stat-item">

                            <strong>100%</strong>

                            <span>Focused on Clean Solutions</span>

                        </div>

                    </div>

                </div>


                <!-- PROFILE -->
                <div class="col-lg-5">

                    <div class="developer-card">

                        <div class="developer-card-top">

                            <span>developer.profile</span>

                            <div class="window-dots">

                                <span></span>
                                <span></span>
                                <span></span>

                            </div>

                        </div>

                        <div class="developer-image-wrapper">

                            <img
                                src="{{ asset('assets/shayan-ali.png') }}"
                                alt="Shayan Ali">

                        </div>

                        <div class="developer-info">

                            <div>

                                <span class="small-label">FULL-STACK DEVELOPER</span>

                                <h3>Shayan Ali</h3>

                            </div>

                            <div class="verified-icon">

                                <i class="fa-solid fa-check"></i>

                            </div>

                        </div>

                        <div class="developer-stack">

                            <span>Laravel</span>
                            <span>React</span>
                            <span>Django</span>
                            <span>Flutter</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>


    <!-- ABOUT / ENGINEERING -->
    <section class="engineering-section">

        <div class="container">

            <div class="section-header">

                <span class="section-label">01 / HOW I WORK</span>

                <h2>
                    Practical engineering,
                    <span>not unnecessary complexity.</span>
                </h2>

            </div>


            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="principle-card">

                        <div class="principle-number">01</div>

                        <i class="fa-solid fa-layer-group"></i>

                        <h4>Structured Development</h4>

                        <p>

                            I focus on maintainable architecture, readable code,
                            and systems that can grow with the project.

                        </p>

                    </div>

                </div>


                <div class="col-lg-4">

                    <div class="principle-card">

                        <div class="principle-number">02</div>

                        <i class="fa-solid fa-bolt"></i>

                        <h4>Efficient Workflow</h4>

                        <p>

                            Modern tools and AI-assisted workflows help accelerate
                            research, testing, prototyping, and development.

                        </p>

                    </div>

                </div>


                <div class="col-lg-4">

                    <div class="principle-card">

                        <div class="principle-number">03</div>

                        <i class="fa-solid fa-code"></i>

                        <h4>Built for Real Use</h4>

                        <p>

                            The goal is always a useful product — not just an
                            attractive interface or a temporary demo.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- SKILLS -->
    <section id="skills" class="skills-section">

        <div class="container">

            <div class="section-header">

                <span class="section-label">02 / TECHNOLOGY STACK</span>

                <h2>
                    Tools I use to
                    <span>build products.</span>
                </h2>

            </div>


            <div class="row g-3">

                <div class="col-xl-3 col-md-6">

                    <div class="stack-card">

                        <div class="stack-icon laravel">
                            <i class="fa-brands fa-laravel"></i>
                        </div>

                        <div>

                            <h5>Laravel</h5>

                            <p>PHP applications, APIs, authentication, dashboards and backend systems.</p>

                        </div>

                    </div>

                </div>


                <div class="col-xl-3 col-md-6">

                    <div class="stack-card">

                        <div class="stack-icon python">
                            <i class="fa-brands fa-python"></i>
                        </div>

                        <div>

                            <h5>Django & Python</h5>

                            <p>Backend development, automation and data-driven applications.</p>

                        </div>

                    </div>

                </div>


                <div class="col-xl-3 col-md-6">

                    <div class="stack-card">

                        <div class="stack-icon react">
                            <i class="fa-brands fa-react"></i>
                        </div>

                        <div>

                            <h5>React.js</h5>

                            <p>Interactive and component-based interfaces for modern applications.</p>

                        </div>

                    </div>

                </div>


                <div class="col-xl-3 col-md-6">

                    <div class="stack-card">

                        <div class="stack-icon flutter">
                            <i class="fa-solid fa-mobile-screen"></i>
                        </div>

                        <div>

                            <h5>Flutter</h5>

                            <p>Cross-platform mobile experiences from a single codebase.</p>

                        </div>

                    </div>

                </div>


                <div class="col-xl-3 col-md-6">

                    <div class="stack-card">

                        <div class="stack-icon javascript">
                            <i class="fa-brands fa-js"></i>
                        </div>

                        <div>

                            <h5>JavaScript</h5>

                            <p>Interactive web experiences and modern frontend functionality.</p>

                        </div>

                    </div>

                </div>


                <div class="col-xl-3 col-md-6">

                    <div class="stack-card">

                        <div class="stack-icon bootstrap">
                            <i class="fa-brands fa-bootstrap"></i>
                        </div>

                        <div>

                            <h5>Bootstrap</h5>

                            <p>Responsive layouts and efficient interface development.</p>

                        </div>

                    </div>

                </div>


                <div class="col-xl-3 col-md-6">

                    <div class="stack-card">

                        <div class="stack-icon database">
                            <i class="fa-solid fa-database"></i>
                        </div>

                        <div>

                            <h5>Databases</h5>

                            <p>MySQL and PostgreSQL for reliable application data.</p>

                        </div>

                    </div>

                </div>


                <div class="col-xl-3 col-md-6">

                    <div class="stack-card">

                        <div class="stack-icon cpp">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div>

                            <h5>C++</h5>

                            <p>Algorithms, problem solving and performance-focused programming.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- PROJECTS -->
    <section id="projects" class="projects-section">

        <div class="container">

            <div class="projects-heading">

                <div class="section-header mb-0">

                    <span class="section-label">03 / SELECTED WORK</span>

                    <h2>
                        Things I've
                        <span>built.</span>
                    </h2>

                </div>

            </div>


            <!-- FILTER -->

            <div class="project-filters">

                <button class="btn-filter active" data-filter="all">All</button>

                <button class="btn-filter" data-filter="web">Web Apps</button>

                <button class="btn-filter" data-filter="enterprise">Systems</button>

                <button class="btn-filter" data-filter="mobile">Mobile</button>

            </div>


            <div class="row g-4" id="projects-grid">

                <!-- PROJECT 1 -->

                <div class="col-lg-4 col-md-6 project-item" data-category="web">

                    <article class="project-card">

                        <div class="project-card-top">

                            <div class="project-type">

                                <span class="project-status"></span>

                                LIVE PROJECT

                            </div>

                            <i class="fa-solid fa-arrow-up-right-from-square"></i>

                        </div>

                        <div class="project-content">

                            <span class="project-index">01</span>

                            <h3>ENTH Tours & Travel</h3>

                            <p>

                                A tourism platform designed for package discovery,
                                booking inquiries, destination management and administration.

                            </p>

                        </div>

                        <div class="project-footer">

                            <div class="tech-list">

                                <span>Laravel</span>
                                <span>MySQL</span>
                                <span>Bootstrap</span>

                            </div>

                            <a href="https://enthtours.com/" target="_blank">

                                Visit Project

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>

                    </article>

                </div>


                <!-- PROJECT 2 -->

                <div class="col-lg-4 col-md-6 project-item" data-category="enterprise">

                    <article class="project-card">

                        <div class="project-card-top">

                            <div class="project-type">

                                <span class="project-status blue"></span>

                                ENTERPRISE

                            </div>

                            <i class="fa-solid fa-store"></i>

                        </div>

                        <div class="project-content">

                            <span class="project-index">02</span>

                            <h3>Shop Management System</h3>

                            <p>

                                A centralized platform for managing inventory,
                                operations, analytics and financial reporting.

                            </p>

                        </div>

                        <div class="project-footer">

                            <div class="tech-list">

                                <span>React</span>
                                <span>JavaScript</span>
                                <span>PostgreSQL</span>

                            </div>

                            <a href="#contact">

                                Discuss Project

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>

                    </article>

                </div>


                <!-- PROJECT 3 -->

                <div class="col-lg-4 col-md-6 project-item" data-category="mobile">

                    <article class="project-card">

                        <div class="project-card-top">

                            <div class="project-type">

                                <span class="project-status purple"></span>

                                MOBILE

                            </div>

                            <i class="fa-solid fa-mobile-screen"></i>

                        </div>

                        <div class="project-content">

                            <span class="project-index">03</span>

                            <h3>Medical Management Hub</h3>

                            <p>

                                A healthcare-oriented system focused on appointments,
                                patient workflows and organized pharmacy management.

                            </p>

                        </div>

                        <div class="project-footer">

                            <div class="tech-list">

                                <span>React</span>
                                <span>Responsive UI</span>
                                <span>PostgreSQL</span>

                            </div>

                            <a href="#contact">

                                Discuss Project

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>

                    </article>

                </div>

            </div>

        </div>

    </section>


    <!-- CONTACT -->
    <section id="contact" class="contact-section">

        <div class="container">

            <div class="contact-wrapper">

                <div class="row g-5 align-items-center">

                    <div class="col-lg-5">

                        <span class="section-label">04 / CONTACT</span>

                        <h2 class="contact-title">

                            Have a project
                            <span>in mind?</span>

                        </h2>

                        <p class="contact-description">

                            If you're building a web application, platform, or
                            digital product, let's discuss the idea and explore
                            the right technical direction.

                        </p>


                        <div class="contact-info">

                            <div class="contact-item">

                                <i class="fa-solid fa-envelope"></i>

                                <div>

                                    <span>EMAIL</span>

                                    <a href="mailto:shayangutum@gmail.com">
                                        shayangutum@gmail.com
                                    </a>

                                </div>

                            </div>


                            <div class="contact-item">

                                <i class="fa-solid fa-circle-check"></i>

                                <div>

                                    <span>STATUS</span>

                                    <strong>Available for Projects</strong>

                                </div>

                            </div>

                        </div>


                        <div class="social-links">

                            <a href="https://github.com/shayangutum-cell" target="_blank">

                                <i class="fa-brands fa-github"></i>

                            </a>

                            <a href="#" target="_blank">

                                <i class="fa-brands fa-linkedin-in"></i>

                            </a>

                        </div>

                    </div>


                    <!-- FORM -->

                    <div class="col-lg-7">

                        <div class="contact-form-card">

                            @if(session('success'))

                                <div class="alert alert-success border-0 mb-4">

                                    <i class="fa-solid fa-circle-check me-2"></i>

                                    {{ session('success') }}

                                </div>

                            @endif


                            <form action="{{ route('contact.send') }}"
                                method="POST"
                                id="portfolio-contact-form">

                                @csrf

                                <div class="row g-4">

                                    <div class="col-md-6">

                                        <label>Full Name</label>

                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control custom-input"
                                            placeholder="Your name"
                                            required>

                                    </div>


                                    <div class="col-md-6">

                                        <label>Email Address</label>

                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control custom-input"
                                            placeholder="you@example.com"
                                            required>

                                    </div>


                                    <div class="col-12">

                                        <label>Project Type</label>

                                        <select
                                            name="engagement_type"
                                            class="form-select custom-input">

                                            <option value="Full-Stack Application Development">
                                                Full-Stack Application
                                            </option>

                                            <option value="Cross-Platform Mobile Development">
                                                Mobile Application
                                            </option>

                                            <option value="Enterprise Software">
                                                Enterprise Software
                                            </option>

                                            <option value="Technical Consultation">
                                                Technical Consultation
                                            </option>

                                        </select>

                                    </div>


                                    <div class="col-12">

                                        <label>Tell me about your project</label>

                                        <textarea
                                            name="message"
                                            class="form-control custom-input"
                                            rows="5"
                                            placeholder="Describe your idea, goals, or requirements..."
                                            required></textarea>

                                    </div>


                                    <div class="col-12">

                                        <button
                                            type="submit"
                                            class="submit-button">

                                            <span class="button-text">

                                                Send Message

                                                <i class="fa-solid fa-arrow-right"></i>

                                            </span>

                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- FOOTER -->

    <footer class="site-footer">

        <div class="container">

            <div class="footer-content">

                <span>
                    © <span id="year"></span> Shayan Ali
                </span>

                <span class="footer-code">
                    Designed & built with code.
                </span>

            </div>

        </div>

    </footer>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>