<?php
get_header();
?>

<main id="primary" class="portfolio-main">
    <div class="portfolio-container">

        <!-- Hero Section -->
        <section class="hero-section" id="hero">
            <div class="section-header">
            </div>
            <div class="hero-content">
                <h1><?php echo __('Aditya Shah', 'portfolio'); ?></h1>
                <p class="subtitle"><?php echo __('Computer Engineering Student | Full-Stack Developer', 'portfolio'); ?></p>
                <div class="contact-info">
                    <p><i class="fas fa-phone"></i> <?php echo __('Phone:', 'portfolio'); ?> <span>+91 7043453086</span></p>
                    <p><i class="fas fa-envelope"></i> <?php echo __('Email:', 'portfolio'); ?> <span>adityashah2414@gmail.com</span></p>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="skills-section" id="skills">
            <div class="section-header">
                <h2><i class="fas fa-code"></i> <?php echo __('Technical Skills', 'portfolio'); ?></h2>
            </div>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3><?php echo __('Programming Languages', 'portfolio'); ?></h3>
                    <ul>
                        <li><?php echo __('JavaScript', 'portfolio'); ?></li>
                        <li><?php echo __('Python', 'portfolio'); ?></li>
                        <li><?php echo __('Java (OOPs)', 'portfolio'); ?></li>
                        <li><?php echo __('SQL', 'portfolio'); ?></li>
                        <li><?php echo __('PHP', 'portfolio'); ?></li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3><?php echo __('Frontend', 'portfolio'); ?></h3>
                    <ul>
                        <li><?php echo __('WordPress', 'portfolio'); ?></li>
                        <li><?php echo __('React.js', 'portfolio'); ?></li>
                        <li><?php echo __('HTML/CSS', 'portfolio'); ?></li>
                        <li><?php echo __('Bootstrap', 'portfolio'); ?></li>
                        <li><?php echo __('Tailwind CSS', 'portfolio'); ?></li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3><?php echo __('Backend & Databases', 'portfolio'); ?></h3>
                    <ul>
                        <li><?php echo __('Node.js', 'portfolio'); ?></li>
                        <li><?php echo __('Express.js', 'portfolio'); ?></li>
                        <li><?php echo __('MongoDB', 'portfolio'); ?></li>
                        <li><?php echo __('MySQL', 'portfolio'); ?></li>
                        <li><?php echo __('JDBC', 'portfolio'); ?></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="projects-section" id="projects">
            <div class="section-header">
                <h2><i class="fas fa-project-diagram"></i> <?php echo __('Projects', 'portfolio'); ?></h2>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <h3><?php echo __('Personal Portfolio Website (This Website)', 'portfolio'); ?></h3>
                    <span class="project-date"><?php echo __('MAY 2025', 'portfolio'); ?></span>
                </div>
                <ul class="project-details">
                    <li><?php echo __('Built using WordPress with a fully custom theme', 'portfolio'); ?></li>
                </ul>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <h3><?php echo __('Emotion Detection Model for Conversational AI', 'portfolio'); ?></h3>
                    <span class="project-date"><?php echo __('FEB 2025', 'portfolio'); ?></span>
                </div>
                <ul class="project-details">
                    <li><?php echo __('Built a multi-label emotion classifier using RoBERTa-large and the GoEmotions dataset', 'portfolio'); ?></li>
                    <li><?php echo __('Detected 28 fine-grained emotions from text inputs with context-aware understanding', 'portfolio'); ?></li>
                    <li><?php echo __('Improved performance via data augmentation, synthetic data generation, and custom weighted focal loss', 'portfolio'); ?></li>
                    <li><?php echo __('Implemented real-time prediction with history tracking for dynamic conversation analysis', 'portfolio'); ?></li>
                    <li><?php echo __('Used: PyTorch, HuggingFace Transformers, Pandas, Datasets', 'portfolio'); ?></li>
                </ul>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <h3><?php echo __('E-commerce Website – ADAA Jaipur', 'portfolio'); ?></h3>
                    <span class="project-date"><?php echo __('JAN 2025', 'portfolio'); ?></span>
                </div>
                <ul class="project-details">
                    <li><?php echo __('Full-stack platform using React.js, Tailwind CSS, Node.js, Express.js', 'portfolio'); ?></li>
                    <li><?php echo __('AI-powered chatbot using Gemini', 'portfolio'); ?></li>
                    <li><?php echo __('Admin panel, search, authentication, and email confirmation', 'portfolio'); ?></li>
                </ul>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <h3><?php echo __('Wedding Planner Website', 'portfolio'); ?></h3>
                    <span class="project-date"><?php echo __('MAR 2024', 'portfolio'); ?></span>
                </div>
                <ul class="project-details">
                    <li><?php echo __('React frontend with Express.js backend and MongoDB', 'portfolio'); ?></li>
                    <li><?php echo __('Socket.io for real-time chat', 'portfolio'); ?></li>
                </ul>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <h3><?php echo __('Inventory Management System', 'portfolio'); ?></h3>
                    <span class="project-date"><?php echo __('OCT 2023', 'portfolio'); ?></span>
                </div>
                <ul class="project-details">
                    <li><?php echo __('Java + Swing GUI desktop app', 'portfolio'); ?></li>
                    <li><?php echo __('SQL with Hibernate ORM and JDBC', 'portfolio'); ?></li>
                </ul>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <h3><?php echo __('Marvel Universe Info Hub', 'portfolio'); ?></h3>
                    <span class="project-date"><?php echo __('OCT 2023', 'portfolio'); ?></span>
                </div>
                <ul class="project-details">
                    <li><?php echo __('HTML, CSS, Bootstrap-based site with JavaScript interactivity', 'portfolio'); ?></li>
                    <li><?php echo __('Rich comic and character info via dynamic UI', 'portfolio'); ?></li>
                </ul>
            </div>
        </section>

        <!-- Education Section -->
        <section class="education-section" id="education">
            <div class="section-header">
                <h2><i class="fas fa-graduation-cap"></i> <?php echo __('Education', 'portfolio'); ?></h2>
            </div>
            <div class="education-item">
                <h3><?php echo __('B.Tech in Computer Engineering', 'portfolio'); ?></h3>
                <p class="institution"><?php echo __('Marwadi University (2022–2026)', 'portfolio'); ?></p>
                <p class="performance"><?php echo __('CPI:', 'portfolio'); ?> 8.78</p>
            </div>
            <div class="education-item">
                <h3><?php echo __('Higher Secondary Certificate (HSC)', 'portfolio'); ?></h3>
                <p class="institution"><?php echo __('Innovative Schools (2022)', 'portfolio'); ?></p>
                <p class="performance"><?php echo __('Percentile:', 'portfolio'); ?> 83.34</p>
            </div>
            <div class="education-item">
                <h3><?php echo __('Secondary School Certificate (SSC)', 'portfolio'); ?></h3>
                <p class="institution"><?php echo __('Imulidhar Schools (2020)', 'portfolio'); ?></p>
                <p class="performance"><?php echo __('Percentile:', 'portfolio'); ?> 89.99</p>
            </div>
        </section>

        <!-- Certificates Section -->
        <section class="certificates-section" id="certificates">
            <div class="section-header">
                <h2><i class="fas fa-certificate"></i> <?php echo __('Certifications', 'portfolio'); ?></h2>
            </div>
            <div class="certificate-item">
                <h3><?php echo __('JavaScript (Basic)', 'portfolio'); ?></h3>
                <p class="issuer"><?php echo __('HackerRank • DEC 2023', 'portfolio'); ?></p>
            </div>
            <div class="certificate-item">
                <h3><?php echo __('Java (Basic)', 'portfolio'); ?></h3>
                <p class="issuer"><?php echo __('HackerRank • APR 2023', 'portfolio'); ?></p>
            </div>
        </section>

        <!-- Connect With Me Section -->
        <section class="links-section" id="connect">
            <div class="section-header">
                <h2><i class="fas fa-link"></i> <?php echo __('Connect With Me', 'portfolio'); ?></h2>
            </div>
            <div class="links-wrapper">
                <a href="https://www.hackerrank.com/profile/adiheer1424" target="_blank" class="link-item">
                    <i class="fab fa-hackerrank"></i>
                    <span><?php echo __('HackerRank', 'portfolio'); ?></span>
                </a>

                <a href="https://github.com/aditya241104" target="_blank" class="link-item">
                    <i class="fab fa-github"></i>
                    <span><?php echo __('GitHub', 'portfolio'); ?></span>
                </a>

                <a href="https://stackoverflow.com/users/30438573/aditya-shah" target="_blank" class="link-item">
                    <i class="fab fa-stack-overflow"></i>
                    <span><?php echo __('Stack Overflow', 'portfolio'); ?></span>
                </a>

                <a href="https://www.linkedin.com/in/aditya-shah-66a81a258/" target="_blank" class="link-item">
                    <i class="fab fa-linkedin"></i>
                    <span><?php echo __('LinkedIn', 'portfolio'); ?></span>
                </a>
            </div>
        </section>

        <!-- Resume Download Section -->
        <section class="resume-download" id="resume">
            <div class="section-header">
                <h2><i class="fas fa-file-pdf"></i> <?php echo __('Download My Resume', 'portfolio'); ?></h2>
            </div>
            <p class="resume-subtext"><?php echo __('Get a PDF version of my resume for offline reference.', 'portfolio'); ?></p>

            <a href="<?php echo get_template_directory_uri(); ?>/assets/Aditya_Shah_CV.pdf" class="download-btn" download>
                <i class="fas fa-download"></i>
                <?php echo __('Download Resume', 'portfolio'); ?>
            </a>
        </section>
    </div>
</main>

<?php get_footer(); ?>