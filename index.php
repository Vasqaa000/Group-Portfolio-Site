<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Portfolio Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles/index_styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo">Group<span>Portfolio</span>Site</a>
            <div class="nav-menu">
                <ul class="nav-links">
                    <li><a href="#hero" class="nav-link">Home</a></li>
                    <li><a href="#team" class="nav-link">Team</a></li>
                    <li><a href="#projects" class="nav-link">Projects</a></li>
                </ul>
            </div>
            <button class="mobile-nav-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="hero-pattern"></div>
        <div class="hero-container">
            <p class="hero-subtitle">Welcome to our portfolio</p>
            <h1 class="hero-title">We are a team of <span>I.T. Students</span> learning for the future with <span>modern technology</span></h1>
            <p class="hero-description">Our group specializes in creating efficient, responsive, effective websites and applications using the latest technologies and programming practices.</p>
            <div class="hero-actions">
                <a href="#team" class="btn btn-primary">Meet Our Team</a>
                <a href="#projects" class="btn btn-secondary">View Projects</a>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team">
        <div class="team-container">
            <div class="section-header">
                <p class="section-subtitle">Our Group Members</p>
                <h2 class="section-title">Meet Our Team</h2>
                <p class="section-description">
                    Our group, consisting of Six members, eager to learn and grow in the field of Information Technology.
                </p>
            </div>
            <div class="team-grid">
                <!-- Ron -->
                <div class="team-member">
                    <div class="member-image-container">
                        <img src="images/ron.png" alt="Ron Bernardino" class="member-image">
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Ron Bernardino</h3>
                        <p class="member-role">Full Stack Developer</p>
                        <div class="member-contacts">
                            <p><i class="fas fa-phone me-2"></i>(+63) 966-907-2496</p>
                            <p><i class="fas fa-envelope me-2"></i>hectorbernardino06@gmail.com</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i>Santa Cruz, Laguna, Philippines</p>
                        </div>
                        <div class="member-links">
                            <a href="https://github.com/Vasqaa000" target="_blank" class="social-link"><i class="fab fa-github"></i></a>
                            <a href="https://facebook.com/rh.bernardino" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/vas.qaat" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                        </div>
                        <a href="portfolios/ron.php" class="view-btn">View Portfolio</a>
                    </div>
                </div>

                <!-- Ralph -->
                <div class="team-member">
                    <div class="member-image-container">
                        <img src="images/ralph.png" alt="Ralph Lorenz" class="member-image">
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Ralph Hernandez</h3>
                        <p class="member-role">UI/UX Designer</p>
                        <div class="member-contacts">
                            <p><i class="fas fa-phone me-2"></i>(+63) 995-412-1712</p>
                            <p><i class="fas fa-envelope me-2"></i>hernandez16ralph13@gmail.com</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i>Magdalena, Laguna, Philippines</p>
                        </div>
                        <div class="member-links">
                            <a href="https://github.com/00Asura0" target="_blank" class="social-link"><i class="fab fa-github"></i></a>
                            <a href="https://www.facebook.com/hernandez.r16" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
                        </div>
                        <a href="portfolios/ralph.php" class="view-btn">View Portfolio</a>
                    </div>
                </div>

                <!-- Abram -->
                <div class="team-member">
                    <div class="member-image-container">
                        <img src="images/abram.png" alt="Abram Saunar" class="member-image">
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Abram Saunar</h3>
                        <p class="member-role">Software Developer</p>
                        <div class="member-contacts">
                            <p><i class="fas fa-phone me-2"></i>(+63) 945-708-8843</p>
                            <p><i class="fas fa-envelope me-2"></i>jhosphsaunar@gmail.com</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i>Calauan, Laguna, Philippines</p>
                        </div>
                        <div class="member-links">
                            <a href="https://github.com/Saunar1128" target="_blank" class="social-link"><i class="fab fa-github"></i></a>
                            <a href="https://www.facebook.com/saunarabramjhosph028" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/saunar_028" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                        </div>
                        <a href="portfolios/abram.php" class="view-btn">View Portfolio</a>
                    </div>
                </div>

                <!-- Casper -->
                <div class="team-member">
                    <div class="member-image-container">
                        <img src="images/casper.png" alt="Casper Cabasa" class="member-image">
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Casper Cabasa</h3>
                        <p class="member-role">Front-End/UX Developer</p>
                        <div class="member-contacts">
                            <p><i class="fas fa-phone me-2"></i>(+63) 966-235-2609</p>
                            <p><i class="fas fa-envelope me-2"></i>cabasamarcasper55@gmail.com</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i>Santa Cruz, Laguna, Philippines</p>
                        </div>
                        <div class="member-links">
                            <a href="https://github.com/Cazperc" target="_blank" class="social-link"><i class="fab fa-github"></i></a>
                            <a href="https://www.facebook.com/marcasper12" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
                        </div>
                        <a href="portfolios/casper.php" class="view-btn">View Portfolio</a>
                    </div>
                </div>

                <!-- Marjhune -->
                <div class="team-member">
                    <div class="member-image-container">
                        <img src="images/marjhune.png" alt="Marjhune Alcantara" class="member-image">
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Marjhune Lase</h3>
                        <p class="member-role">Front-End Developer</p>
                        <div class="member-contacts">
                            <p><i class="fas fa-phone me-2"></i>(+63) 966-376-7882</p>
                            <p><i class="fas fa-envelope me-2"></i>jhunelase@gmail.com</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i>Magdalena, Laguna, Philippines</p>
                        </div>
                        <div class="member-links">
                            <a href="https://github.com/jhunmar128" target="_blank" class="social-link"><i class="fab fa-github"></i></a>
                            <a href="https://www.facebook.com/marjhune.labajoslase" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/jhune_28_" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                        </div>
                        <a href="portfolios/marjhune.php" class="view-btn">View Portfolio</a>
                    </div>
                </div>

                <!-- Moises -->
                <div class="team-member">
                    <div class="member-image-container">
                        <img src="images/moises.png" alt="Moises Nacion" class="member-image">
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Moises Nacion</h3>
                        <p class="member-role">Backend Developer</p>
                        <div class="member-contacts">
                            <p><i class="fas fa-phone me-2"></i>(+63) 910-341-5079</p>
                            <p><i class="fas fa-envelope me-2"></i>ahronmoisesnacion@gmail.com</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i>Santa Cruz, Laguna, Philippines</p>
                        </div>
                        <div class="member-links">
                            <a href="https://github.com/Petrichov" target="_blank" class="social-link"><i class="fab fa-github"></i></a>
                            <a href="https://www.facebook.com/ahronmoises.nacion.9" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/moisesnacion" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                        </div>
                        <a href="portfolios/moises.php" class="view-btn">View Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="projects-container">
            <div class="section-header">
                <p class="section-subtitle">Our Proudest Works</p>
                <h2 class="section-title">Featured Projects</h2>
                <p class="section-description">
                    Listed here are some of our recent and most relevant projects that showcases our team's skills and knowledge in Web and Software Development.
                </p>
            </div>
            <div class="project-cards">
                <div class="project-card">
                    <div class="project-info">
                        <h3 class="project-title">BrewVery Ordering System</h3>
                        <h5 class="project-subtitle">Web and Mobile Cross-Platform Application</h5>
                        <p class="project-description">A mobile ordering app for a local milk tea business, featuring secure payments, location-based delivery, a customizable drink builder, and customer reviews.</p>
                        <div class="project-team">
                            <span class="team-label">Project Team Members:</span>
                            <div class="team-avatars">
                                <a href="portfolios/casper.php" class="team-avatar-link">
                                    <img src="images/casper.png" alt="Casper" class="team-avatar">
                                </a>
                                <a href="portfolios/moises.php" class="team-avatar-link">
                                    <img src="images/moises.png" alt="Moises" class="team-avatar">
                                </a>
                                <a href="portfolios/marjhune.php" class="team-avatar-link">
                                    <img src="images/marjhune.png" alt="Marjhune" class="team-avatar">
                                </a>
                            </div>
                        </div>
                        <a href="#" class="view-btn">View Details</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-info">
                        <h3 class="project-title">RentaRide</h3>
                        <h5 class="project-subtitle">Desktop Scheduling and Bookkeeping Software</h5>
                        <p class="project-description">A car rental management system with calendar-based scheduling and a full record-sorting menu, designed to help a client track rentals more efficiently.</p>
                        <div class="project-team">
                            <span class="team-label">Project Team Members:</span>
                            <div class="team-avatars">
                                <a href="portfolios/ron.php" class="team-avatar-link">
                                    <img src="images/ron.png" alt="Ron" class="team-avatar">
                                </a>
                                <a href="portfolios/moises.php" class="team-avatar-link">
                                    <img src="images/moises.png" alt="Moises" class="team-avatar">
                                </a>
                            </div>
                        </div>
                        <a href="#" class="view-btn">View Details</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-info">
                        <h3 class="project-title">LuxxeVault</h3>
                        <h5 class="project-subtitle">E-commerce Web Application</h5>
                        <p class="project-description">Site features a user-friendly interface for browsing premium watch collections, handling customer inquiries, and providing a smooth and secure online shopping experience.</p>
                        <div class="project-team">
                            <span class="team-label">ProjectTeam Members:</span>
                            <div class="team-avatars">
                                <a href="portfolios/ralph.php" class="team-avatar-link">
                                    <img src="images/ralph.png" alt="Ralph" class="team-avatar">
                                </a>
                                <a href="portfolios/abram.php" class="team-avatar-link">
                                    <img src="images/abram.png" alt="Abram" class="team-avatar">
                                </a>
                            </div>
                        </div>
                        <a href="#" class="view-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>About the Site</h3>
                    <p>A website project created for showcasing our group's background and projects. A task assigned to us by our instructor in the course of Web Systems and Technologies.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#hero">Home</a></li>
                        <li class="footer-link"><a href="#team">Team</a></li>
                        <li class="footer-link"><a href="#projects">Projects</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>About our College</h3>
                    <ul class="footer-links">
                        <li class="footer-link">Laguna State Polytechnic University- Santa Cruz Main Campus | College of Computer Studies</li>
                        <li class="footer-link">Bubukal, Santa Cruz, Laguna</li>
                        <li class="footer-link"><a href="https://lspu.edu.ph" target="_blank">lspu.edu.ph</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <p class="footer-copyright">
                    Group Portfolio Site submitted to Ms. Harlene Origines - ITEL203 Web Systems and Technologies Course Instructor
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const navLinks = document.querySelector('.nav-links');

        mobileNavToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            const icon = mobileNavToggle.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                navLinks.classList.remove('active');
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html> 