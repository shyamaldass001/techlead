<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shyamal Das | Tech Lead & Software Architect</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        :root {
            --primary-teal: #008080;
            --dark-teal: #004d4d;
            --light-teal: #e6f2f2;
            --text-dark: #2d3748;
            --text-light: #f8f9fa;
            --bg-white: #ffffff;
            --font-main: 'Montserrat', sans-serif;
        }

        body {
            font-family: var(--font-main);
            color: var(--text-dark);
            background-color: var(--bg-white);
            overflow-x: hidden;
        }

        /* Sticky Navigation */
        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid var(--light-teal);
            transition: all 0.3s ease;
        }
        .navbar-brand {
            font-weight: 800;
            color: var(--primary-teal) !important;
            letter-spacing: -0.5px;
        }
        .nav-link {
            font-weight: 600;
            color: var(--text-dark) !important;
            margin-left: 1.5rem;
            transition: color 0.3s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--primary-teal) !important;
        }

        /* Hero Section */
        .hero-section {
            padding: 160px 0 100px 0;
            background: linear-gradient(135deg, var(--light-teal) 0%, #ffffff 100%);
        }
        .hero-title {
            font-weight: 800;
            font-size: 3.5rem;
            color: var(--dark-teal);
            line-height: 1.2;
        }
        .hero-accent {
            color: var(--primary-teal);
        }
        .hero-subtitle {
            font-size: 1.25rem;
            font-weight: 500;
            color: #4a5568;
        }

        /* Buttons */
        .btn-teal {
            background-color: var(--primary-teal);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            border: 2px solid var(--primary-teal);
        }
        .btn-teal:hover {
            background-color: var(--dark-teal);
            border-color: var(--dark-teal);
            color: white;
        }
        .btn-outline-teal {
            background-color: transparent;
            color: var(--primary-teal);
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 4px;
            border: 2px solid var(--primary-teal);
            transition: all 0.3s ease;
        }
        .btn-outline-teal:hover {
            background-color: var(--primary-teal);
            color: white;
        }

        /* Metric Cards */
        .metric-card {
            background: white;
            border-left: 5px solid var(--primary-teal);
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 80, 80, 0.06);
            padding: 1.5rem;
            transition: transform 0.3s ease;
        }
        .metric-card:hover {
            transform: translateY(-5px);
        }
        .metric-num {
            font-weight: 800;
            font-size: 2.5rem;
            color: var(--dark-teal);
        }

        /* Section Global Layout */
        .section-padding {
            padding: 100px 0;
        }
        .section-title {
            font-weight: 800;
            font-size: 2.25rem;
            color: var(--dark-teal);
            position: relative;
            margin-bottom: 3rem;
        }
        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 60px;
            height: 4px;
            background-color: var(--primary-teal);
        }

        /* Experience Timeline */
        .timeline-item {
            position: relative;
            padding-left: 2.5rem;
            border-left: 2px solid var(--light-teal);
            padding-bottom: 3rem;
        }
        .timeline-item:last-child {
            padding-bottom: 0;
            border-left: 2px solid transparent;
        }
        .timeline-marker {
            position: absolute;
            left: -9px;
            top: 5px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: var(--primary-teal);
            border: 4px solid white;
            box-shadow: 0 0 0 4px var(--light-teal);
        }

        /* Project & Skill Badges */
        .skill-category-card {
            border: 1px solid var(--light-teal);
            border-top: 4px solid var(--primary-teal);
            border-radius: 6px;
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.02);
        }
        .badge-custom {
            background-color: var(--light-teal);
            color: var(--dark-teal);
            font-weight: 600;
            padding: 0.5rem 0.8rem;
            font-size: 0.85rem;
            margin: 0.25rem;
            border-radius: 4px;
            display: inline-block;
        }

        .project-card {
            background: white;
            border: 1px solid rgba(0, 80, 80, 0.1);
            border-radius: 8px;
            transition: all 0.3s ease;
            height: 100%;
        }
        .project-card:hover {
            box-shadow: 0 10px 25px rgba(0, 80, 80, 0.08);
            transform: translateY(-2px);
        }

        /* Contact Section */
        .contact-section {
            background-color: var(--dark-teal);
            color: white;
        }
        .contact-section .section-title {
            color: white;
        }
        .contact-section .section-title::after {
            background-color: white;
        }
        .form-control {
            border-radius: 4px;
            padding: 0.75rem 1rem;
            border: 1px solid rgba(255,255,255,0.2);
            background-color: rgba(255,255,255,0.05);
            color: white;
        }
        .form-control:focus {
            background-color: rgba(255,255,255,0.1);
            border-color: var(--light-teal);
            box-shadow: none;
            color: white;
        }
        .form-control::placeholder {
            color: rgba(255,255,255,0.5);
        }

        footer {
            background-color: #003333;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="120">

    <!-- Sticky Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#hero">SHYAMAL DAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#hero">Overview</a></li>
                    <li class="nav-item"><a class="nav-link" href="#metrics">Impact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Architectures</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge bg-transparent border border-success text-success px-3 py-2 rounded-pill uppercase fw-bold mb-3 tracking-wider">
                        <i class="fa-solid fa-briefcase me-2"></i>Available for Enterprise Leadership Roles
                    </span>
                    <h1 class="hero-title mb-3">Architecting Scalable Platforms. Leading <span class="hero-accent">High-Performing Teams.</span></h1>
                    <p class="hero-subtitle mb-4 max-w-2xl text-muted">
                        Tech Lead with <strong>13+ years of engineering mastery</strong> specializing in scaling high-traffic systems across EdTech, e-commerce, CRM, and logistics using Java, Spring Boot, PHP, Laravel, and Cloud infrastructures.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#contact" class="btn btn-teal">Initiate Interview</a>
                        <a href="https://linkedin.com/in/shyamal-das-tech-lead" target="_blank" class="btn btn-outline-teal"><i class="fab fa-linkedin me-2"></i>Connect Profile</a>
                        <a href="https://github.com/shyamaldass001" target="_blank" class="btn btn-outline-teal"><i class="fab fa-github me-2"></i>Review Code</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="shyamaldas.png" alt="shyamal das" title="shyamal das">
                </div>
            </div>
        </div>
    </header>

    <!-- Key Metrics Dashboard Section -->
    <section id="metrics" class="section-padding bg-white border-bottom">
        <div class="container">
            <h2 class="section-title">Engineered Metrics & Impact</h2>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="metric-card">
                        <div class="metric-num">+30%</div>
                        <div class="fw-semibold text-muted small uppercase mt-2">API Performance Gains</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="metric-card">
                        <div class="metric-num">-40%</div>
                        <div class="fw-semibold text-muted small uppercase mt-2">Production Defects Cut</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="metric-card">
                        <div class="metric-num">20-25%</div>
                        <div class="fw-semibold text-muted small uppercase mt-2">Delivery Velocity Boost</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="metric-card">
                        <div class="metric-num">6+</div>
                        <div class="fw-semibold text-muted small uppercase mt-2">Full-Lifecycle Products Scaled</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Timeline Section -->
    <section id="experience" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Leadership & Professional History</h2>
            <div class="row mt-5">
                <div class="col-lg-10">
                    
                    <!-- Dreamsoft Infotech -->
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="d-flex flex-wrap justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="fw-bold m-0 text-dark-teal">Tech Lead</h4>
                                <p class="text-muted fw-semibold m-0">Dreamsoft Infotech Pvt. Ltd. | Noida, India</p>
                            </div>
                            <span class="badge bg-teal text-white px-3 py-2 fw-medium">Jan 2020 — Present</span>
                        </div>
                        <ul class="text-muted mt-3">
                            <li>Orchestrate end-to-end multi-tier architectures using Java (Spring Boot), PHP (Laravel), React, and MySQL from initial concept to deployment.</li>
                            <li>Engineered microservices and backend systems, hitting a 30% performance boost through structured query tuning, strategic caching, and profile-driven indexing.</li>
                            <li>Championed Agile transformations, increasing sprint velocity by up to 25% via refined grooming cycles and accurate delivery frameworks.</li>
                            <li>Cultivated an engineering culture focused on clean code, driving technical mentorship and structured peer reviews that dropped production defects by 40%.</li>
                        </ul>
                    </div>

                    <!-- Soigne Technologies -->
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="d-flex flex-wrap justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="fw-bold m-0 text-dark-teal">Tech Lead</h4>
                                <p class="text-muted fw-semibold m-0">Soigne Technologies Pvt. Ltd. | Noida, India</p>
                            </div>
                            <span class="badge bg-secondary text-white px-3 py-2 fw-medium">Jun 2018 — Jan 2020</span>
                        </div>
                        <ul class="text-muted mt-3">
                            <li>Optimized legacy relational data models and client-side rendering pathways, dropping application page-load latencies by 20-30%.</li>
                            <li>Established normalized Git workflows and automated deployment strategies, preventing development integration blocks.</li>
                            <li>Oversaw product delivery processes ensuring strict compliance with high accessibility standards and modern interface designs.</li>
                        </ul>
                    </div>

                    <!-- Earlier Experience Summary -->
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div>
                            <h4 class="fw-bold m-0 text-muted">Prior Engineering Leadership</h4>
                            <p class="text-muted mt-2">
                                Managed high-performance operations as a <strong>Team Lead</strong> at <em>Unified Media Marketing Group</em> (2015-2018) and established a solid engineering foundation as a <strong>Senior Software Engineer</strong> at <em>JayIntech Infosys Pvt. Ltd.</em> (2013-2015).
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Skills Section -->
    <section id="skills" class="section-padding bg-white">
        <div class="container">
            <h2 class="section-title">Technical Capabilities Matrix</h2>
            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="skill-category-card p-4 h-100">
                        <h5 class="fw-bold text-dark-teal mb-3"><i class="fa-solid fa-code me-2 text-teal"></i>Languages & Ecosystems</h5>
                        <div class="d-flex flex-wrap">
                            <span class="badge-custom">Java</span>
                            <span class="badge-custom">Spring Boot</span>
                            <span class="badge-custom">PHP</span>
                            <span class="badge-custom">Laravel</span>
                            <span class="badge-custom">JavaScript (ES6+)</span>
                            <span class="badge-custom">TypeScript</span>
                            <span class="badge-custom">React</span>
                            <span class="badge-custom">WordPress / WooCommerce</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill-category-card p-4 h-100">
                        <h5 class="fw-bold text-dark-teal mb-3"><i class="fa-solid fa-server me-2 text-teal"></i>Cloud, DevOps & Systems</h5>
                        <div class="d-flex flex-wrap">
                            <span class="badge-custom">AWS (EC2, S3)</span>
                            <span class="badge-custom">Docker Containers</span>
                            <span class="badge-custom">CI/CD Automation</span>
                            <span class="badge-custom">RESTful Web Services</span>
                            <span class="badge-custom">Microservices Architecture</span>
                            <span class="badge-custom">WebSockets</span>
                            <span class="badge-custom">MySQL / MongoDB</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill-category-card p-4 h-100">
                        <h5 class="fw-bold text-dark-teal mb-3"><i class="fa-solid fa-users-gear me-2 text-teal"></i>Leadership & Practices</h5>
                        <div class="d-flex flex-wrap">
                            <span class="badge-custom">Agile / Scrum Master</span>
                            <span class="badge-custom">System Design Architecture</span>
                            <span class="badge-custom">Structured Code Reviews</span>
                            <span class="badge-custom">Technical Mentorship</span>
                            <span class="badge-custom">Cross-functional Management</span>
                            <span class="badge-custom">Performance Optimization</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Architecture & Projects Matrix Section -->
    <section id="projects" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Enterprise Systems Catalog</h2>
            <div class="row g-4 mt-2">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card p-4 d-flex flex-column justify-content-between">
                        <div>
                            <span class="text-teal fw-bold small uppercase tracking-wider">EdTech Platform</span>
                            <h4 class="fw-bold text-dark-teal mt-1 mb-3">OnlineSchooling</h4>
                            <p class="text-muted small">Architected high-availability educational workflows designed to serve global students uninterruptedly. Built utilizing robust enterprise abstractions.</p>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-secondary-subtle text-dark small me-1">Java</span>
                            <span class="badge bg-secondary-subtle text-dark small">Spring Boot</span>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card p-4 d-flex flex-column justify-content-between">
                        <div>
                            <span class="text-teal fw-bold small uppercase tracking-wider">E-Commerce Matrimonial</span>
                            <h4 class="fw-bold text-dark-teal mt-1 mb-3">ShaadiChoice</h4>
                            <p class="text-muted small">Engineered search patterns and low-latency matchmaking logic to significantly increase transactional site engagement metrics.</p>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-secondary-subtle text-dark small me-1">PHP</span>
                            <span class="badge bg-secondary-subtle text-dark small">Laravel</span>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card p-4 d-flex flex-column justify-content-between">
                        <div>
                            <span class="text-teal fw-bold small uppercase tracking-wider">Supply Chain Logistics</span>
                            <h4 class="fw-bold text-dark-teal mt-1 mb-3">WMS Platform (SohanLal)</h4>
                            <p class="text-muted small">Delivered high-throughput backend modules supporting warehouse tasks, accelerating operational processing execution.</p>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-secondary-subtle text-dark small me-1">Java</span>
                            <span class="badge bg-secondary-subtle text-dark small">Spring Boot</span>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card p-4 d-flex flex-column justify-content-between">
                        <div>
                            <span class="text-teal fw-bold small uppercase tracking-wider">Food Services Infrastructure</span>
                            <h4 class="fw-bold text-dark-teal mt-1 mb-3">Rasoi123</h4>
                            <p class="text-muted small">Redesigned ordering checkout pipelines using behavioral heuristics to systematically minimize abandonment rates.</p>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-secondary-subtle text-dark small me-1">PHP</span>
                            <span class="badge bg-secondary-subtle text-dark small">Laravel</span>
                        </div>
                    </div>
                </div>
                <!-- Project 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card p-4 d-flex flex-column justify-content-between">
                        <div>
                            <span class="text-teal fw-bold small uppercase tracking-wider">Enterprise CRM</span>
                            <h4 class="fw-bold text-dark-teal mt-1 mb-3">CRM (SincoCable)</h4>
                            <p class="text-muted small">Constructed internal tracking systems ensuring comprehensive real-time analytical reporting visibility for leadership teams.</p>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-secondary-subtle text-dark small me-1">PHP</span>
                            <span class="badge bg-secondary-subtle text-dark small">Laravel</span>
                        </div>
                    </div>
                </div>
                <!-- Project 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card p-4 d-flex flex-column justify-content-between">
                        <div>
                            <span class="text-teal fw-bold small uppercase tracking-wider">Compliance Tracking</span>
                            <h4 class="fw-bold text-dark-teal mt-1 mb-3">CSR Management Platform</h4>
                            <p class="text-muted small">Engineered data dashboards enabling streamlined audit tracking and operational transparency guidelines for NGOs.</p>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-secondary-subtle text-dark small me-1">PHP</span>
                            <span class="badge bg-secondary-subtle text-dark small">Laravel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- High-Conversion Contact Section -->
    <section id="contact" class="section-padding contact-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 class="section-title">Schedule a Technical Leadership Consultation</h2>
                    <p class="text-white-50 mb-4">
                        Looking for an experienced technical leader to resolve challenging backend performance regressions or scale up engineering team velocities? Let's connect.
                    </p>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-envelope fs-4 me-3 text-light-teal"></i>
                        <span>shyamaldass001@gmail.com</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-phone fs-4 me-3 text-light-teal"></i>
                        <span>+91 9971973110</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-location-dot fs-4 me-3 text-light-teal"></i>
                        <span>New Delhi, India</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="#" method="POST" id="contactForm" class="row g-3 p-4 bg-white bg-opacity-10 rounded shadow-sm">
                        <div class="col-md-6">
                            <label class="form-label text-white-50 small fw-semibold">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-white-50 small fw-semibold">Corporate Email</label>
                            <input type="email" name="email" class="form-control" placeholder="john@enterprise.com" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label text-white-50 small fw-semibold">Contact Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="john@enterprise.com" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-white-50 small fw-semibold">Subject / Scope of Engagement</label>
                            <input type="text" name="sub" class="form-control" placeholder="e.g., Tech Lead Interview Request" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-white-50 small fw-semibold">Message</label>
                            <textarea name="msg" class="form-control" rows="4" placeholder="Briefly outline your team's current architecture requirements..." required></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-teal w-100 text-dark-teal border-white">Transmit Message</button>
                        </div>
                    </form>
                    <div id="response"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-center">
        <div class="container">
            <p class="m-0">&copy; 2026 Shyamal Das. Credentials Verified. Built with precision</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  $(document).ready(function () {
    $("#contactForm").submit(function (e) {
      e.preventDefault();
      $.ajax({
        url: "send_contact_mail.php",
        type: "POST",
        data: $(this).serialize(),
        beforeSend: function () {
          $("#response").html("Sending...");
        },
        success: function (data) {
          $("#response").html(data);
          $("#contactForm")[0].reset();
        },
        error: function () {
          $("#response").html("Something went wrong.");
        }
      });
    });
  });
  </script>
</body>
</html>
